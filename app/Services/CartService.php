<?php

namespace App\Services;

use App\Http\Requests\AddCartRequest;
use App\Models\CartItem;
use Auth;

class CartService
{
    public function get()
    {
        return Auth::user()->cartItems()->with(['productSku.product'])->get();
    }

    public function add($skuId, $amount)
    {
        $user = Auth::user();
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

    public function remove($skuIds)
    {
        // 可以传单个 ID，也可以传 ID 数组
        if (!is_array($skuIds)) {
            $skuIds = [$skuIds];
        }
        Auth::user()->cartItems()->whereIn('product_sku_id', $skuIds)->delete();
    }
}
