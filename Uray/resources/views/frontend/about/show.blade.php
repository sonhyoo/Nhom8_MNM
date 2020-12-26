@extends('Layouts.frontend')
@section('content')
<div class="content-about">
    <!--title page-->
    <div class="title-page"
         style="background-image: url('{{ asset('imager/title-page1.jpg')}}');background-position: center center;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 inner-title-page">
                    <h1>Giới thiệu</h1>
                </div>
            </div>
        </div>
    </div>
    <!--end title page-->
    <!--content about-->
    <div class="about">
        <div class="container">
            <div class="row inner-about">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 content-inner-about-left">
                    <div class="content-item-about">
                        <h3>Kinh nghiệm</h3>
                        <div style="clear: both"></div>
                        <p>Gần 5 năm kinh nghiệm hoạt động trong lĩnh vực mỹ phẩm làm đẹp, hiện đội ngũ nhân viên của Uray đã lên đến 150 người cùng hệ thống cửa hàng trải khắp ba miền đất nước</p>
                        <img class="img-icon-about" src="{{ asset('imager/about/icon-about1.png')}}" alt="">
                    </div>
                    <div class="content-item-about">
                        <h3>Chất lượng</h3>
                        <div style="clear: both"></div>
                        <p>Phân phối mỹ phẩm chính hãng có xuất xứ nguồn gốc rõ ràng: Hàng nhập khẩu, hàng xách tay từ Mỹ, Pháp, Anh, Nhật, Hàn, Thái Lan,...Đầy đủ tem, mã vạch, đổi trả hàng 24/24</p>
                        <img class="img-icon-about" src="{{ asset('imager/about/icon-about2.png')}} "
                             alt="Responsive image">
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-0 col-sm-0 col-0 content-inner-about-center">
                    <img src="{{ asset('imager/about/about.png')}}" alt="">
                </div>

                <div class=" col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 content-inner-about-right">
                    <div class="content-item-about">
                        <img class="img-icon-about" src="{{ asset('imager/about/icon-about3.png')}}" alt="">
                        <h3>Chuyên nghiệp, dễ dàng</h3>
                        <p>Đội ngũ nhân viên tư vấn chuyên nghiệp, giàu kinh nghiệm và tận tâm với nghề.
                            Hệ thống 6 chi nhánh tại 3 miền, tiện lợi đến tận nơi xem hàng. Dễ dàng mua hàng online qua fanpage hoặc website.</p>
                    </div>
                    <div class="content-item-about">
                        <img class="img-icon-about" src="{{ asset('imager/about/icon-about4.png')}}" alt="">
                        <h3>Đa dạng</h3>
                        <p>Sản phẩm đa dạng: makeup, chăm sóc da, chăm sóc tóc, thực phẩm chức năng, phụ kiện làm đẹp,... đảm bảo phục vụ nhu cầu làm đẹp của chị em. Tư vấn online 24/24</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end content about-->
    <!--intro about-->
    <div class="intro-about">
        <div class="row">
            <div class="col-sm-6 intro-video">
                <img src="{{ asset('imager/about/video.jpg') }}" class="img-bg" alt="">
                <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                    <img src="{{ asset('imager/about/control.png')}}" alt=""></a>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <iframe  height="315" src="https://www.youtube.com/embed/DAu_jF-9AXs" allow="accelerometer;
                                 autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="row progress-intro-about">
                    <div class="col-sm-12">
                        <h2>Chúng tôi có gì?</h2>
                        <p>Chiết xuất tự nhiên<span>80%</span></p>
                        <div class="progress">
                            <div class="progress-bar " style="width:80%"></div>
                        </div>
                        <p>Đảm bảo chất lượng<span>75%</span></p>
                        <div class="progress">
                            <div class="progress-bar " style="width:75%"></div>
                        </div>
                        <p>Nhân viên chuyên nghiệp <span>92%</span></p>
                        <div class="progress">
                            <div class="progress-bar " style="width:92%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end intro about-->
    <!-- code review home-->
    <div class="container">
        <div class="row review-homepage">
            <div class="container">
                <div class="row ">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="content-review-homepage">
                                    <img src="{{ asset('imager/home/patricsia1.jpg')}}" alt="">
                                    <h3 class="text-center">Patricsia Petersen</h3>
                                    <p class="text-center"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                    <p style="padding-bottom: 100px;">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                        suffered alteration
                                        in some form, by injected humour, or randomised words which don't look even
                                        slightly
                                        believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="content-review-homepage">
                                    <img src="{{ asset('imager/home/patricsia2.jpg')}}" alt="">
                                    <h3 class="text-center">Patricsia Petersen</h3>
                                    <p class="text-center"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                    <p style="padding-bottom: 100px;">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                        suffered alteration
                                        in some form, by injected humour, or randomised words which don't look even
                                        slightly
                                        believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="content-review-homepage">
                                    <img src="{{ asset('imager/home/patricsia3.jpg')}}" alt="">
                                    <h3 class="text-center">Patricsia Petersen</h3>
                                    <p class="text-center"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                    <p style="padding-bottom: 100px;">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                        suffered alteration
                                        in some form, by injected humour, or randomised words which don't look even
                                        slightly
                                        believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--end code review home-->
</div>
@endsection
