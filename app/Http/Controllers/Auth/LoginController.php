<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Category;
use App\DumpProduct;
use App\Product;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use ValidatesRequests;
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(Request $req)
    {
        $listCategories = Category::where('parent_id', 0)->get();
        foreach ($listCategories as $category) {
            $category['subCategories'] = Category::where('parent_id', $category->id)->get();
        }
        $dumpProductId = DumpProduct::all()->pluck('product_id')->toArray();
        $product = Product::whereIn('id', $dumpProductId)->with(['images', 'dumpProducts'])->get();
        view()->share('productsInCart', $product);
        view()->share('listCategories', $listCategories);
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        $listCategories = Category::where('parent_id', 0)->get();
        foreach ($listCategories as $category) {
            $category['subCategories'] = Category::where('parent_id', $category->id)->get();
        }
        $dumpProductId = DumpProduct::all()->pluck('product_id')->toArray();
        $productsInCart = Product::whereIn('id', $dumpProductId)->with(['images', 'dumpProducts'])->get();

        return view('auth.login', compact('listCategories', 'productsInCart'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function showRegistrationForm()
    {
         $listCategories = Category::where('parent_id',0)->get();
         foreach ($listCategories as $category) {
            $category['subCategories'] = Category::where('parent_id', $category->id)->get();
         }

         return view('auth.register',compact('listCategories'));
    }


}
