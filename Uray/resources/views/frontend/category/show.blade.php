@extends('Layouts.frontend')
@section('content')
<!--title detail-->
<div class="title-page"
     style="background-image: url('{{ asset('imager/shop/Shop_3Columns-title.jpg')}}');background-position: center center;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 inner-title-page">
                <h1>Cửa hàng</h1>
                <p><span>Danh mục sản phẩm</p>
            </div>
        </div>
    </div>
</div>
<!--end title detail-->
<!--product list-->
<div class="container">
    <div class="prodcut-list">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                <div class="row header-show-list">
                    <div class="col-md-6 col-sm-12 col-12">
                        <p>Hiển thị {{ count($products) }} sản phẩm</p>
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                    <form id="search" action="{{ route('frontend.category.search')}}" method="post">
                        {{ csrf_field() }}
                        <select class="float-right" name="sort">
                            <option value="1">Sắp xếp mặc định</option>
                            <option value="2">Sắp xếp mới nhất</option>
                            <option value="3">Sắp xếp theo giá: Thấp đến cao</option>
                            <option value="4">Sắp xếp theo giá: Cao đến thấp</option>
                        </select>
                    </div>
                </div>
                <div class="row product">
                    @foreach($products as $product)
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-img-top">
                                @if($product->qty_nhap != 0)
                                    <a href="{{ route('frontend.product.show',['id'=>$product->id]) }}" class="wp-post-image" style="background-color: #dfdfdf">
                                        <img class="image-cover"  src="{{ asset('imager/product/'.$product->image)}}" alt="product">
                                    </a>
                                    @if($product->status == 'new')
                                        <p class="onnew">New</p>
                                    @elseif($product->status == 'sale')
                                        <p class="onsale">Sale</p>
                                    @else
                                    
                                    @endif
                                    <div class="icon-product">
                                        <a href="{{ route('frontend.cart.insert',['id'=>$product->id])}}"><span class="lnr lnr-lock btn prbtn" style="background-color: #ffa6a8; color: white; border-radius: 50%; bottom: 5px;"></span></a>
                                        <a href="{{ route('frontend.product.show',['id'=>$product->id]) }}"><span class="lnr lnr-magnifier btn prbtn" style="background-color: #ffa6a8; color: white; border-radius: 50%;"></span>
                                        </a>
                                    </div>
                                @else
                                    <a href="#" class="wp-post-image" style="background-color: #dfdfdf; opacity: 0.5;">
                                        <img class="image-cover" style="opacity: 0.5 !important;"  src="{{ asset('imager/product/'.$product->image)}}" alt="product">
                                    </a>
                                    <p class="onsale">Hết hàng</p>    
                                @endif    
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
                    @endforeach
                    @if(count($products) == 9)
                    <ul class="pagination justify-content-center">
                        <li class="page-item">{!! $products->links() !!}</li>
                        
                    </ul>
                    @endif
                </div>
                
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="content-blog-left">
                    <div class="search-blog">
                        <input type="text" name="search" placeholder="Search" class="float-left">
                        <button type="submit" form="search" class="btn float-right"><span class="lnr lnr-chevron-right"></span></button>
                    </form>
                    </div>
                    <div class="filter-price">
                        <h2>Lọc theo giá sản phẩm</h2>
                        <p></p> 
                        <form action="{{ route('frontend.category.filter')}}" method="post">
                            <span class="float-left">Giá:
                                {{ csrf_field() }}
                                <select name="filter" style="width: 100px; margin-left: 15px;">
                                    <option value="1">0 - 100000</option>
                                    <option value="2">100000 - 500000</option>
                                    <option value="3"> > 500000</option>
                                </select>
                            </span>

                            <button class="btn float-right">LỌC</button>
                        </form>
                    </div>
                    <div class="category-blog">
                        <h2>Danh mục sản phẩm</h2>
                        @foreach($categories as $category)
                        <a href="{{ route('frontend.category.show',['id'=>$category->id]) }}">{{$category->name}}</a>
                        @endforeach
                    </div>
                    <div class="popular-item">
                        <h2>Sản phẩm đặc biệt</h2>
                        @foreach($popular as $product)
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-6">
                                   <a href="{{ route('frontend.product.show',['id'=>$product->id]) }}"><img src="{{ asset('imager/product/'.$product->image)}}" class="card-img" alt="..."></a>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-6 col-6">
                                    <div class="card-body">
                                        <h5 class="card-title woocommerce-loop-product__title"><a href="{{ route('frontend.product.show',['id'=>$product->id]) }}">{{ trim(substr( $product->product_name, 0, 10 )) }} ...</a></h5>
                                        <p class="card-text price">
                                            <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        {{$product->price}} <span class="woocommerce-Price-currencySymbol">VND</span>
                                                    </span>
                                            </ins>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="lastest-img">
                        <img src="{{ asset('imager/portfolio/Portfolio_Single_Images_item.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end product list-->
@endsection