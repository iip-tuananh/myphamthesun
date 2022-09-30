<div class="section footer_wwap">
   <footer class="footer">
      <div class="site-footer">
         <div class="mid-footer clearfix">
               <div class="container">
                  <div class="row align-items-baseline text-white">
                     <div class="col-md-3">
                        <p class="footer-title-form"><i class="fa-regular fa-envelope"></i><span class="ml-3">Đăng ký nhận khuyến mại</span></p>
                     </div>
                     <div class="col-md-5">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Nhập email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                           <div class="input-group-append">
                              <button class="footer-form">Đăng ký </button>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <p class="footer-title-form"> <span class="phone mr-3"><i class="fa fa-phone"></i></span> Bạn cần hỗ trợ <a style="color: #fdad2a" href="tel:{{$setting->phone1}}"> {{$setting->phone1}} </a> </p>
                     </div>
                     <style>
                        .input-group {
                           display: flex;
                           width: 100%;
                        }
                        .input-group input {
                           height: 50px;
                        }
                        .footer-title-form {
                           font-size: 16px;
                           font-weight: 600;
                        }
                        .footer-form {
                           background-color: #fdad2a;
                           border: none;
                           padding: 10px; 
                           color: white;
                           border-top-right-radius: 5px;
                           border-bottom-right-radius: 5px;
                        }
                     </style>
                  </div>
                  <div class="row mt-5">
                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="widget-ft first before">
                              <h4 class="title-menu">
                              <a role="button" class="collapsed" data-toggle="collapse" aria-expanded="false" data-target="#collapseListMenu01" aria-controls="collapseListMenu01">
                              Thông tin doanh nghiệp <i class="fa fa-plus hidden" aria-hidden="true"></i>
                              </a>
                              </h4>
                              <div class="collapse" id="collapseListMenu01">
                                 <div class="row">
                                    {{-- <div class="col-md-4">
                                       <img src="{{$setting->logo}}" alt="logo" loading="lazy">
                                       <a href="http://online.gov.vn/Home/WebDetails/96822"><img src="{{url('frontend/images/bct.png')}}" alt="" loading="lazy"></a>
                                    </div> --}}
                                    <div class="col-md-12">
                                       <p class="text-white">{{$setting->webname}}</p>
                                       <p><b class="text-white">MST: </b><span class="text-white">{{$setting->fax}}</span></p>
                                       <p><b class="text-white">Địa chỉ: </b><span class="text-white">{{$setting->address1}}</span></p>
                                       @if (isset($setting->address2))
                                       <p><b class="text-white">Địa chỉ 2: </b><span class="text-white">{{$setting->address2}}</span></p>
                                       @endif
                                       <p><b class="text-white">Điện thoại: </b><span class="text-white">{{$setting->phone1}} {{isset($setting->phone2) ? '- '.$setting->phone2 : ''}}</span></p>
                                       <p><b class="text-white">Email: </b><span class="text-white">{{$setting->email}}</span></p>
                                    </div>
                                 </div>
                              </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2">
                        <div class="widget-ft first before">
                              <h4 class="title-menu">
                              <a role="button" class="collapsed" data-toggle="collapse" aria-expanded="false" data-target="#collapseListMenu02" aria-controls="collapseListMenu02">
                              Chính sách hỗ trợ<i class="fa fa-plus hidden" aria-hidden="true"></i>
                              </a>
                              </h4>
                              <div class="collapse" id="collapseListMenu02">
                              <ul class="list-menu">
                                 @foreach ($servicehome as $service)
                                 <li class="li_menu"><a href="{{route('serviceDetail', ['slug'=>$service->slug])}}">{{$service->name}}</a></li>
                                 @endforeach
                              </ul>
                              </div>
                        </div>
                        {{-- <div class="widget-ft first before">
                              <h4 class="title-menu">
                              <a role="button" class="collapsed" data-toggle="collapse" aria-expanded="false" data-target="#collapseListMenu02" aria-controls="collapseListMenu02">
                              Mua hàng <i class="fa fa-plus hidden" aria-hidden="true"></i>
                              </a>
                              </h4>
                              <div class="collapse" id="collapseListMenu02">
                              <ul class="list-menu">
                                 <li class="li_menu"><a href="{{$setting->google}}">Link Shopee</a></li>
                                 <li class="li_menu"><a href="{{$setting->facebook}}">Link fanpage</a></li>
                              </ul>
                              </div>
                        </div> --}}
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="widget-ft first before">
                              <h4 class="title-menu">
                              <a role="button" class="collapsed" data-toggle="collapse" aria-expanded="false" data-target="#collapseListMenu03" aria-controls="collapseListMenu03">
                              Fanpage <i class="fa fa-plus hidden" aria-hidden="true"></i>
                              </a>
                              </h4>
                              <div class="collapse" id="collapseListMenu03">
                                 <div class="fb-page" 
                                    data-href="{{$setting->facebook}}"
                                    data-width="380" 
                                    data-hide-cover="false"
                                    data-show-facepile="false"></div>
                              </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="widget-ft first before">
                              <h4 class="title-menu">
                              <a role="button" class="collapsed" data-toggle="collapse" aria-expanded="false" data-target="#collapseListMenu03" aria-controls="collapseListMenu03">
                              Google Map <i class="fa fa-plus hidden" aria-hidden="true"></i>
                              </a>
                              </h4>
                              <div class="collapse" id="collapseListMenu03">
                                 {!!$setting->iframe_map!!}
                              </div>
                        </div>
                     </div>
                  </div>
               </div>
         </div>
         <div class="bg-footer-bottom copyright clearfix">
               <div class="container">
               <div class="inner clearfix">
                  <div class="row tablet">
                     <div id="copyright" class="col-lg-12 col-md-12 col-sm-12 col-12 fot_copyright">
                           <div class="wsp">
                           <span class="adresss">Bản quyền thuộc về <a href="{{route('home')}}">{{$setting->company}}</a></span> <span class="opacity1">Cung cấp bởi</span>
                           <a href="#" rel="nofollow" title="Sapo" target="_blank">SBT</a> 
                           </div>
                     </div>
                  </div>
               </div>
               <a href="#"  class="backtop"  title="Lên đầu trang"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
               </div>
         </div>
      </div>
   </footer>
</div>