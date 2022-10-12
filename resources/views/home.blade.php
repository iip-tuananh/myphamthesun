@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@if (session()->has('success'))
   <script>
      $.notify("Gửi đơn hàng thành công!", "success");
   </script>
@endif
<script type="text/javascript">
   document.addEventListener( 'DOMContentLoaded', function () {
   var main = new Splide( '#main-carousel', {
      fixedHeight : 500,
      type      : 'fade',
      rewind    : true,
      pagination: false,
      arrows    : false,
      autoplay: true,
      autoWidth : true,
      breakpoints : {
         768: {
         fixedWidth : 600,
         fixedHeight: 300,
         },
      },
   } );
   var thumbnails = new Splide( '#thumbnail-carousel', {
      fixedWidth  : 280,
      fixedHeight : 120,
      gap         : 10,
      rewind      : true,
      pagination  : false,
      isNavigation: true,
      breakpoints : {
         768: {
         fixedWidth : 110,
         fixedHeight: 50,
         },
      },
   } );

   main.sync( thumbnails );
   main.mount();
   thumbnails.mount();
   } );
</script>
@endsection
@section('content')
<section class="awe-section-1">
<div class="s_slider clearfix">
   <div class="section home-slider">
      @foreach ($banners as $banner)
      <div class="items">
            <a href="#">
            <picture>
               <source 
                  media="(min-width: 1200px)"
                  srcset="{{$banner->image}}">
               <source 
                  media="(min-width: 992px)"
                  srcset="{{$banner->image}}">
               <source 
                  media="(min-width: 569px)"
                  srcset="{{$banner->image}}">
               <source 
                  media="(min-width: 480px)"
                  srcset="{{$banner->image}}">
               <img class="lazyload" src="{{$banner->image}}" alt="Slider 1" style="width: 100%"/>
            </picture>
            </a>
      </div>
      @endforeach
   </div>
</div>
</section>
<section class="awe-section-3">
   <div class="section_service_tab clearfix">
      <div class="container">
         <div class="title-wrap text-center margin-bottom-30">
               <h2 class="h1 double-title">
               <span>TIÊU CHÍ CHẤT LƯỢNG</span>
               </h2>
               <div class="h-decor"></div>
         </div>
         <div class="row mt-3">
            <div class="col-md-3 col-6 col-sm-3 text-center mb-2">
               <div class="item-info">
                  <img src="{{url('frontend/images/trai-dat.png')}}" alt="" loading="lazy">
                  <p class="mt-3"><strong>Cam kết chất lượng</strong></p>
               </div>
            </div>
            <div class="col-md-3 col-6 col-sm-3 text-center mb-2">
               <div class="item-info">
                  <img src="{{url('frontend/images/tot-nghiep.png')}}" alt="" loading="lazy">
                  <p class="mt-3"><strong>Đào tạo bán hàng</strong></p>
               </div>
            </div>
            <div class="col-md-3 col-6 col-sm-3 text-center mb-2">
               <div class="item-info">
                  <img src="{{url('frontend/images/coin.png')}}" alt="" loading="lazy">
                  <p class="mt-3"><strong>Chiết khấu tốt nhất</strong></p>
               </div>
            </div>
            <div class="col-md-3 col-6 col-sm-3 text-center mb-2">
               <div class="item-info">
                  <img src="{{url('frontend/images/chu-salon.png')}}" alt="" loading="lazy">
                  <p class="mt-3"><strong>Tự tin làm chủ salon</strong></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="awe-section-4">
   <section class="section_medical_products">
      <div class="container">
         <div class="title-wrap text-center margin-bottom-30">
               <h2 class="double-title">
               <a href="{{route('allProduct')}}" title="SẢN PHẨM NỔI BẬT">
               <span>SẢN PHẨM NỔI BẬT</span>
               </a>
               </h2>
               <div class="h-decor"></div>
         </div>
         <div class="section clearfix">
               <div class="row">
                  @foreach ($homeProduct as $product)
                  <div class="item clearfix col-md-4">
                     @include('layouts.product.item', ['product'=>$product])
                  </div>
                  @endforeach
               </div>
         </div>
      </div>
   </section>
</section>
<section class="awe-section-3">
   <div class="section_service_tab clearfix">
      <div class="container">
         <div class="title-wrap text-center margin-bottom-30">
               <h2 class="h1 double-title">
               <span>CHÍNH SÁCH PHÂN PHỐI</span>
               </h2>
               <div class="h-decor"></div>
         </div>
         <div class="nav nav-pills-icons" role="tablist">
            @foreach ($servicehome as $key=>$service)
               @if ($key==0)
                  <a class="nav-link active" data-toggle="pill" href="#tabservice-{{$service->id}}" role="tab" aria-expanded="true">
                  <span>{{$service->name}}</span>
                  </a>
               @else
                  <a class="nav-link" data-toggle="pill" href="#tabservice-{{$service->id}}" role="tab" aria-expanded="false">
                  <span>{{$service->name}}</span>
                  </a>
               @endif
            @endforeach
         </div>
         <div  id="tab-content" class="tab-content mt-2 mt-sm-4">
            @foreach ($servicehome as $key=>$service)
            @if ($key==0)
               <div id="tabservice-{{$service->id}}" class="tab-pane active" role="tabpanel" style="" aria-expanded="true">
                  <div class="row">
                     <div class="col-md-6 h-100 mb-2 mb-md-0">
                        <img class="lazyload imageload img-fluid" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$service->image}}" alt="">
                     </div>
                     <div class="col-md-6">
                        <div class="pt-xl-1">
                              {!!languageName($service->description)!!}
                              <a href="{{route('serviceDetail', ['slug'=>$service->slug])}}" title="Xem thêm" class="btn-main margin-top-15 margin-right-15"><span>Xem thêm</span><i class="fas fa-angle-double-right"></i></a>
                              <a href="tel:{{$setting->phone1}}" class="btn-main btn-schedule margin-top-15" title="Nhận tư vấn"><span>Nhận tư vấn</span><i class="fa fa-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            @else
               <div id="tabservice-{{$service->id}}" class="tab-pane " role="tabpanel" style="" aria-expanded="false">
                  <div class="row">
                     <div class="col-md-6 h-100 mb-2 mb-md-0">
                        <img class="lazyload imageload img-fluid" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$service->image}}" alt="">
                     </div>
                     <div class="col-md-6">
                        <div class="pt-xl-1">
                              {!!languageName($service->description)!!}
                              <a href="{{route('serviceDetail', ['slug'=>$service->slug])}}" title="Xem thêm" class="btn-main margin-top-15 margin-right-15"><span>Xem thêm</span><i class="fas fa-angle-double-right"></i></a>
                              <a href="tel:{{$setting->phone1}}" class="btn-main btn-schedule margin-top-15" title="Nhận tư vấn"><span>Nhận tư vấn</span><i class="fa fa-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            @endif
            @endforeach
         </div>
      </div>
   </div>
