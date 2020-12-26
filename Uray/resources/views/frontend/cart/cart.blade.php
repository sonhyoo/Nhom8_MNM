@extends('Layouts.frontend')
@section('content')
<div class="title-page"
     style="background-image: url('{{ asset('imager/shop/Shop_3Columns-title.jpg')}}');background-position: center center;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 inner-title-page">
                
                <h1> Giỏ hàng </h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row content-cart">
        <table class="table cart-desktop">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col" style="text-align: left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sản phẩm</th>
                <th scope="col">Đơn giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Tổng tiền</th>
            </tr>
            </thead>
            <tbody>
            <form method="post" action="{{ route('frontend.cart.update')}}">
                {{ csrf_field() }}
                @foreach($products as $product)
                <tr>
                    <td><a href="{{ route('frontend.cart.delete',['id'=>$product->id]) }}">X</a></td>
                    <td>
                        <div class="row">
                            <img width="100px" height="100px" src="{{asset('imager/product/'.$product->image)}}" alt="">
                            <p>{{$product->product_name}}</p>
                        </div>
                    </td>
                    <td>{{$product->price}} VND</td>
                    <td>
                        <div class="btn-group">
                            <input style="width: 50px; text-align: center; border: none;" type="number" name="qty[{{$product->id}}]" value="{{$product->qty}}">
                        </div>
                    </td>
                    <td>{{ $product->price * $product->qty }} VND</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="cart-mobile">
            <table class="table">
                <tr>
                    <td colspan="2">
                        <img src="{{ asset('imager/cart1.jpg')}}" alt="">
                    </td>
                </tr>
                <tr>
                    <th>Sản phẩm</th>
                    <td>Skin recreation</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>$56</td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="prev btn ">-</button>
                            <button type="button" class="show-number btn ">1</button>
                            <button type="button" class="next btn ">+</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>$56</td>
                </tr>
            </table>
            <span>X</span>
        </div>
        <div class="cart-mobile">
            <table class="table">
                <tr>
                    <td colspan="2">
                        <img src="{{ asset('imager/cart2.jpg')}}" alt="">
                    </td>
                </tr>
                <tr>
                    <th>Product</th>
                    <td>Face cream</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>$48</td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="prev btn ">-</button>
                            <button type="button" class="show-number btn ">3</button>
                            <button type="button" class="next btn ">+</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>$144</td>
                </tr>
            </table>
            <span>X</span>
        </div>
        <div class="card-button">
            <input type="submit" class="btn update float-right" name="submit" value="CẬP NHẬT">
            </form>
            <a href="{{ route('frontend.category.index')}}"><button type="button" class="btn apply float-left">MUA HÀNG</button></a>
        </div>
        <div class="rocart-total">
            <h2>Tổng đơn hàng</h2>
            <ul class="list-inline">
                <li class="list-inline-item"><p>Tổng tiền</p></li>
                <li class="list-inline-item"><p>{{ $products->total }} VND </p></li>
            </ul>
            <a href="{{ route('order.index')}}"><button class="btn float-left">CHUYỂN ĐẾN THANH TOÁN</button></a>
        </div>
    </div>
</div>
@endsection