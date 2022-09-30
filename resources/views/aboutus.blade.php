@extends('layouts.main.master')
@section('title')
Giới thiệu về {{$setting->company}}
@endsection
@section('description')
@endsection
@section('css')
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
               Giới thiệu
            </p>
            <ul class="breadcrumb" >
               <li class="home">
                  <a  href="{{route('home')}}" ><span >Trang chủ</span></a>						
                  <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
               </li>
               <li><strong ><span>Giới thiệu</span></strong></li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="page page_default clearfix">
   <div class="container">
      <div class="title_main_page hidden clearfix">
         <h1 class="title_h1"><a href="#">Giới thiệu</a></h1>
      </div>
      <div class="content-page rte clearfix">
         {!!$pageContent->content!!}
         <div class="clearfix margin-top-0">
            <a href="javascript:void(0);" class="btn-main btn-schedule margin-top-15 form-contact" title="Nhận tư vấn"><span>Nhận tư vấn</span><i class="fa fa-arrow-right"></i></a>
         </div>
      </div>
   </div>
</section>
@endsection