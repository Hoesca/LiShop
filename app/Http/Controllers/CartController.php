<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Models\CartItem;
//use Illuminate\Http\Request;
use App\Http\Requests\AddCartRequest;
use App\Models\ProductSku;

class CartController extends Controller
{
    //
    public function index(Request $request)
    {
        $cartItems = $request->user()->cartItems()->with(['productSku.product'])->get();

        return view('cart.index', ['cartItems' => $cartItems]);
    }

    public function add(AddCartRequest $request)
    {
        $user = $request->user();
        $skuId = $request->input('sku_id');
        $amount = $request->input('amount');
        //if user already have cart items,just make amount increment
        if ($cart = $user->cartItems()->where('product_sku_id', $skuId)->first()){
            $cart->update([
                'amount' => $cart->amount + $amount,
            ]);
        }else {
            //else,create a new one and save to database
            $cart = new CartItem(['amount' => $amount]);
            $cart->user()->associate($user);
            $cart->productSku()->associate($skuId);
            $cart->save();
        }
    }

    public function delete(ProductSku $productSku, Request $request)
    {
        $request->user()->cartItems()->where('product_sku_id', $productSku->id)->delete();
        return [];
    }

    //TODO:边栏购物车
}
