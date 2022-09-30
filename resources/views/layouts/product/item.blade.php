
@php
$img = json_decode($product->images);
$discountPrice = $product->price - $product->price * ($product->discount / 100);
@endphp
   <div class="item_product_main clearfix">
      <div class="product-thumbnail clearfix">
      <a class="image_thumb scale_hover" href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">
      <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{$img[0]}}" alt="{{languageName($product->name)}}">
      </a>
      {{-- <div class="action">
         <input type="hidden" name="variantId" value="31565817" tabindex="0">
         <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active " title="Thêm vào giỏ hàng" tabindex="0" data-url="{{route('addToCart', ['id'=>$product->id])}}">
         <i class="fas fa-shopping-basket iconcart"></i>
         </button>
      </div> --}}
      </div>
      <div class="product-info">
      <h3 class="product-name"><a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">{{languageName($product->name)}}</a></h3>
      @if ($product->price > 0 && $product->discount == 0)
         <div class="price-box">
            {{number_format($product->price)}}₫
         </div>
      @elseif($product->price > 0 && $product->discount > 0)
      <div class="price-box">
			{{number_format($discountPrice)}}₫
			<span class="compare-price">{{number_format($product->price)}}₫</span>
		</div>
      @else
         <div class="price-box">
            Liên Hệ
         </div>
      @endif
      </div>
   </div>
