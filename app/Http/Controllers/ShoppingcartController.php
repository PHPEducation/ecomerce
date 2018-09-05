<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Cart;

class ShoppingcartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Client.detailproduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if ($request->quantity == (integer)$request->quantity && $request->quantity > 0){
            $id = $request->id;
            $name = $request->name;
            $price = $request->price;
            $quantity = $request->quantity;
            Cart::add($id,$name,$quantity,$price);
            Session::flash('add_cart',"Đã thêm sản phẩm vào giỏ hàng");

        }
        else {
            $id = $request->id;
            Session::flash('error_cart',"Số lượng sản phẩm không hợp lệ");
        }

        return redirect('/product/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        foreach (ShoppingCart::all() as $item){
            if ($item->id == $id){
                ShoppingCart::remove($item->__raw_id);
                break;
            }
        }
        Session::flash('add_cart',"Xóa sản phẩm khỏi giỏ hàng thành công");
        return redirect('cart');
    }

}
