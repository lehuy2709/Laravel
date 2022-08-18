@extends('client.layout.master')
@section('main-content')
@section('content-title', 'Cart')
<div class="row">
    <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">

        <table>
            <thead class="cart__row cart__header">
                <tr>
                    <th class="text-center">Product</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Size</th>
                    <th class="text-right">Total</th>
                    <th colspan="2" class="action">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @if (Session::has('cart')  &&  !empty(Session::get('cart')))
                    <?php $total = 0; ?>

                    @foreach (session('cart') as $id => $item)
                        <?php
                        $total += $item['price'] * $item['quantity'];
                        ?>
                        <form action="{{ Route('products.updateCart') }}" method="post">
                            @csrf
                            <input type="hidden" name="idProd" value="{{ $id }}">
                            <tr class="cart__row border-bottom line1 cart-flex border-top">
                                <td class="cart__meta small--text-left cart-flex-item">
                                    <div class="list-view-item__title">
                                        <a href="#">{{ $item['name'] }}</a>
                                    </div>
                                </td>
                                <td class="cart__image-wrapper cart-flex-item">
                                    <a href=""><img class="cart__image" src="{{ asset($item['image']) }}"
                                            alt="Elastic Waist Dress - Navy / Small"></a>
                                </td>

                                <td class="cart__price-wrapper cart-flex-item">
                                    <span class="money">{{ number_format($item['price']) }}</span>
                                </td>
                                <td data-th="Quantity" class="cart__update-wrapper cart-flex-item text-right">
                                    <div class="cart__qty text-center">
                                        <div class="qtyField">

                                            <button class="qtyBtn minus"><i class="icon icon-minus"></i></button>
                                            <input class="cart__qty-input qty" type="text" name="quantity"
                                                id="qty" value="{{ $item['quantity'] }}">
                                            <button class="qtyBtn plus"><i class="icon icon-plus"></i></button>



                                        </div>
                                    </div>
                                </td>
                                <td class="text-right small--hide cart-price">
                                    <div><span class="money">{{ $item['size'] }}</span></div>
                                </td>
                                <td class="cart__price-wrapper cart-flex-item">
                                    <span class="money">{{ number_format($item['price'] * $item['quantity']) }}</span>
                                </td>
                                <td class="text-center small--hide"><a href="{{ Route('deleteCart', $id) }}"
                                        class="btn btn--secondary cart__remove" title="Remove tem"><i
                                            class="icon icon anm anm-times-l"></i></a></td>



                            </tr>
                        </form>
                    @endforeach
                @else
                    <h1>Giỏ hàng trống</h1>
                @endif

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-left"><a href="{{ Route('products.products') }}"
                            class="btn--link cart-continue"><i class="icon icon-arrow-circle-left"></i> Continue
                            shopping</a></td>
                </tr>
            </tfoot>
        </table>

        <hr>


    </div>

    <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
        <div class="solid-border">
            <div class="row">
                <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span
                        class="money"> {{ isset($total) ? number_format($total) :'' }}</span></span>
            </div>
            <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
            <p class="cart_tearm">
                <label>
                    <input type="checkbox" name="tearm" id="cartTearm" class="checkbox" value="tearm" required="">
                    I agree with the terms and conditions</label>
            </p>
            <input type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout"
                value="Checkout" disabled="disabled">
        </div>

    </div>

</div>
</div>

@endsection
