<?php

namespace App\Http\Controllers;


use App\Products;
use Illuminate\Http\Request;


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
                'attributes' => array()
            ));
            return 'success';        
        }else {
            return 'fail';
        }
    }

    public function content()
    {
        $cartCollection = \Cart::getContent();
        dd($cartCollection );
    }
}
