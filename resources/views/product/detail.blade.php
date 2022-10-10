@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
$priceDiscount = $product->price - $product->price * ($product->discount / 100);
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
<link href="{{asset('frontend/css/product_style.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
@endsection
@section('content')
<section class="bread-crumb">
   <span class="crumb-border"></span>
   <div class="container">
      <div class="rows">
         <div class="col-xs-12 text-center">
            <p class="title_h1 clearfix">
               {{languageName($product->name)}}
            </p>
            <ul class="breadcrumb" >
               <li class="home">
                  <a  href="{{route('home')}}" ><span >Trang chủ</span></a>						
                  <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
               </li>
               {{-- <li>
                  <a class="changeurl"  href="{{route('allListProCate', ['danhmuc'=>$product->cate_slug])}}"><span >{{languageName($product->cate->name)}}</span></a>						
                  <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
               </li> --}}
               <li><strong><span>               {{languageName($product->name)}}
               </span></strong>
               <li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="product details-main clearfix" itemscope itemprop="itemReviewed" itemtype="https://schema.org/Product">
   <div class="container">
      <div class="section wrap-padding-15 wp_product_main">
         <div class="details-product section">
            <div class="row ">
               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="row">
                     <div class="product-detail-left product-images col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="wrapbb clearfix">
                           <div class="col_large_default large-image">
                              <a  href="{{$imgs[0]}}" data-rel="prettyPhoto[product-gallery]" >
                              <img class="checkurl img-responsive" id="img_01" src="{{$imgs[0]}}" alt="{{languageName($product->name)}}">
                              </a>
                              <div class="hidden">
                                 @foreach ($imgs as $key=>$img)
                                 @if ($key != 0)
                                 <div class="item">
                                    <a href="{{$img}}" title="{{languageName($product->name)}}" data-image="{{$img}}" data-zoom-image="{{$img}}"  data-rel="prettyPhoto[product-gallery]" >	
                                    </a>
                                 </div>
                                 @endif
                                 @endforeach
                              </div>
                           </div>
                           <div class="thumb_left">
                              <div id="gallery_02" class="thumbnail-product thumb_product_details">
                                 @foreach ($imgs as $img)
                                 <div class="item">
                                    <a href="javascript:;"  data-zoom-image="{{$img}}">
                                    <img class="lazyload" data-img="{{$img}}" src="{{$img}}" data-src="{{$img}}" alt="{{languageName($product->name)}}">
                                    </a>
                                 </div>
                                 @endforeach
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-sm-12 col-md-6 col-lg-6 details-pro">
                        <h1 class="title-product">{{languageName($product->name)}}</h1>
                        <div class="fw w_100 clearfix" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                           @if ($product->discount > 0 && $product->price > 0)
                              <div class="price-box">
                                 <span class="special-price">
                                    <span class="price product-price" >{{number_format($priceDiscount)}}₫</span> 
                                 </span>
                                 <!-- Giá Khuyến mại -->
                                 <span class="old-price"  itemprop="priceSpecification" itemscope itemtype="https://schema.org/priceSpecification">
                                    <del class="price product-price-old">
                                       {{number_format($product->price)}}₫
                                    </del> 
                                 </span>
                              </div>
                           @elseif($product->discount == 0 && $product->price > 0)
                              <div class="price-box">
                                 <span class="special-price">
                                    <span class="price product-price" >{{number_format($product->price)}}₫</span> 
                                 </span>
                                 <!-- Giá Khuyến mại -->
                                 <span class="old-price"  itemprop="priceSpecification" itemscope itemtype="https://schema.org/priceSpecification">
                                    <del class="price product-price-old">
                                    </del> 
                                 </span>
                              </div>
                           @else
                           <div class="price-box">
                              <span class="special-price">
                                 <a href="tel:{{$setting->phone1}}"><span class="price product-price" >Liên Hệ</span></a> 
                              </span>
                              <!-- Giá Khuyến mại -->
                              <span class="old-price"  itemprop="priceSpecification" itemscope itemtype="https://schema.org/priceSpecification">
                                 <del class="price product-price-old">
                                 </del> 
                              </span>
                           </div>
                           @endif
                           <div class="product-summary clearfix">
                              <div class="rte">
                                 {!!languageName($product->description)!!}
                              </div>
                           </div>
                        </div>
                        <div class="form-product section clearfix">
                           <div class="form-group form_button_details margin-top-15 clearfix">
                              <div class="form_product_content type1 ">
                                 <div class="button_actions clearfix">
                                    {{-- <a href="javascript:0;" type="submit" class="btn fast btn-main btn_base buy-now" data-url="{{route('addToCart', ['id'=>$product->id])}}" data-redirect="{{route('listCart')}}"> --}}
                                    <a href="tel:{{$setting->phone1}}" class="btn fast btn-main btn_base">
                                    <span class="text_1"><i class="fas fa-check"></i> Liên hệ mua hàng</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="wrap_tab_ed section clearfix">
                     <div class="tab_h">
                        <div class="section bg_white clearfix">
                           <!-- Nav tabs -->
                           <div class="product-tab e-tabs not-dqtab">
                              <ul class="tabs tabs-title clearfix">
                                 <li class="tab-link" data-tab="tab-1">
                                    <h3><span>Thông tin sản phẩm</span></h3>
                                 </li>
                              </ul>
                              <div class="tab-float">
                                 <div id="tab-1" class="">
                                    <div class="rte product_getcontent">
                                       {!!languageName($product->content)!!}
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
   </div>
   @if (count($productlq)>1)
   <div class="container">
      <div class="section_wishlist clearfix section margin-bottom-40">
         <h2 class="title_modules">
            <a href="#" title="Sản phẩm liên quan">Sản phẩm liên quan</a>
         </h2>
         <div class="owl_product_news slick_wishlist">
            <div class="item">
               @foreach ($productlq as $item)
                  @if ($item->id != $product->id)
                     @include('layouts.product.item', ['product'=>$item])
                  @endif
               @endforeach
            </div>
         </div>
      </div>
   </div>
   @endif
