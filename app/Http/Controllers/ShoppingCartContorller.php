<?php

namespace App\Http\Controllers;


use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ShoppingCartContorller extends Controller
{
    //
    public function add(Request $request)
    {
        $product = Products::find($request->productId);
        if ($product) {
            \Cart::add(array(
                'id' => $product->id, // inique row ID
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'attributes' => array(
                    'img'=>$product->img,
                )
            ));
            return 'success';        
        }else {
            return 'fail';
        }
    }

    public function delete(Request $request)
    {
        if ($request->productId) {
            \Cart::remove($request->productId);
            return 'success';
        }else {
            return 'fail';
        }
    }

    public function update(Request $request)
    {
        if ($request->productId) {
            // \Cart::update($request->productId,array(
            //     'quantity' => $request->qty,
            // ));
            \Cart::update($request->productId,array(
                'quantity' => $request->qty,
            ));
            $product = \Cart::get($request->productId);
            return $product->quantity;
        }else {
            return 'fail';
        }
    }

    public function list()
    {
        $cartCollection = \Cart::getContent()->sortBy('id');
        // $newsData = products::get();
        return view('front.shoppingcart.cart1',compact('cartCollection'));
    }

    public function payment()
    {
        // $cartCollection = \Cart::getContent();
        // \Cart::clear();
        if (\Cart::isEmpty()) {
            return redirect('/products')
            ->with('message','滾去買東西!!');
        }else {

            return view('front.shoppingcart.cart2');
        }
    }

    public function paymentCheck(Request $request)
    {
        Session::put('payment',$request->payment);
        Session::put('shipment',$request->shipment);

        return view('front.shoppingcart.cart3');
    }
}
