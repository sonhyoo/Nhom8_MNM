<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.css') }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend_new/css/font-awesome.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('backend_new/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/flexslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.min.css')}}">
    <link href="{{ asset('asset/css/all.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=El+Messiri:400,500,600,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <title>Uray</title>
</head>
<body>
    <div class="fb-livechat"> 
        <div class="ctrlq fb-overlay">
            
        </div>
        <div class="fb-widget"> 
            <div class="ctrlq fb-close">
                
            </div>
            <div class="fb-page" data-href="https://www.facebook.com/Uray-105537151111424" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false"> 
            </div>
            <div class="fb-credit"> 
                <a href="/" target="_blank" rel="sponsored">Uray</a> 
            </div>
            <div id="fb-root"></div>
        </div>
        <a href="https://m.me/Uray-105537151111424" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button"> 
            <div class="bubble">1</div>
            <div class="bubble-msg">Bạn cần hỗ trợ?</div>
        </a>
    </div>
    <div class="back-to-top"><i class="fas fa-chevron-up"></i></div>
    <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>jQuery(document).ready(function($){
        function detectmob(){
            if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ) {
                return true;
            } else{
                return false;
            }
        }
        var t = { delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button")}; 
        setTimeout( function(){ 
            $("div.fb-livechat").fadeIn()
        }, 8 * t.delay); 
        if(!detectmob()){
            $(".ctrlq").on("click", function(e) {
                e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({ bottom: 0, opacity: 0}, 2 * t.delay, function(){ $(this).hide("slow"), t.button.show()})) : t.button.fadeOut("medium", function(){t.widget.stop().show().animate({bottom: "30px", opacity: 1}, 2 * t.delay), t.overlay.fadeIn(t.delay)})})}});

    </script>
<!--header-->
<!-- menu cắt -->
@include('Layouts.partions.menutop')
<!--end header mobile-->
<!--end header-->
<!-- content-page -->
@yield('content')
<!-- end content -->
<!--footer-->
@include('Layouts.partions.footer')

<!--end footer-->
<script >
    var x = location.href;
    if(x == "http://localhost:8000/") {
        $(".home").addClass("menu-active");
    }
    if(x == "http://localhost:8000/about" ) {
        $(".about").addClass("menu-active");
    }
    if(x.substr(22, 11) == "productlist") {
        $(".productlist").addClass("menu-active");
    }
    if( x == "http://localhost:8000/account" || x == "http://localhost:8000/changePassword") {
        $(".account").addClass("menu-active");
    }
    if( x == "http://localhost:8000/contact" ) {
        $(".contact").addClass("menu-active");
    }   
</script>
<script>
    $(document).ready(function() {
       $(window).scroll(function(event) {
          var pos_body = $('html,body').scrollTop();
          // console.log(pos_body);
          if(pos_body>20){
             $('.header-main').addClass('co-dinh-menu');
             
          }
          else {
             $('.header-main').removeClass('co-dinh-menu');
          }
          if(pos_body>1200){
             $('.back-to-top').addClass('hien-ra');
          }
          else{
             $('.back-to-top').removeClass('hien-ra');
          }
       });
       $('.back-to-top').click(function(event) {
          $('html,body').animate({scrollTop: 0},1400);
       });
    });
</script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>
<script src="{{ asset('backend_new/js/vendor/jquery-1.11.3.min.js')}}"></script>
<script src="{{ asset('backend_new/js/bootstrap.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/custom.js')}}"></script>
<script type="text/javascript" src="{{ asset('asset/js/jquery.flexslider-min.js')}}"></script>
<script type="text/javascript" src="{{ asset('asset/js/owl.carousel.js')}}"></script>
</body>
</html>