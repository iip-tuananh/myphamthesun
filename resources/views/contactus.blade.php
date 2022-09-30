@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
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
					Liên hệ
				</p>
				<ul class="breadcrumb" >
					<li class="home">
					<a  href="{{route('home')}}" ><span >Trang chủ</span></a>						
					<span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
					</li>
					<li><strong ><span>Liên hệ</span></strong></li>
				</ul>
			</div>
		</div>
		</div>
	</section>
	<h1 class="title-head-contact a-left hidden">Liên hệ</h1>
	<div class="page_contact section">
		<div class="iFrameMap">
			<div id="contact_map" class="map">
				{!!$setting->iframe_map!!}
			</div>
		</div>
		</div>
		<div class="container">
		<div class="wrapcontactin">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<a href="{{route('home')}}" class="logo-wrapper">	
					<img src="{{$setting->logo}}" alt="{{$setting->company}}">
					</a>
					<p>
					{{$setting->webname}}
					</p>
					<div class="time_work">
					<div class="itemfooter cont">
						<div class="r">
							<i class="fas fa-map-marker-alt"></i>
							<span>{{$setting->address1}}</span>
						</div>
						@if (isset($setting->address2))
						<div class="r">
							<i class="fas fa-map-marker-alt"></i>
							<span>{{$setting->address2}}</span>
						</div>
						@endif
						<div class="r">
							<i class="fas fa-envelope"></i>
							<a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
						</div>
						<div class="r">
							<i class="fas fa-phone"></i>
							<a class="fone" href="tel:{{$setting->phone1}}">{{$setting->phone1}} {{isset($setting->phone2) ? '- '.$setting->phone2 : ''}}</a>
						</div>
					</div>
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">
					<div class="section right_contact">
					<h4>
						NHẬP THÔNG TIN LIÊN HỆ
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
		</div>
	</div>
@endsection