</section>
<script>
   $(document).ready(function (e) {
   	$('.slick_wishlist').slick({
   		autoplay: true,
   		autoplaySpeed: 5000,
   		dots: false,
   		arrows: true,
   		infinite: true,
   		speed: 300,
   		rows: 1,
   		loop: false,
   		infinite:false,
   		slidesToShow: 4,
   		slidesToScroll: 4,
   		responsive: [
   			{
   				breakpoint: 1200,
   				settings: {
   					slidesToShow: 4,
   					slidesToScroll: 4
   				}
   			},
   			{
   				breakpoint: 1024,
   				settings: {
   					slidesToShow: 3,
   					slidesToScroll: 3
   				}
   			},
   			{
   				breakpoint: 991,
   				settings: {
   					slidesToShow: 3,
   					slidesToScroll: 3
   				}
   			},
   			{
   				breakpoint: 767,
   				settings: {
   					slidesToShow: 2,
   					slidesToScroll: 2
   				}
   			}
   		]
   	});
   
   	var wDW = $(window).width();
   
   	$("#gallery_02").slick({
   		autoplay: false,
   		autoplaySpeed: 5000,
   		dots: false,
   		arrows: true,
   		infinite: true,
   		speed: 300,
   		rows: 1,
   		vertical:false,
   		loop: false,
   		infinite:false,
   		slidesToShow: 4,
   		slidesToScroll: 4,
   		responsive: [
   			{
   				breakpoint: 1200,
   				settings: {
   					slidesToShow: 5,
   					slidesToScroll: 4
   				}
   			},
   			{
   				breakpoint: 1024,
   				settings: {
   					slidesToShow: 5,
   					slidesToScroll: 4
   				}
   			},
   			{
   				breakpoint: 991,
   				settings: {
   					slidesToShow: 4,
   					slidesToScroll: 4
   				}
   			},
   			{
   				breakpoint: 767,
   				settings: {
   					slidesToShow: 3,
   					slidesToScroll: 3
   				}
   			}
   		]
   	});
   	
   	
   	$('#gallery_02 img, .swatch-element label').click(function(e){
   		e.preventDefault();
   		var ths = $(this).attr('data-img');
   		$('.large-image .checkurl').attr('src', ths);
   
   		$('.large-image .checkurl img').attr('src', ths);
   
   		/*** xử lý active thumb -- ko variant ***/
   		var thumbLargeimg = $('.details-product .large-image a').attr('href');
   		var thumMedium = $('#gallery_02 a').find('img').attr('src');
   		var url = [];
   
   		$('#gallery_02 .item').each(function(){
   			var srcImg = '';
   			$(this).find('a img').each(function(){
   				var current = $(this);
   				if(current.children().size() > 0) {return true;}
   				srcImg += $(this).attr('src');
   			});
   			url.push(srcImg);
   			var srcimage = $(this).find('a img').attr('src');
   			if (srcimage == thumbLargeimg) {
   				$(this).find('a').addClass('active');
   			} else {
   				$(this).find('a').removeClass('active');
   			}
   		});
   	})
   
   });
   
   
   
   
</script>
@endsection