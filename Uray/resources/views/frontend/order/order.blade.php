@extends('Layouts.frontend')
@section('content')
<!--title page-->
<div class="title-page"
     style="background-image: url('{{ asset('imager/shop/Shop_3Columns-title.jpg') }}');background-position: center center;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 inner-title-page">
                <h1>Thông tin đặt hàng</h1>
            </div>
        </div>
    </div>
</div>
<!--end title page-->
<div class="container">
    <div class="row content-checkout">
        <div class="col-md-6 billing-detail">
            <form action="{{ route('order')}}" method="post">
                {{ csrf_field() }}
            <h2>Thông tin đặt hàng</h2>
            <p>Họ tên<span>*</span></p>
            <input type="text" value="{{auth()->user()->name}}" name="user_name" required >
            
            <p>Địa chỉ<span>*</span></p>
            <input type="text" placeholder="Địa chỉ" value="{{auth()->user()->address}}" name="address" required>
            <div class="row">
                <div class="col-md-6"><p>Điện thoại<span>*</span></p>
                    <input type="text" value="{{auth()->user()->phone }}" name="phone" required>
                </div>
                <div class="col-md-6"><p>Email<span>*</span></p>
                    <input type="text" value="{{auth()->user()->email }}" name="email" required>
                </div>
            </div>
            <h3>Thông tin thêm</h3>
            <p>Ghi chú</p>
            <textarea placeholder="Ghi chú về đơn hàng của bạn" name="note"></textarea>

        </div>
        <div class="col-md-6 item-checkout">
            <h2>Đơn hàng của bạn</h2>
            <div class="item-checkout-detail" style="border-bottom: 1px solid #e6e6e6;">
                 @foreach(session('carts') as $cart)
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-5">
                            <img src="{{ asset('imager/product/'.$cart->image)}}" class="card-img" alt="...">
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-7">
                            <div class="card-body">
                                <p class="card-text">{{$cart->product_name}}</p>
                                <p class="card-text">x {{$cart->qty}}</p>
                                <span class="price">
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            {{$cart->price}} <span class="woocommerce-Price-currencySymbol">VND</span>
                                        </span>
                                    </ins>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="sub-payment">
                <h5>Shipping &nbsp;&nbsp;&nbsp;<small> Hiện tại, hình thức thanh toán qua thẻ của cửa hàng đang tạm bảo trì. Quý khách vui lòng thanh toán khi nhận hàng!
                </small>
                </h5>
            </div>
            <div class="sub-payment">
                <h5>Tổng tiền &nbsp;&nbsp;&nbsp;<span>{{session('carts')->total}} VND</span></h5>
            </div>
            <div class="payment">
                <div class="content-type-payment">
                    <input type="radio" name="type-payment" class="showpayment" disabled>&nbsp;&nbsp;Thanh toán qua tài khoản ngân hàng
                    <div class="input-content">
                        Make your payment directly into our bank account. Please use your Order ID as the payment
                        reference.
                        Your order will not be shipped until the funds have cleared in our account.
                    </div>
                </div>
                <div class="content-type-payment">
                    <input type="radio" name="type-payment" class="showpayment" >&nbsp;&nbsp;Thanh toán khi nhận hàng
                    <div class="input-content">
                        Vui lòng kiểm tra lại số điện thoại, địa chỉ nhận hàng để giúp quá trình vận chuyển hàng thêm nhanh chóng!
                    </div>
                </div>
                
            </div>
            <div style="width: 100%;text-align: center;margin-top: 40px;">
            <button class="btn">ĐẶT HÀNG</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection