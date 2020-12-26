<!--header desktop-->
<div class="header relative">
    <div class="container-fluid search-header">
        <form>
            <input type="text" placeholder="Search">
            <span class="close-search">X</span>
        </form>
    </div>
    <div class="container-fluid header-main fixed">
        <div class="header-desktop ">
            <div class=" header-menu-desktop d-flex justify-content-between ">
                <div>
                    <div class="logo">
                        <a href="{{ url('/')}}"><img src="{{ asset('imager/home/Logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div>
                    <div class="menu ">
                        <ul>
                            <li><a href="{{ url('/')}}" class="home">Trang chủ</a>
                            </li>
                            <li><a href="/about" class="about">Giới thiệu</a>
                            </li>
                            <li><a href="{{ url('/productlist')}}" class="productlist">Cửa hàng</a>
                            </li>
                            <li><a href="/contact" class="contact">Liên hệ</a></li>
                            @if(auth()->user())
                                <li><a href="/account" class="account">Tài khoản</a>
                                    <ul>
                                        <li><a href="{{ route('account.index')}}">Cập nhật thông tin</a></li>
                                        <li><a href="{{ route('changePassword.index')}}">Đổi mật khẩu</a></li>
                                        
                                    </ul>
                                </li>
                                <li><a href="{{ route('logout')}}">Đăng xuất</a></li>
                            @else
                                <li><a href="{{ route('login')}}">Đăng nhập</a></li>
                            @endif 
                            
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="header-right">
                        <ul class="list-inline">
                            @if(Session::has('carts'))
                            <li><a href="#" class="cart-index">
                                <img src="{{ asset('imager/home/bag-2.png') }}" alt=""
                                     style="width: 16px;height: 22px;margin-top: -10px;">
                                
                                <div class="number-cart">
                                    {{session('carts')->totalQty}}
                                </div>
                                </a>
                                <div class="widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">

                                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                        
                                            @foreach(session('carts') as $cart)
                                            <li class="woocommerce-mini-cart-item mini_cart_item clearfix">
                                                <a class="product-image" href="#">
                                                    <img src="{{ asset('imager/product/'.$cart->image)}}" style="width: 50px; height: 50px;">
                                                </a>
                                                <a class="product-title" href="#">{{$cart->product_name}}</a>

                                                <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                        {{$cart->price}}
                                                </span>
                                                <span class="quantity">
                                                    Qty: {{$cart->qty}}
                                                </span>
                                                <a href="#" class="remove">
                                                    <span class="lnr lnr-cross"></span>
                                                </a>
                                            </li>
                                            @endforeach
                                        
                                        </ul>
                                        <p class="woocommerce-mini-cart__total total">
                                            <span>Order Total:</span>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>
                                                {{session('carts')->total}}
                                            </span>
                                        </p>
                                        
                                        <p class="woocommerce-mini-cart__buttons buttons">
                                            <a href="/cart" class="button wc-forward au-btn btn-small">XEM GIỎ HÀNG</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li><a href="#" class="cart-index">
                                <img src="{{ asset('imager/home/bag-2.png') }}" alt=""
                                     style="width: 16px;height: 22px;margin-top: -10px;">
                                <div class="number-cart">
                                    0
                                </div>
                                </a>
                                <div class="widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">
                                        <p class="woocommerce-mini-cart__buttons buttons">
                                            <a href="/cart" class="button wc-forward au-btn btn-small">XEM GIỎ HÀNG</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @endif
                            <li><a href="javascript:void(0)" class="search-header1"><img src="{{ asset('imager/home/search-header.png')}}" alt="" style="width: 20px;height: 20px;margin-top: -10px;"></a>
                            </li>
                            
                        </ul>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!--end header desktop-->
<!--header mobile-->
<div class="header">
    <div class="container-fluid search-header">
        <form>
            <input type="text" placeholder="Search">
            <span class="close-search">X</span>
        </form>
    </div>
    <div class="container-fluid">
        <div class="header-mobile">
            <div class="header-menu-mobile d-flex justify-content-between">
                <div>
                    <button><span class="lnr lnr-menu click-mobile"></span></button>
                </div>
                <div class="logo">
                    <img src="{{ asset('imager/home/Logo.png')}}" alt="">
                </div>
                <div>
                    <div class="row header-right">
                        <ul class="list-inline">
                            @if(Session::has('carts'))
                            <li><a href="#" class="cart-index">
                                <img src="{{ asset('imager/home/bag-2.png') }}" alt=""
                                     style="width: 16px;height: 22px;margin-top: -10px;">
                                
                                <div class="number-cart">
                                    {{session('carts')->totalQty}}
                                </div>
                                </a>
                                <div class="widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">

                                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                        
                                            @foreach(session('carts') as $cart)
                                            <li class="woocommerce-mini-cart-item mini_cart_item clearfix">
                                                <a class="product-image" href="#">
                                                    <img src="{{ asset('imager/product/'.$cart->image)}}" style="width: 50px; height: 50px;">
                                                </a>
                                                <a class="product-title" href="#">{{$cart->product_name}}</a>

                                                <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                        {{$cart->price}}
                                                </span>
                                                <span class="quantity">
                                                    Qty: {{$cart->qty}}
                                                </span>
                                                <a href="#" class="remove">
                                                    <span class="lnr lnr-cross"></span>
                                                </a>
                                            </li>
                                            @endforeach
                                        
                                        </ul>
                                        <p class="woocommerce-mini-cart__total total">
                                            <span>Order Total:</span>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>
                                                {{session('carts')->total}}
                                            </span>
                                        </p>
                                        
                                        <p class="woocommerce-mini-cart__buttons buttons">
                                            <a href="/cart" class="button wc-forward au-btn btn-small">XEM GIỎ HÀNG</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li><a href="#" class="cart-index">
                                <img src="{{ asset('imager/home/bag-2.png') }}" alt=""
                                     style="width: 16px;height: 22px;margin-top: -10px;">
                                <div class="number-cart">
                                    0
                                </div>
                                </a>
                                <div class="widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">
                                        <p class="woocommerce-mini-cart__buttons buttons">
                                            <a href="/cart" class="button wc-forward au-btn btn-small">XEM GIỎ HÀNG</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @endif
                            <li><a href="javascript:void(0)" class="search-header1"><img src="{{ asset('imager/home/search-header.png')}}" alt="" style="width: 20px;height: 20px;margin-top: -10px;"></a>
                            </li>
                            <li><a href="javascript:void(0)" class="introduce1"><img
                                    src="{{ asset('imager/home/control-introduce.png')}}" alt=""
                                    style="width: 16px;height: 16px;margin-top: -10px;"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="menu-mobile">
            <ul>
                <li><a href="/" class="menu-active">Trang chủ</a>
                </li>
                <li><a href="/about">Giới thiệu</a>
                </li>
                <li><a href="{{ url('/productlist')}}">Cửa hàng</a>
                </li>
                <li><a href="/contact">Liên hệ</a></li> 
            </ul>
        </div>
    </div>
</div>