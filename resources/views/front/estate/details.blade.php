@include('front/layouts/head')

<body>
@include('front/layouts/header')


<section class="subheader" style="padding-top: 92px !important">
  <div class="container">
    <h1> جوهرة  الليوان</h1>
    <!-- <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> Properties <i class="fa fa-angle-right"></i> <a href="#" class="current">123 Smith Drive</a></div> -->
    <div class="clear"></div>
  </div>
</section>

<section class="module">
  <div class="container">
  
	<div class="row">
		<div class="col-lg-8 col-md-8">
		
			<div class="property-single-item property-main">
				<div class="property-header">
					<div class="property-title">
						<h4 style="float: right;">{{$estate->type}}</h4>
            <div style="float: left;" class="property-price-single right" dir="rtl">{{$estate->price}} دينار</div>
						<p style="float: right; margin-top: 24px; margin-right: -62px;" class="property-address"><i class="fa fa-map-marker icon"></i>{{$estate->region}}</p>
            <div class="clear"></div>
					</div>
					<div class="property-single-tags">
					@if($estate->rentorBuy == "buy")
						<div style="float: right;" class="property-tag button alt featured">للبيع </div>
					@else
						<div style="float: right;" class="property-tag button status">للإيجار </div>
					@endif
					</div>
				</div>

				<table class="property-details-single">
			 @if($estate->price == "شقة")
					<tr>
						<td><i class="fa fa-bed"></i> <span dir="rtl">{{$estate->roomsNumber}} غرف</span> </td>
						<td><i class="fa fa-tint"></i> <span dir="rtl">{{$estate->bathroomsNumber}} حمامات </span> </td>
						<td><i class="fa fa-expand"></i> <span dir="rtl">{{$estate->surface}} متر </span></td>
						<!-- <td><i class="fa fa-car"></i> <span>1</span> Garage</td> -->
					</tr>
				@else($estate->price == "عمارة")
					<tr>
						<td><i class="fa fa-bed"></i> <span dir="rtl">{{$estate->roomsCount}}	شقق</span> </td>
						<td><i class="fa fa-tint"></i> <span dir="rtl">{{$estate->appartmentNumber	}} طوابق</span> </td>
						<td><i class="fa fa-expand"></i> <span dir="rtl">{{$estate->surface}} متر </span></td>
						<!-- <td><i class="fa fa-car"></i> <span>1</span> Garage</td> -->
					</tr>
					@endif
				</table>

        <div class="property-gallery">
					<div class="slider-nav slider-nav-property-gallery">
            <span class="slider-prev"><i class="fa fa-angle-left"></i></span>
            <span class="slider-next"><i class="fa fa-angle-right"></i></span>
          </div>
          <div class="slide-counter"></div>
          <div class="slider slider-property-gallery">
						@foreach($images as $image)
            <div class="slide"><img src="/images/{{$image->image }}" alt="" /></div>
            @endforeach
          </div>
          <div class="slider property-gallery-pager">
				  @foreach($images as $image)
            <a class="property-gallery-thumb"><img src="/images/{{$image->image }}" alt="" /></a>
					@endforeach
					</div>

        </div>

			</div><!-- end property title and gallery -->

			<div class="widget property-single-item property-description content" dir="rtl">
				<h4>
					<span>وصف العقار </span> <img class="divider-hex" src="images/divider-half.png" alt="" />
					<div class="divider-fade"></div>
				</h4>
				<p>{{$estate->description}}</p>

				

				<div class="tabs">
			        <!-- <ul>
			          <li><a href="#tabs-1"><i class="fa fa-pencil icon"></i>Additional Details</a></li>
			          <li><a href="#tabs-2"><i class="fa fa-crop icon"></i>Floor Plans</a></li>
			          <li><a href="#tabs-3"><i class="fa fa-files-o icon"></i>Attachments</a></li>
			        </ul> -->
			        <div id="tabs-1" class="ui-tabs-hide">
			          <ul class="additional-details-list">
			          	<li>Property ID: <span>11234</span></li>
			          	<li>Contact: <span>Rent</span></li>
			          	<li>Type: <span>Single Family Home</span></li>
			          	<li>Year Built: <span>2001</span></li>
			          	<li>Lot Dimensions: <span>50x60 ft</span></li>
			          	<li>Deposit Amount: <span>20%</span></li>
			          </ul>
			        </div>
			        <div id="tabs-2" class="ui-tabs-hide">
			          <a href="#"><img src="images/floor-plan1.jpg" alt="" /></a>
			        </div>
			        <div id="tabs-3" class="ui-tabs-hide">
			          <a href="#"><i class="fa fa-file-o icon"></i> Lease Agreement</a><br/><br/>
			          <a href="#"><i class="fa fa-file-o icon"></i> Brochure</a><br/><br/>
			          <a href="#"><i class="fa fa-file-o icon"></i> Property Details</a>
			        </div>
			    </div>
			</div><!-- end description -->

			<div class="widget property-single-item property-amenities" dir="rtl">
				<h4>
					<span>وسائل الراحة</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
					<div class="divider-fade"></div>
				</h4>
				<ul class="amenities-list">
					<li><i class="fa fa-check icon"></i> شرفة</li>
					<li><i class="fa fa-check icon"></i> تلفاز </li>
					<li><i class="fa fa-check icon"></i> تلاجة  </li>
					<li><i class="fa fa-check icon"></i> الإنترنيت </li>
					<li><i class="fa fa-check icon"></i> مكيف  </li>
				
					<li><i class="fa fa-close icon"></i> الويفي </li>
					<li><i class="fa fa-check icon"></i>غرفة الغسيل</li>
				</ul>
			</div><!-- end amenities -->

			<!-- <div class="widget property-single-item property-location">
				<h4>
					<span>Location</span> <img class="divider-hex" src="/images/divider-half.png" alt="" />
					<div class="divider-fade"></div>
				</h4>
				<div id="map-single"></div>
			</div>end location -->

			<div class="widget property-single-item property-agent" dir="rtl">
				<h4>
					<span>صاحب العقار</span> <img class="divider-hex" alt="" />
					<div class="divider-fade"></div>
				</h4>
				<div class="agent">
			        
			        <div class="agent-content">
			            
			            <div style="margin-right: -216px;" class="agent-details">
			                <h4><a href="#">أحمد منصور </a></h4>
			                <p><i class="fa fa-tag icon"></i>    Buying Agent</p>
			                <p><i class="fa fa-envelope icon"></i>    jdoe@homely.com</p>
			                <p><i class="fa fa-phone icon"></i>    (123) 456-6789</p>
			            </div>
			            <!-- <ul class="social-icons">
			                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
			                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			            </ul> -->
			        </div>
			        <div class="clear"></div>
			    </div>
			</div><!-- end agent -->


		</div><!-- end col -->
		
		<div class="col-lg-4 col-md-4 sidebar sidebar-property-single">
		
			<div class="widget widget-sidebar advanced-search">
			  <h4><span style=" margin-left: 88px;">تفاصيل العقار </span> <img src="images/divider-half-white.png" alt="" /></h4>
			

		
		</div><!-- end sidebar -->
		
	</div><!-- end row -->

  </div><!-- end container -->
