@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
<link href="{{asset('frontend/css/sidebar_style.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="section wrap_background">
   <section class="bread-crumb">
      <span class="crumb-border"></span>
      <div class="container">
         <div class="rows">
            <div class="col-xs-12 text-center">
               <h1 class="title_h1 clearfix">{{$title}}</h1>
               <ul class="breadcrumb" >
                  <li class="home">
                     <a  href="{{route('home')}}" ><span >Trang chủ</span></a>						
                     <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
                  </li>
                  <li><strong ><span> {{$title}}</span></strong></li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <div class="container ">
      <div class="bg_collection section">
         <div class="row">
            <aside class="dqdt-sidebar sidebar left-content col-lg-3 col-md-4 col-sm-4">
               <div class="wrap_background_aside asidecollection">
                  <aside class="aside-item sidebar-category collection-category">
                     <div class="aside-title">
                        <h2 class="title-head margin-top-0 cate"><span>Danh mục chính</span></h2>
                     </div>
                     <div class="aside-content">
                        <nav class="nav-category navbar-toggleable-md">
                           <ul class="nav navbar-pills">
                              <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Trang chủ
                                 </a>
                              </li>
                              <li class="nav-item"><a class="nav-link" href="{{route('aboutUs')}}">Giới thiệu
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="{{route('allProduct')}}" class="nav-link">Sản phẩm
                                 </a>
                                 <i class="fa fa-plus"></i>
                                 <ul class="dropdown-menu">
                                    @foreach ($categoryhome as $category)
                                       @if (count($category->typeCate) > 0)
                                       <li class="dropdown-submenu nav-item">
                                          <a class="nav-link" href="{{route('allListProCate', ['danhmuc'=>$category->slug])}}">{{languageName($category->name)}}
                                          </a>
                                          <i class="fa fa-plus"></i>
                                          <ul class="dropdown-menu">
                                             @foreach ($category->typeCate as $type)
                                             <li class="nav-item lv3">
                                                <a class="nav-link" href="{{route('allListProType', ['danhmuc'=>$type->cate_slug, 'loaidanhmuc'=>$type->slug])}}">{{languageName($type->name)}}
                                                </a>
                                             </li>
                                             @endforeach
                                          </ul>
                                       </li>
                                       @else
                                       <li class="nav-item">
                                          <a class="nav-link" href="{{route('allListProCate', ['danhmuc'=>$category->slug])}}">{{languageName($category->name)}}
                                          </a>
                                       </li>
                                       @endif
                                    @endforeach
                                 </ul>
                              </li>
                              <li class="nav-item">
                                 <a href="#" class="nav-link">Chính sách phân phối
                                 </a>
                                 <i class="fa fa-plus"></i>
                                 <ul class="dropdown-menu">
                                    @foreach ($servicehome as $service)
                                    <li class="nav-item">
                                       <a class="nav-link" href="{{route('serviceDetail', ['slug'=>$service->slug])}}">{{$service->name}}
                                       </a>
                                    </li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li class="nav-item">
                                 <a href="{{route('allListBlog')}}" class="nav-link">Tin tức
                                 </a>
                                 <i class="fa fa-plus"></i>
                                 <ul class="dropdown-menu">
                                    @foreach ($blogCate as $category)
                                    <li class="nav-item">
                                       <a class="nav-link" href="{{route('listCateBlog', ['slug'=>$category->slug])}}">{{languageName($category->name)}}
                                       </a>
                                    </li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li class="nav-item"><a class="nav-link" href="{{route('lienHe')}}">Liên hệ
                                 </a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </aside>
               </div>
            </aside>
            <div class="main_container collection col-lg-9 col-md-12 col-sm-12">
               <div class="category-products products">
                  <section class="products-view products-view-grid collection_reponsive list_hover_pro">
                     <div class="row">
                        @foreach ($list as $product)
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 product-col mb-4">
                           @include('layouts.product.item', ['product'=>$product])
                        </div>
                        @endforeach
                     </div>
                     <div class="section pagenav">
                        <nav class="clearfix relative nav_pagi w_100">
                           {{$list->links()}}
                        </nav>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection