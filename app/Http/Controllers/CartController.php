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
    public function addCart(Product $product, Request $request)
    {

        $cart = session()->get('cart');

        // trả về null

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $request->quantity;
            session()->put('cart', $cart);
            return redirect()->route('cart')->with('success', "Thêm vào giỏ hàng thành công");
        }
        $cart[$product->id] = [
            'name' => $product->name,
            'quantity' => $request->quantity,
            'price' => $product->price,
            'image' => $product->image,
            'size' => $request->size
        ];
        session()->put('cart', $cart);
        return redirect()->route('cart')->with('success', "Thêm vào giỏ hàng thành công");
    }

    public function updateCart(Request $request)
    {
        $cart = session()->get('cart');
        $cart[$request->idProd]["quantity"] = $request->quantity;
        session()->put('cart', $cart);
        return redirect()->back();
    }

    public function deleteCart($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', "Xóa Giỏ Hàng Thành Công");
    }
}
