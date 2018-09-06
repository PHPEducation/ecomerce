<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validationLoginRequest;
use App\Http\Requests\validationRegisterRequest;
use App\Http\Requests\CartRequest;
use App\Slide;
use App\Product;
use App\Category;
use Session;
use App\Cart;
use App\User;
use App\Bill;
use App\BillDetail;
use App\Comment;
use Hash;
use Auth;


class PageController extends Controller
{
   public function __construct()
    {
        if (Auth::check())
        {
            view()->share('user', Auth::user());
        }
    }

    public function getIndex()
    {
        $slide = Slide::all();
        $newproducts = Product::where('status', 1)->paginate(config('app.paginates'));
        $topproducts = Product::where('promotion_price', '<>', '0')->paginate(config('app.pagination'));

        return view('Client.home', compact('slide', 'newproducts', 'topproducts'));
    }

    public function categorytype($type)
    {
        $typeProducts = Product::where('category_id', $type)->get();
        $catetoryFurthers = Product::where('category_id', '<>', $type)->paginate(config('app.paginate'));
        $categoryTypes = Category::all();

        return view('Client.category_type', compact('typeProducts', 'catetoryFurthers', 'categoryTypes'));
    }

    public function detailproduct($id, Request $request)
    {
        $product = Product::where('id', $id)
        ->with(['comments' => function($q){
            $q->paginate(3)->last();
        }])
        ->first();
        $productothers = Product::where('category_id' ,'<>', $product->id)
                        ->paginate(3);

        return view('Client.detailproduct', compact('product', 'productothers'));
    }

    public function getComment($id)
    {

         $comments = Comment::where('product_id', $id)
                            ->orderBy('id', 'DESC')
                            ->first();;

        if ($request->ajax())
        {
            dd("xin chao");
            return view('Client.comment', compact('comments'));
        }

    }

    public function comments($id, Request $req)
    {
        $comments = new Comment;
        $product_id = $id;
        $comments->user_id  = Auth::user()->id;
        $product = Product::find($id);
        $comments->content = $req->content;
        $comments->product_id = $product_id;
        $comments->save();

        return response()->json();
    }


    public function contact()
    {
        return view('Client.contacts');
    }

    public function login()
    {
        return view('Client.login');
    }

    public function register()
    {
        return view('Client.register');
    }

    public  function postRegister(validationRegisterRequest $req)
    {
        $user = new User;
        $user->name = $req->fullname;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->phone = $req->phone;
        $user->password = Hash::make($req->password);
        $user->save();

        return redirect()->back()->with('thongbao', 'dang ky thanh cong');
    }

    public function about()
    {
        return view('Client.about');
    }

    public function checkout()
    {

        return view('Client.checkout');
    }

    public function viewCart()
    {
         return view('Client.cart');
    }
    public function addToCart(Request $req)
    {
        $product = Product::find($req->id);
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $req->id);
        $req->Session()->put('cart', $cart);

        return redirect()->back();
    }


    public function postLogout() {
        Auth::logout();

        return redirect()->route('trangchu');
    }


    public function updateCart(Request $cartdata, $id)
    {
        $cart = Session::get('cart');
        foreach ($cart->items as $key => $item)
        {
            if ($item['item']['id'] == $id){
                $k = $key;
                $qty = $cartdata->qty;
                $item['qty'] = $qty;
                $item['total'] = $item['price'] * $qty;
                $cart->items[$k] = $item;
            }
        }

        Session::put('cart', $cart);
        return redirect()->back();
    }

    public function delItemCart($id)
    {
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('cart', $cart);
        return redirect()->back();
    }

    public function searchProduct(Request  $req)
    {
        $searchProducts = Product::where('name', 'like', "%".$req->key."%" )
                            ->orWhere('price', $req->key )
                            ->get();

        return view('Client.searchProduct', compact('searchProducts'));
    }

    public function postCheckOut(CartRequest $req)
    {
        $cart = Session::get('cart');

        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->phone = $req->phone;
        $user->note = $req->note;
        $user->save();

        $bill = new Bill;
        $bill->user_id =  $user->id;
        $bill->date = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment_method;
        $bill->note = $req->note;
        $bill->save();

        foreach ($cart->items as $key => $value) {

            $bill_detail = new BillDetail;
            $bill_detail->bill_id = $bill->id;
            $bill_detail->product_id = $key;
            $bill_detail->quanity = $value['qty'];
            $bill_detail->unit_price = ($value['price']/$value['qty']);
            $bill_detail->save();
        }
        return redirect()->back()->with('thongbao', 'dat hang thanh cong');
    }


}

