@extends('Layouts.frontend')

@section('content')
<div class="content-homepage">
    <!-- slide-homepage-1-->
    @include('Layouts.partions.slide')
    <!--end slide-homepage-1-->
    <!--item homepage-->
    <div class="container">
        <div class="row item-homepage">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 content-item-homepage">
                <div class="wpb_wrapper">
                    <div class="banner-section">
                        <div class="inner-banner-section">
                            <h2>Sắc đẹp</h2>
                            <img src="{{ asset('imager/home/banner-h2-1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 content-item-homepage">
                <div class="wpb_wrapper">
                    <div class="banner-section">
                        <div class="inner-banner-section">
                            <h2>Chăm sóc</h2>
                            <img src="{{ asset('imager/home/banner-h2-2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 content-item-homepage">
                <div class="wpb_wrapper">
                    <div class="banner-section">
                        <div class="inner-banner-section">
                            <h2>Trang điểm</h2>
                            <img src="{{ asset('imager/home/banner-h2-3.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end item homepage-->
    <!--Product out-->
    <div class="product-out-homepage2">
        <div class="container">
            <div class="product-out">
                <div class="title">
                    <h2 class="text-center">Sản phẩm</h2>
                </div>
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row product">
                                @foreach($products as $product)
                                <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="{{ asset('imager/product/'.$product->image)}}" alt="product">
                                            </a>
                                            @if($product->status == 'new')
                                                <p class="onnew">New</p>
                                            @elseif($product->status == 'sale')
                                                <p class="onsale">Sale</p>
                                            @else
                                                
                                            @endif
                                            <div class="icon-product">
                                                <a href="{{ route('frontend.cart.insert',['id'=>$product->id])}}"><button class="btn">
                                                    <span class="lnr lnr-lock"></span>
                                                </button></a>
                                                <a href="{{ route('frontend.product.show',['id'=>$product->id]) }}"><button type="button" class="btn click-quick-view">
                                                    <span class="lnr lnr-magnifier"></span>
                                                </button></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-title"><a href="{{ route('frontend.product.show',['id'=>$product->id]) }}">{{$product->name}}</a></p>
                                            <p class="woocommerce-loop-product__title"><a href="{{ route('frontend.product.show',['id'=>$product->id]) }}">{{ trim(substr( $product->product_name, 0, 35 )) }} ...</a></p>
                                            <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        {{$product->price}} <span class="woocommerce-Price-currencySymbol">VND</span>
                                                    </span>
                                                </ins>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--sale product-->

                                <!--end sale product-->
                                @endforeach
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 sale-product">
                                    <a href="#"><img src="{{ asset('imager/home/sale-product.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row product">
                                @foreach($products as $product)
                                <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="{{ asset('imager/product/'.$product->image)}}" alt="product">
                                            </a>
                                            @if($product->status == 'new')
                                                <p class="onnew">New</p>
                                            @elseif($product->status == 'sale')
                                                <p class="onsale">Sale</p>
                                            @else
                                                
                                            @endif
                                            <div class="icon-product">
                                                <a href="{{ route('frontend.cart.insert',['id'=>$product->id])}}"><button class="btn">
                                                    <span class="lnr lnr-lock"></span>
                                                </button></a>
                                                <a href="{{ route('frontend.product.show',['id'=>$product->id]) }}"><button type="button" class="btn click-quick-view">
                                                    <span class="lnr lnr-magnifier"></span>
                                                </button></a>
                                                
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-title"><a href="{{ route('frontend.product.show',['id'=>$product->id]) }}">{{$product->name}}</a></p>
                                            <p class="woocommerce-loop-product__title"><a href="{{ route('frontend.product.show',['id'=>$product->id]) }}">{{ trim(substr( $product->product_name, 0, 35 )) }} ...</a></p>
                                            <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        {{$product->price}} <span class="woocommerce-Price-currencySymbol">VND</span>
                                                    </span>
                                                </ins>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--sale product-->

                                <!--end sale product-->
                                @endforeach
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 sale-product">
                                    <a href="#"><img src="{{ asset('imager/home/sale-product.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row product">
                                @foreach($products as $product)
                                <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="{{ asset('imager/product/'.$product->image)}}" alt="product">
                                            </a>
                                            @if($product->status == 'new')
                                                <p class="onnew">New</p>
                                            @elseif($product->status == 'sale')
                                                <p class="onsale">Sale</p>
                                            @else
                                                
                                            @endif
                                            <div class="icon-product">
                                                <a href="{{ route('frontend.cart.insert',['id'=>$product->id])}}"><button class="btn">
                                                    <span class="lnr lnr-lock"></span>
                                                </button></a>
                                                <a href="{{ route('frontend.product.show',['id'=>$product->id]) }}"><button type="button" class="btn click-quick-view">
                                                    <span class="lnr lnr-magnifier"></span>
                                                </button></a>                                             
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-title"><a href="{{ route('frontend.product.show',['id'=>$product->id]) }}">{{$product->name}}</a></p>
                                            <p class="woocommerce-loop-product__title"><a href="{{ route('frontend.product.show',['id'=>$product->id]) }}">{{ trim(substr( $product->product_name, 0, 35 )) }} ...</a></p>
                                            <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        {{$product->price}}
                                                        <span class="woocommerce-Price-currencySymbol">VND</span>
                                                    </span>
                                                </ins>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--sale product-->

                                <!--end sale product-->
                                @endforeach
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 sale-product">
                                    <a href="#"><img src="{{ asset('imager/home/sale-product.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Product out-->
    <!--introduce homepage-->
    <div class="container">
        <div class="row introduce-homepage">
            <div class="introduce-left">
                <div class="row introduce-homepage-left">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 img-introduce">
                        <img src="{{ asset('imager/home/HomePage_v2-introduce1.jpg')}}" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 introduce-homepage-content">
                        <h2>0.1</h2>
                        <h5>Kem dưỡng ẩm</h5>
                        <p>Kem dưỡng ẩm là thứ bạn nên bôi mỗi ngày. Với tất cả sự lặp lại đó, đáng để xem xét chuyển sang một công thức sạch hơn, xanh hơn. Nhưng bạn không phải hy sinh kết cấu, kết quả hoặc sức khỏe làn da của bạn để chọn một công thức được làm mà không có thành phần bạn có thể muốn tránh. Dưới đây là 10 chất dưỡng ẩm tự nhiên và hữu cơ mà các biên tập viên và chuyên gia của chúng tôi khuyên dùng...
                        </p>
                        <button class="btn">XEM THÊM</button>
                    </div>
                </div>
            </div>

            <div class="introduce-right">
                <div class="row introduce-homepage-right">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-0 col-0 introduce-homepage-content sub-intro1">
                        <h2>0.2</h2>
                        <h5>Chiết xuất từ thiên nhiên</h5>
                        <p>Thành phần lành tính, thân thiện làn da, ít ảnh hưởng sức khỏe dù dùng trong thời gian dài giúp mỹ phẩm chiết xuất thiên nhiên được lòng người dùng.Theo các chuyên gia làm đẹp của Venesa, phụ nữ ngày càng hiểu rõ mối liên kết chặt chẽ của sức khỏe và vẻ đẹp. Họ cũng dành sự quan tâm lớn hơn cho bảng thành phần mỗi khi quyết định chi tiền cho một sản phẩm chăm sóc nào đó... 
                        </p>
                        <button class="btn">XEM THÊM</button>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 img-introduce">
                        <img src="{{ asset('imager/home/HomePage_v2-introduce2.jpg')}}" alt="">
                    </div>
                   
                </div>
            </div>

            <div class="introduce-left">
                <div class="row introduce-homepage-left">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 img-introduce">
                        <img src="{{ asset('imager/home/HomePage_v2-introduce3.jpg')}}" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 introduce-homepage-content">
                        <h2>0.3</h2>
                        <h5>Sản phẩm chính hãng</h5>
                        <p>Hiện nay có vô số kiểu dáng sản phẩm bày bán trên thị trường. Tuy nhiên, thật giả khó phân biệt. Bạn lo lắng sản phẩm mình mua là hàng nhái, không tốt cho da? Hiểu nỗi lo đó, chúng tôi cam kết chỉ nhập khẩu sản phẩm chính hãng, uy tín...
                        </p>
                        <button class="btn">XEM THÊM</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="container">
        <div class="row content-follow-insta">
            <div class="title-follow-insta">
                <h2>Theo dõi Instagram</h2>
                <p>@Uray.cosmetic_beauty</p>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item"><a href="#"><img src="{{ asset('imager/home/follow1.jpg')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{ asset('imager/home/follow2.jpg')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{ asset('imager/home/follow3.jpg')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{ asset('imager/home/follow4.jpg')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{ asset('imager/home/follow5.jpg')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{ asset('imager/home/follow1.jpg')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{ asset('imager/home/follow2.jpg')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{ asset('imager/home/follow3.jpg')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{ asset('imager/home/follow4.jpg')}}" alt=""></a></div>
                <div class="item"><a href="#"><img src="{{ asset('imager/home/follow5.jpg')}}" alt=""></a></div>
            </div>
            

        </div>
    </div>
    <!--end Follow Instagram-->
</div>
@endsection