</section>

<section class="module cta newsletter">
 
 </section>

@include('front/layouts/footer')


<div class="bottom-bar">
    <div class="container" style="font-family : changa">
    © 2019  |  <a href="#" target="_blank"> جميع الحقوق محفوضة </a>  |  جوهرة الليوان   
    </div>
</div>

<!-- JavaScript file links -->
<script src="{{asset('back_front')}}/js/jquery-3.1.1.min.js"></script>      <!-- Jquery -->
<script src="{{asset('back_front')}}/assets/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="{{asset('back_front')}}/js/bootstrap.min.js"></script>  <!-- bootstrap 3.0 -->
<script src="{{asset('back_front')}}/assets/slick-1.6.0/slick.min.js"></script> <!-- slick slider -->
<script src="{{asset('back_front')}}/assets/chosen-1.6.2/chosen.jquery.min.js"></script> <!-- chosen - for select dropdowns -->
<script src="{{asset('back_front')}}/js/isotope.min.js"></script> <!-- isotope-->
<script src="{{asset('back_front')}}/js/wNumb.js"></script> <!-- price formatting -->
<script src="{{asset('back_front')}}/js/nouislider.min.js"></script> <!-- price slider -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqb3fT3SbMSDMggMEK7fJOIkvamccLrjA&amp;sensor=false"></script>
<script src="{{asset('back_front')}}/js/map-single.js"></script> <!-- google maps -->
<script src="{{asset('back_front')}}/js/global.js"></script>


</body>

</html>