</section>
<section class="awe-section-2">
   <div class="section_about lazyload">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-xl-6">
               <div class="department-carousel2">
                  <div class="department-item">
                     {{-- <div class="h-sub">Giới thiệu</div> --}}
                     {{-- <h2 class="h1 double-title">
                        <span class="text-uppercase" style="font-weight: 600">Giới thiệu</span>
                     </h2> --}}
                     <div class="title-wrap margin-bottom-30">
                        <h2 class="h1 double-title">
                        <span>GIỚI THIỆU</span>
                        </h2>
                        <div class="h-decor"></div>
                     </div>
                     <div class="text-justify">
                        {!!$aboutUs->description!!}
                     </div>
                     <a href="{{route('aboutUs')}}" class="btn-main btn-schedule margin-top-15" title="Xem chi tiết"><span>Xem chi tiết</span><i class="fas fa-angle-double-right"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-xl-6">
               <section
                  id="main-carousel"
                  class="splide"
                  aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel."
                  >
                  <div class="splide__track" style="height: 600px">
                        <ul class="splide__list">
                           @foreach ($prizes as $prize)
                              <li class="splide__slide">
                                 <img src="{{ $prize->image }}" alt="" style="height: 100%">
                              </li>
                           @endforeach
                        </ul>
                  </div>
               </section>
               <section
                  id="thumbnail-carousel"
                  class="splide mt-3"
                  aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel."
                  style="display: none;"
                  >
                  <div class="splide__track">
                        <ul class="splide__list">
                           @foreach ($prizes as $prize)
                              <li class="splide__slide">
                                 <img src="{{ $prize->image }}" alt="">
                              </li>
                           @endforeach
                        </ul>
                  </div>
               </section>
               <div class="department-tabs2-bg"><img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{url('frontend/images/bg-department.png')}}" alt="bg"></div>
            </div>
            <style>
               .splide__slide img {
                  width: 100%;
                  height: 100%;
               }
            </style>
         </div>
      </div>
   </div>
</section>
<section class="awe-section-3">
   <div class="section_service_tab clearfix">
      <div class="container">
         <div class="title-wrap text-center margin-bottom-30">
               <h2 class="h1 double-title">
               <span>ĐÁNH GIÁ CỦA KHÁCH HÀNG</span>
               </h2>
               <div class="h-decor"></div>
         </div>
         <div class="row mt-3">
            <div class="slide-reviewcus owl-carousel owl-theme">
               @foreach ($reviewCus as $review)
               <div class="item">
                  <div class="reviewcus p-3">
                     <div class="reviewcus-image text-center">
                        <img src="{{$review->avatar}}" alt="" loading="lazy">
                        <p><strong>{{languageName($review->name)}}</strong></p>
                        <p>{{languageName($review->position)}}</p>
                     </div>
                     <div class="reviewcus-content text-justify">
                        {!!languageName($review->content)!!}
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
<section class="awe-section-5">
   <div class="section_service_tab clearfix">
      <div class="container">
         <div class="title-wrap text-center margin-bottom-30">
               <h2 class="h1 double-title">
               <span>TIN TỨC</span>
               </h2>
               <div class="h-decor"></div>
         </div>
         <div class="row mt-3">
            @foreach ($homeBlog as $blog)
               <div class="col-md-4 col-sm-4 mb-2">
                  <article class="blog-item">
                     <div class="blog-item-thumbnail">								
                        <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}">
                        <img src="{{$blog->image}}" alt="{{languageName($blog->title)}}" loading="lazy">							
                        </a>
                     </div>
                     <h3 class="blog-item-name margin-top-10"><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a></h3>
                     <p class="blog-item-summary margin-bottom-5 desc">   
                        {{languageName($blog->description)}}
                     </p>
                     <div class="blog-date clearfix">
                        <div class="post-time">
                           <i class="ion ion-md-time"></i> {{date('d/m/Y', strtotime($blog->created_at))}}
                        </div>
                        <div class="post-author">
                           <i class="ion ion-md-brush"></i> {{languageName($blog->cate->name)}}
                        </div>
                     </div>
                  </article>
               </div>
            @endforeach
         </div>
      </div>
   </div>
</section>
@endsection