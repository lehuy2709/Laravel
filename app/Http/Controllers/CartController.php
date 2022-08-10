<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function showCart()
    {
        return view('client.cart.cart');
    }
    // public function addCart(Product $product, Request $request)
    // {
    //     $idProd = $product->id;
    //     $cart = session()->get('cart');

    //     if (isset($cart[$idProd])) {
    //         $cart = [
    //             $idProd => [
    //                 'name' => $product->name,
    //                 'quantity' => $request->quantity,
    //                 'price' => $product->price,
    //                 'image' => $product->image
    //             ]
    //         ];
    //         if (isset($cart[$idProd]['quantity'])) {
    //             $cart[$idProd]['quantity']++;
    //         }
    //         session()->put('cart', $cart);
    //         return redirect()->route('cart')->with('success', 'Thêm vào giỏ hàng thành công');
    //     } else {
    //         $cart = [
    //             $idProd => [
    //                 'name' => $product->name,
    //                 'quantity' => $request->quantity,
    //                 'price' => $product->price,
    //                 'image' => $product->image
    //             ]

    //         ];
    //         dd(session()->put('cart', $cart));
    //         session()->put('cart', $cart);
    //         return redirect()->route('cart')->with('success', 'Thêm vào giỏ hàng thành công');
    //     }

    //     // if (isset($cart[$idProd])) {
    //     //     $cart[$idProd]['quantity']++;
    //     //     session()->put('cart', $cart);
    //     //     return redirect()->route('cart')->with('success', 'Thêm vào giỏ hàng thành công');
    //     // }

    //     // $cart = [
    //     //     $idProd => [
    //     //         'name' => $product->name,
    //     //         'quantity' => $request->quantity,
    //     //         'price' => $product->price,
    //     //         'image' => $product->image
    //     //     ]

    //     // ];
    //     // session()->put('cart', $cart);
    //     // return redirect()->route('cart')->with('success', 'Thêm vào giỏ hàng thành công');
    // }
    public function addCart(Product $product)
    {
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [$product->id => $this->sessionData($product)];
            return $this->setSessionAndReturnResponse($cart);
        }
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
            return $this->setSessionAndReturnResponse($cart);
        }
        $cart[$product->id] = $this->sessionData($product);
        return $this->setSessionAndReturnResponse($cart);

    }

    // public function changeQty(Request $request, Product $product)
    // {
    //     $cart = session()->get('cart');
    //     if ($request->change_to === 'down') {
    //         if (isset($cart[$product->id])) {
    //             if ($cart[$product->id]['quantity'] > 1) {
    //                 $cart[$product->id]['quantity']--;
    //                 return $this->setSessionAndReturnResponse($cart);
    //             } else {
    //                 return $this->removeFromCart($product->id);
    //             }
    //         }
    //     } else {
    //         if (isset($cart[$product->id])) {
    //             $cart[$product->id]['quantity']++;
    //             return $this->setSessionAndReturnResponse($cart);
    //         }
    //     }

    //     return back();
    // }

    // public function removeFromCart($id)
    // {
    //     $cart = session()->get('cart');

    //     if (isset($cart[$id])) {
    //         unset($cart[$id]);
    //         session()->put('cart', $cart);
    //     }
    //     return redirect()->back()->with('success', "Removed from Cart");
    // }

    protected function sessionData(Product $product)
    {
        return [
            'name' => $product->name,
            'quantity' => 1,
            'price' => $product->price,
            'image' => $product->image
        ];
    }

    protected function setSessionAndReturnResponse($cart)
    {
        session()->put('cart', $cart);
        return redirect()->route('cart')->with('success', "Added to Cart");
    }




}
