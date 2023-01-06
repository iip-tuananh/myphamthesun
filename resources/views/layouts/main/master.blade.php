<!DOCTYPE html>
<html lang="vi">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <title>@yield('title')</title>
   <meta name="description" content="">
   <meta name="keywords" content="@yield('title')"/>
   <meta name="robots" content="noodp,index,follow" />
   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <meta name="description" content="@yield('description')" />
   <link rel="canonical" href="{{url()->current()}}" />
   <meta property="og:locale" content="vi_VN" />
   <meta property="og:type" content="article" />
   <meta property="og:title" content="@yield('title')" />
   <meta property="og:description" content="@yield('description')" />
   <meta property="og:url" content="{{url()->current()}}" />
   <meta property="og:site_name" content="{{url()->current()}}" />
   <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
   <meta property="og:image" content="@yield('image')" />
   <meta property="og:image:secure_url" content="@yield('image')" />
   <meta property="og:image:width" content="598" />
   <meta property="og:image:height" content="333" />
   <meta property="og:image:alt" content="my-pham-thesun" />
   <meta property="og:image:type" content="image/jpeg" />
   <meta name="twitter:card" content="summary_large_image" />
   <meta name="twitter:title" content="@yield('title')" />
   <meta name="twitter:description" content="@yield('description')" />
   <meta name="twitter:image" content="@yield('image')" />
   <meta name="google-site-verification" content="1bO0m2dF-em6mvlD_4RVSM_DW7eVQgXVfsdjGCBc8y0" />
   <!-- Fav Icon -->
   <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
   <link rel="preload" as='style' type="text/css" href="{{asset('frontend/css/main.scss.css')}}">
   <link rel="preload" as='style'  type="text/css" href="{{asset('frontend/css/index.scss.css')}}">
   <link rel="preload" as='style'  type="text/css" href="{{asset('frontend/css/bootstrap-4-3-min.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-4-3-min.css')}}">
   <link href="{{asset('frontend/css/main.scss.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('frontend/css/index.scss.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('frontend/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('frontend/css/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('frontend/css/quickviews_popup_cart.scss.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('frontend/css/contact_style.scss.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('frontend/css/callbuttom.css')}}" rel="stylesheet" type="text/css" />
   @yield('css')
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/css/splide.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&display=swap" rel="stylesheet">
   <script>
      (function () {
            function asyncLoad() {
               var urls = [];
               for (var i = 0; i < urls.length; i++) {
                  var s = document.createElement('script');
                  s.type = 'text/javascript';
                  s.async = true;
                  s.src = urls[i];
                  var x = document.getElementsByTagName('script')[0];
                  x.parentNode.insertBefore(s, x);
               }
            };
            window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
      })();
   </script>
   <script src="{{asset('frontend/js/jquery.js')}}" type="text/javascript"></script>
</head>
<body>
   <div class="opacity_menu"></div>
   <div class="inbody clearfix">
      @include('layouts.header.index')
      <div class="bodywrap clearfix">
            @yield('content')
            @include('layouts.footer.index')
            {{-- <div class="support-online">
            <div class="support-content" style="display: none;">
               <a href="tel:19006750" class="call-now" rel="nofollow">
                  <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                  <div class="animated infinite zoomIn kenit-alo-circle"></div>
                  <div class="animated infinite pulse kenit-alo-circle-fill"></div>
                  <span>Gọi ngay: {{$setting->phone1}}</span>
               </a>
               <a class="mes" href="{{$setting->facebook}}">
               <i class="fab fa-facebook-messenger" aria-hidden="true"></i>
               <span>Nhắn tin facebook</span>
               </a>
               <a class="zalo" href="http://zalo.me/{{$setting->phone1}}">
               <i class="far fa-comment-dots"></i>
               <span>Zalo: {{$setting->phone1}}</span>
               </a>
            </div>
            <a class="btn-support">
               <i class="far fa-question-circle" aria-hidden="true"></i>
               <div class="animated infinite zoomIn kenit-alo-circle"></div>
               <div class="animated infinite pulse kenit-alo-circle-fill"></div>
            </a>
            </div> --}}
            <div class="hotline-phone-ring-wrap">
               <div class="hotline-phone-ring">
                  <div class="hotline-phone-ring-circle"></div>
                  <div class="hotline-phone-ring-circle-fill"></div>
                  <div class="hotline-phone-ring-img-circle">
                  <a href="tel:{{$setting->phone1}}" class="pps-btn-img">
                  <img src="{{url('frontend/images/icon-call.png')}}" alt="Gọi điện thoại" width="50" loading="lazy">
                  </a>
                  </div>
               </div>
            </div>
            <div class="hotline-phone-ring-wrap2">
               <div class="hotline-phone-ring">
                  <div class="hotline-phone-ring-circle"></div>
                  <div class="hotline-phone-ring-circle-fill"></div>
                  <div class="hotline-phone-ring-img-circle">
                  <a href="https://zalo.me/{{$setting->phone1}}" class="pps-btn-img" target="_blank">
                  <img src="{{url('frontend/images/icon-zalo.png')}}" alt="Chat zalo" width="50" loading="lazy">
                  </a>
                  </div>
               </div>
            </div>
            <div class="hotline-phone-ring-wrap3">
               <div class="hotline-phone-ring">
                  <div class="hotline-phone-ring-circle"></div>
                  <div class="hotline-phone-ring-circle-fill"></div>
                  <div class="hotline-phone-ring-img-circle">
                  <a href="{{$setting->google}}" class="pps-btn-img" target="_blank">
                  <img src="{{url('frontend/images/icon-mess.png')}}" alt="Chat messenger" width="50" loading="lazy">
                  </a>
                  </div>
               </div>
            </div>
            <div class="hotline-phone-ring-wrap4">
               <div class="hotline-phone-ring">
                  <div class="hotline-phone-ring-circle"></div>
                  <div class="hotline-phone-ring-circle-fill"></div>
                  <div class="hotline-phone-ring-img-circle">
                  <a href="{{$setting->GA}}" class="pps-btn-img" target="_blank">
                  <img src="{{url('frontend/images/icon-youtube.png')}}" alt="Xem youtube" width="50" loading="lazy">
                  </a>
                  </div>
               </div>
            </div>
      </div>
      <div class="modal-combo">
         <span class="close-combo">&times;</span>
         <div class="modal-combo-content">
            <div class="section right_contact">
					<h4>
						NHẬP THÔNG TIN CỦA BẠN TẠI ĐÂY !
					</h4>
					<div id="pagelogin">
						<form action="{{route('postcontact')}}" id="contact" method="post">
							@csrf
							<div class="form-signup clearfix">
								<div class="row group_contact">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="row">
										<fieldset class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<input placeholder="Tên của bạn" type="text" class="form-control  form-control-lg" required value="" name="name">
										</fieldset>
										<fieldset class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<input placeholder="Số điện thoại" type="text" class="form-control form-control-lg" id="Phone" value="" name="phone">
										</fieldset>
									</div>
								</div>
								<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="row">
										<fieldset class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<input placeholder="Email" type="email" required id="email1" class="form-control form-control-lg" value="" name="email">
										</fieldset>
										<fieldset class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<input placeholder="Địa chỉ" type="text" class="form-control form-control-lg" id="Address" value="" name="address">
										</fieldset>
									</div>
								</div>
								<fieldset>
									<textarea placeholder="Nội dung" name="mess" id="comment" class="form-control content-area form-control-lg" rows="5" Required></textarea>
								</fieldset>
								<fieldset>
									<button type="submit" class="btn btn-main btn-primary btn-lienhe">Gửi ngay <i class="fa fa-arrow-right"></i></button>
								</fieldset>
								</div>
							</div>
						</form>
					</div>
					</div>
         </div>
      </div>
   </div>
   <script src="{{asset('frontend/js/index.js')}}" type="text/javascript"></script>
   <script src="{{asset('frontend/js/main.js')}}" type="text/javascript"></script>
   <script src="{{asset('frontend/js/notify.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('frontend/js/owl.carousel.min.js')}}" type="text/javascript"></script>
   <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/js/splide.min.js"></script>
   @yield('js')
   <script>
      $(document).ready(function () {
         var modal = $('.modal-combo');
         var btn = $('.form-contact');
         var span = $('.close-combo');

         $('.form-contact').click(function () {
            modal.show();
         });
         span.click(function () {
            modal.hide();
         });
         $(window).on('click', function (e) {
            if ($(e.target).is('.modal-combo')) {
               modal.hide();
            }
         });
         });
   </script>
   <script>
      $('.slide-reviewcus').owlCarousel({
         loop:true,
         margin:10,
         nav:true,
         responsive:{
            0:{
                  items:1
            },
            600:{
                  items:2
            },
            1000:{
                  items:3
            }
         }
      })
   </script>
   <script>
      $('.add_to_cart').click(function(e) {
         e.preventDefault();
         var url = $(this).data('url');
         $.ajax({
            type:'get',
            url: url,
            dataType: 'json',
            success: function(data) {
               window.location.reload();
               $.notify("Thêm vào giỏ hàng thành công!", "success");
            },
            error: function(data) {
               $.notify("Thêm vào giỏ hàng thất bại!", "error");
            }
         })
      })
      $('.buy-now').click(function(e) {
         e.preventDefault();
         var url = $(this).data('url');
         var urlRedirect = $(this).data('redirect');
         $.ajax({
            type:'get',
            url: url,
            dataType: 'json',
            success: function(data) {
               window.location.href = urlRedirect;
               $.notify("Thêm vào giỏ hàng thành công!", "success");
            },
            error: function(data) {
               $.notify("Thêm vào giỏ hàng thất bại!", "error");
            }
         })
      })
   </script>
   <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap&subset=vietnamese" rel="stylesheet">
   <script type='text/javascript'>
      //<![CDATA[ 
      function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://use.fontawesome.com/releases/v5.7.2/css/all.css");
      //]]> 
   </script>
   <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0" nonce="UCnLwKdZ"></script>
   <!-- Add to cart -->
   <div id="popupCartModal" class="modal fade" role="dialog">
   </div>
</body>
</html>