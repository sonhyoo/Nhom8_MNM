@extends('Layouts.frontend')
@section('content')
<!--end header-->
<div class="contact-us">
    <div class="iframe-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.587550454988!2d105.79960181429747!3d21.009164093824385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca1023de3f9%3A0x509606baa1145b0f!2sDinh+Ami+Hanoi+Hotel!5e0!3m2!1sen!2sus!4v1556949968573!5m2!1sen!2sus"
               height="450" width="600" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="container">
        <div class="content-contact-us">
            <div class="row">
                <div class="col-md-6">
                    <h1>Liên hệ với chúng tôi</h1>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-inline">
                                <li><p>Hà Nội</p></li>
                                <li>Ngõ 112 Nguyên Xá, Minh Khai, Bắc Từ Liêm, Hà Nội
                                </li>
                                <li>Email: UrayBeauty@gmail.com
                                    Phone: 0379 093 127
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-inline">
                                <li><p>Hà Nam</p></li>
                                <li>Trung Hiếu Thượng, Xã Thanh Hải, Huyện Thanh Liêm, Tỉnh Hà Nam
                                </li>
                                <li>Email: UrayBeauty@gmail.com
                                    Phone: 0379 093 127
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-md-6">
                    <form action="#" method="post">
                        <textarea placeholder="Tin nhắn"></textarea>
                        <div class="row">
                            <div class="col-md-6"><input type="text" placeholder="Tên của bạn"></div>
                            <div class="col-md-6"><input type="text" placeholder="Email của bạn"></div>
                        </div>
                        <button type="submit">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection