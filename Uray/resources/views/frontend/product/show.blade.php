@extends('Layouts.frontend')
@section('content')

<div class="title-page"
     style="background-image: url('{{ asset('imager/shop/Shop_3Columns-title.jpg')}}');background-position: center center;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 inner-title-page">
                <h1>Sản phẩm</h1>
                <p><span>Chi tiết sản phẩm</p>
            </div>
        </div>
    </div>
</div>
<!--end title detail-->
<!--product detail-->
<div class="container">
    <div class="product-single-detail">
        <div class="row product_detail">
            <div class="col-md-6 col-sm-12 col-12">
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        @foreach( $imgDetails as $imgDetail )
                            <li>
                                <img src="{{ asset('imager/product-detail/'.$imgDetail->image_detail)}}" alt="">
                            </li>
                        @endforeach
                        <!-- items mirrored twice, total of 12 -->
                    </ul>
                </div>
                <div id="carousel" class="flexslider">
                    <ul class="slides">
                        @foreach( $imgDetails as $imgDetail )
                            <li>
                                <img src="{{ asset('imager/product-detail/'.$imgDetail->image_detail)}}" alt="">
                            </li>
                        @endforeach
                        <!-- items mirrored twice, total of 12 -->
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12 content-product">
                <h2>{{ $product->product_name }} | {{ $product->price }}</h2>
                <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i class="fas fa-star"></i> &nbsp; ( {{ $count }} đánh giá của khách hàng)</p>
                <div class="infor-product">
                    <p><span>Đơn giá: </span>{{ number_format($product->price,0)}}</p>
                    @foreach($category as $name)
                    <p><span>Danh mục: </span>{{$name->name}}</p>
                    @endforeach
                    <p><span>Chia sẻ: </span>
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a></p>
                </div>
                <div>
                     @if($product->qty_nhap != 0)
                        <div class="btn-group">
                            <button type="button" class="prev btn ">-</button>
                            <button type="button" class="show-number btn ">1</button>
                            <button type="button" class="next btn ">+</button>
                        </div>
                        
                        <div class="btn-group">
                           
                                <a href="{{ route('frontend.cart.insert',['id'=>$product->id])}}" class="btn add-to-cart">Thêm vào giỏ hàng
                                    <p>
                                        <i class="fas fa-cart-plus"></i>
                                    </p> 
                                </a>
                            
                        </div>
                    @else
                        <h5>Mặt hàng này hiện đã hết</h5>
                    @endif
                    
                </div>
                <div class="information">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                               role="tab" aria-controls="pills-home" aria-selected="true">Mô tả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                               role="tab" aria-controls="pills-contact" aria-selected="false">Bình luận ({{ $count }})</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            {{$product->prdescriptions}}
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                             aria-labelledby="pills-contact-tab">
                            <div class="woocommerce-Reviews" id="reviews">
                                <h2>{{ $count }} đánh giá</h2>
                                <div id="comments">
                                    <div class="comment-list">
                                        @foreach($reviews as $review)
                                        <div class="comment-item">
                                            <div class="comment-content">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img style="width: 100px; height: 100px; border-radius: 50%" src="{{ asset('Uploads/avatar/'.$review->avatar) }}" alt="customer">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="comment-body">
                                                            <div class="comment-author">
                                                                <span class="author">{{ $review->name }}</span>
                                                                @if(auth()->user())
                                                                    @if($review->user_id == auth()->user()->id )
                                                                        <a href="{{ route('review.edit',['id'=>$review->id])}}"><button style="background: #ffff; color: green; border: none; float: right;"><span class="lnr lnr-pencil"></span></button></a>
                                                                        <form action="{{ route('review.destroy',['id'=>$review->id]) }}" method="POST" style="float: right; margin-left: 10px;">
                                                                        {{ csrf_field() }}
                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                                                        <a href="#" onclick="return confirm('Bạn chắc chứ?')"><button style="background: #ffff; color: red; border: none;"><span class="lnr lnr-trash"></span></button></a>
                                                                    </form>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                            <span class="comment-time"></span>
                                                            <p>{{ $review->review }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
                                            <form id="commentform" class="comment-form common-form js-contact-form"
                                                  action="{{ route('review.store')}}" method="POST">
                                                  {{ csrf_field() }}
                                                <p class="comment-notes">
                                                    <span>Thêm bình luận</span>
                                                    
                                                </p>
                                                <p class="comment-form-comment">
                                                    <textarea id="comment" name="review" required=""
                                                              placeholder="Write Your Review..."></textarea>
                                                    <input type="hidden" name="id" value="{{$product->id}}">
                                                </p>
                                                <p class="form-submit">
                                                    <input name="submit" type="submit" id="submit"
                                                           class="submit au-btn btn-small" value="Submit">
                                                    <span><i class="zmdi zmdi-arrow-right"></i></span>

                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--end product detail-->
<!--product related-->
<div class="container">
    <div class="prodcut-related">
        <div class="title">
            <h3 class="text-center">Sản phẩm đề xuất</h3>
        </div>
        <div class="row product">
            @foreach($products as $product)
            <div class="col-md-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-img-top">
                        <a href="{{ route('frontend.cart.insert',['id'=>$product->id])}}" class="wp-post-image">
                            <img class="image-cover" src="{{ asset('imager/product/'.$product->image)}}" alt="product">
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
                    </div>
                    <div class="card-body">
                        <p class="card-title"><a href="{{ route('frontend.cart.insert',['id'=>$product->id])}}">{{$product->name}}</a></p>
                        <p class="woocommerce-loop-product__title"><a href="{{ route('frontend.product.show',['id'=>$product->id]) }}">
                            {{$product->product_name}}</a></p>
                        <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>{{$product->price}}
                                                    </span>
                                                </ins>
                                    </span>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </div>
</div>
<!--end product list-->
@endsection