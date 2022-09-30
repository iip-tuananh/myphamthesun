<div class="clearfix topbar d-none d-lg-block d-md-block">
   <div class="container" style="max-width: 1285px;">
   <div class="row">
      <div class="col-lg-7 col-md-7">
         <div class="time_contact">
               <p>
               <i class="fa fa-clock"></i>
               Th2 - CN 9:00 AM - 21:00 PM 
               </p>
               <p>
                  <i class="fas fa-map-marker-alt"></i>
               <a class="fone" href="https://www.google.com/maps/place/{{$setting->address1}}" target="_blank">{{$setting->address1}}</a>
               </p>
         </div>
      </div>
      <div class="col-lg-5 col-md-5">
         <div class="d-none d-lg-block d-md-none ">
               <div class="time_contact float-right">
                  <p>
                  <i class="fa fa-phone"></i>
                  <a class="fone" href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a>
                  </p>
                  <p>
                  <i class="fas fa-envelope"></i>
                  <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                  </p>
               </div>
         </div>
      </div>
   </div>
   </div>
</div>
<div class="wraphead_mobile clearfix">
   <div class="container" style="max-width: 1381px;">
   <div class="row">
      <div class="col-lg-2 col-md-12">
         <div class="logo">
               <a href="{{route('home')}}" class="logo-wrapper ">	
               <img src="{{$setting->logo}}" alt="logo" loading="lazy">
               </a>
         </div>
      </div>
      <div class="col-lg-9 col-xl-9 col-md-0">
         <div class="head_nav">
               <div class="wrap_main d-none d-lg-block d-xl-block">
               <div class="header-nav">
                  <ul class="item_big">
                     <li class="nav-item {{Route::currentRouteName() == 'home' ? 'active' : ''}}">				
                           <a class="a-img" href="{{route('home')}}" title="Trang chủ">
                           <span>Trang chủ</span>
                           </a>
                     </li>
                     <li class="nav-item {{Route::currentRouteName() == 'aboutUs' ? 'active' : ''}}">				
                           <a class="a-img" href="{{route('aboutUs')}}" title="Giới thiệu">
                           <span>Giới thiệu</span>
                           </a>
                     </li>
                     <li class="nav-item {{Route::currentRouteName() == 'allProduct' || Route::currentRouteName() == 'allListProCate' || Route::currentRouteName() == 'allListProType' || Route::currentRouteName() == 'detailProduct' ? 'active' : ''}}">
                        <a class="a-img" href="{{route('allProduct')}}" title="Sản phẩm">
                        <span>Sản phẩm</span><i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="item_small">
                           @foreach ($categoryhome as $category)
                              @if (count($category->typeCate) > 0)
                                 <li>
                                    <a href="{{route('allListProCate', ['danhmuc'=>$category->slug])}}" title="{{languageName($category->name)}}">{{languageName($category->name)}} <i class="fa fa-angle-right"></i></a>
                                    <ul>
                                       @foreach ($category->typeCate as $type)
                                       <li>
                                             <a href="{{route('allListProType', ['danhmuc'=>$type->cate_slug, 'loaidanhmuc'=>$type->slug])}}" title="{{languageName($type->name)}}" class="a3">{{languageName($type->name)}}</a>
                                       </li>
                                       @endforeach
                                    </ul>
                                 </li>
                              @else
                                 <li>
                                    <a href="{{route('allListProCate', ['danhmuc'=>$category->slug])}}" title="{{languageName($category->name)}}">{{languageName($category->name)}} </a>
                                 </li>
                              @endif
                           @endforeach
                        </ul>
                     </li>
                     <li class="nav-item {{Route::currentRouteName() == 'serviceDetail' ? 'active' : ''}}">
                        <a class="a-img" href="#" title="Chính sách phân phối">
                        <span>Chính sách phân phối</span><i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="item_small">
                           @foreach ($servicehome as $service)
                           <li>
                              <a href="{{route('serviceDetail', ['slug'=>$service->slug])}}" title="{{$service->name}}">{{$service->name}}</a>
                           </li>
                           @endforeach
                        </ul>
                     </li>
                     <li class="nav-item {{Route::currentRouteName() == 'allListBlog' || Route::currentRouteName() == 'listCateBlog' || Route::currentRouteName() == 'detailBlog' ? 'active' : ''}}">
                        <a class="a-img" href="{{route('allListBlog')}}" title="Tin tức">
                        <span>Tin tức</span><i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="item_small">
                           @foreach ($blogCate as $category)
                           <li>
                              <a href="{{route('listCateBlog', ['slug'=>$category->slug])}}" title="{{languageName($category->name)}}">{{languageName($category->name)}}</a>
                           </li>
                           @endforeach
                        </ul>
                     </li>
                     <li class="nav-item {{Route::currentRouteName() == 'lienHe' ? 'active' : ''}}">				
                           <a class="a-img" href="{{route('lienHe')}}" title="Liên hệ">
                           <span>Liên hệ</span>
                           </a>
                     </li>
                  </ul>
               </div>
               </div>
         </div>
      </div>
      <div class="col-lg-1 col-xl-1 col-md-12">
         <div class="cartsearch">
            {{-- <div class="searchhd">
               <div class="mini-cart text-xs-center">
                  <div class="heading-cart cart_header">
                     <a class="img_hover_cart" href="{{route('listCart')}}" title="Giỏ hàng">
                        <div class="icon_hotline">
                           <i class="fas fa-shopping-basket iconcart"></i>
                           <span class="bolds cartext"> (
                              @if ($cartcontent)
                              <span class="count_item count_item_pr">{{count($cartcontent)}}</span>
                              @else
                              <span class="count_item count_item_pr">0</span>
                              @endif
                              )</span>
                        </div>
                     </a>
                  </div>
                  <div class="top-cart-content">
                     <ul id="cart-sidebar" class="mini-products-list count_li">
                        @if (session()->get('cart'))
                        @php
                              $totalPrice = 0;
                              $cart = session()->get('cart');
                        @endphp
                        <ul class="list-item-cart">
                           @foreach ($cart as $item)
                           @php
                              $pricePro = $item['price'] - $item['price'] * ($item['discount']/100);
                              $totalPrice += $item['quantity'] * $pricePro ;
                           @endphp
                           <li class="item productid-37616587">
                              <div class="border_list">
                                 <div class="image_drop">
                                    <a class="product-image" href="" title="{{languageName($item['name'])}}">
                                    <img alt="{{languageName($item['name'])}}" src="{{$item['image']}}" width="'+ '100' +'" \="">
                                    </a>
                                 </div>
                                 <div class="detail-item">
                                    <div class="product-details">
                                       <span href="javascript:;" data-id="37616587" title="Xóa" class="remove-item-cart fa fa-times"></span>
                                       <p class="product-name"> <a href="" title="{{languageName($item['name'])}}">{{languageName($item['name'])}}</a></p>
                                    </div>
                                    <div class="product-details-bottom">
                                       <span class="price">{{number_format($pricePro)}}₫</span>
                                       <div class="quantity-select qty_drop_cart">
                                          <span class="cart-top-qty">x {{$item['quantity']}}</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           @endforeach
                        </ul>
                        <div class="pd">
                           <div class="top-subtotal">Tổng cộng: <span class="price price_big">{{number_format($totalPrice) }}₫</span></div>
                        </div>
                        <div class="pd right_ct"><a href="{{route('listCart')}}" class="btn btn-primary"><i class="fas fa-shopping-basket iconcart"></i><span>Tới giỏ hàng và thanh toán</span></a></div>
                        @else
                        <ul class="list-item-cart">
                           <li class="item productid-37616587">
                              Chưa có sản phẩm nào được chọn
                           </li>
                        </ul>
                        @endif
                     </ul>
                  </div>
               </div>
            </div> --}}
            <div class="carthd">
               <div class="mini-cart text-xs-center">
                  <a href="javascript: void(0);" class="btn btn-success form-contact" style="border-radius: 10px;">Tư vấn</a>
               </div>
            </div>
            <style>
               .cartsearch .searchhd:hover .top-cart-content {
                  display: block;
               }
            </style>
         </div>
      </div>
   </div>
   </div>
</div>
<span class="menubutton d-block d-lg-none d-xl-none"><i class="fas fa-bars"></i></span>
<div class="wrapmenu_right clearfix">
   <div class="wrapmenu">
   <div class="wrapmenu_full menumain_full">
      <div class="containers">
         <!-- Menu mobile -->
         <div class="contenttop p-r-30">
               <div class="section margin-bottom-10 margin-top-15 a-left">
               <form action="{{route('search_result')}}" method="post" class="input-group search-bar" role="search">
                  @csrf
                  <input type="text" name="keyword" value="" autocomplete="off" required placeholder="Tìm kiếm..." class="input-group-field auto-search">
                  <button type="submit" class="visible_index btn icon-fallback-text">
                  <i class="fa fa-search" ></i>      
                  </button>
               </form>
               </div>
         </div>
         <div class="menu_mobile clearfix">
               <ul class="ul_collections">
               <li class="level0 level-top parent">
                  <a href="{{route('home')}}">Trang chủ</a>
               </li>
               <li class="level0 level-top parent">
                  <a href="{{route('aboutUs')}}">Giới thiệu</a>
               </li>
               <li class="level0 level-top parent">
                  <a href="{{route('allProduct')}}">Sản phẩm</a>
                  <i class="fa fa-plus"></i>
                  <ul class="level0" style="display:none;">
                     @foreach ($categoryhome as $category)
                        @if (count($category->typeCate) > 0)
                           <li class="level1 ">
                              <a href="{{route('allListProCate', ['danhmuc'=>$category->slug])}}"> <span>{{languageName($category->name)}}</span> </a>
                              <i class="fa fa-plus"></i>
                              <ul class="level1" style="display:none;">
                                 @foreach ($category->typeCate as $type)
                                 <li class="level2 ">
                                    <a href="{{route('allListProType', ['danhmuc'=>$type->cate_slug, 'loaidanhmuc'=>$type->slug])}}"><span>{{languageName($type->name)}}</span></a>
                                 </li>
                                 @endforeach
                              </ul>
                           </li>
                        @else
                           <li class="level1 "> 
                              <a href="{{route('allListProCate', ['danhmuc'=>$category->slug])}}"> <span>{{languageName($category->name)}}</span> </a>
                           </li>
                        @endif
                     @endforeach
                  </ul>
               </li>
               <li class="level0 level-top parent">
                  <a href="#">Chính sách phân phối</a>
                  <i class="fa fa-plus"></i>
                  <ul class="level0" style="display:none;">
                     @foreach ($servicehome as $service)
                        <li class="level1 "> 
                              <a href="{{route('serviceDetail', ['slug'=>$service->slug])}}"> <span>{{$service->name}}</span> </a>
                        </li>
                     @endforeach
                  </ul>
               </li>
               <li class="level0 level-top parent">
                  <a href="{{route('allListBlog')}}">Tin tức</a>
                  <i class="fa fa-plus"></i>
                  <ul class="level0" style="display:none;">
                     @foreach ($blogCate as $category)
                        <li class="level1 "> 
                              <a href="{{route('listCateBlog', ['slug'=>$category->slug])}}"> <span>{{languageName($category->name)}}</span> </a>
                        </li>
                     @endforeach
                  </ul>
               </li>
               <li class="level0 level-top parent">
                  <a href="{{route('lienHe')}}">Liên hệ</a>
               </li>
               </ul>
         </div>
         <div class="p-r-30 clearfix margin-top-15">
               <div class="social a-left clearfix">
               <a class="tw" href="https://twitter.com" title="Theo dõi trên Twitter"><i class="fab fa-twitter"></i></a>
               <a class="fb" href="{{$setting->facebook}}" title="Theo dõi trên Facebook"><i class="fab fa-facebook-f"></i></a>
               <a class="go" href="https://google.com.vn" title="Theo dõi trên Google"><i class="fab fa-google-plus-g"></i></a>
               <a class="rss" href="https://www.linkedin.com/" title="Theo dõi trên In"><i class="fab fa-linkedin-in"></i></a>
               <a class="yt" href="https://www.youtube.com/" title="Theo dõi trên Youtube"><i class="fab fa-youtube"></i></a>
               </div>
         </div>
      </div>
   </div>
   </div>
</div>