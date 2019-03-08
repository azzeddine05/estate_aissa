@include('front/layouts/head')

<body>
@include('front/layouts/header')



<section class="subheader">
  <div class="container">
    <h1 style="float: right">جوهرة الليوان </h1>
    <div class="clear"></div>
  </div>
</section>

<section class="module">
  <div class="container">
  
	<div class="property-listing-header">
		<span class="property-count left"></span>
		<form action="#" method="get" class="right">
			<select name="sort_by" id="sort_by">  
      <option value="date_desc">الكل</option>
      <option value="شقة">شقق</option>
				<option value="عمارة">عمارات</option>
				<option value="price_desc">منازل </option>
        <option value="price_asc">فيلات </option>
        <option value="price_asc">أراضي </option>

			</select>
		</form>
		<div class="property-layout-toggle right">
			<!-- <a href="property-listing-grid.html" class="property-layout-toggle-item"><i class="fa fa-th-large"></i></a> -->
			<a href="#" class="property-layout-toggle-item active"><i class="fa fa-bars"></i></a>
		</div>
		<div class="clear"></div>
	</div><!-- end property listing header -->
  <i class="fa fa-spinner fa-spin" style="display:none; font-size: 50px; color:red;"></i>

  <div id="shearchEstates">
  @foreach($estates as $estate)

  <div class="property property-row shadow-hover">
      <div class="property-content" dir="rtl">
        <div class="property-title">
          <h4><a href="#">{{$estate->type}} </a></h4>
          <p class="property-address"><i style="margin-left: 10px;" class="fa fa-map-marker icon"></i>{{$estate->region}}</p>
          <div class="clear"></div>
          <p class="property-text">{{$estate->description}}</p>
        </div>
        <table class="property-details">
          <tr>
            <!-- <td><i class="fa fa-bed"></i> 3 Beds</td>
            <td><i class="fa fa-tint"></i> 2 Baths</td> -->
            <td>  المساحة  :  {{$estate->surface}} متر     </td>
          </tr>
        </table>
      </div>

      <div class="property-footer">
         <!-- <div class="col-md-6">
            <a  data-toggle="modal" data-target="#exampleModal" id="agenceDetails" style="left: -90px;" href="#" class="button button-icon"><i class="fa fa-angle-right"></i>إتصل بالوكالة </a>
          </div> -->
          <a style="margin-left: -219px;;" href="{{ url('details-estate/'.$estate->id_estate) }}" class="button button-icon"><i class="fa fa-angle-right"></i>{{trans('app.property-details')}}</a>
     <div class="clear"></div>
      </div>
      <a href="{{ url('details-estate/'.$estate->id_estate) }}" class="property-img">
        <div class="img-fade"></div>
        @if($estate->rentorBuy == "buy")
        <div class="property-tag button status">للبيع</div>
        @else
        <div class="property-tag button status">للإيجار</div>
        @endif
        <div style="font-family:changa" class="property-price" dir="rtl"> {{$estate->price}}  دينار</div>
        <div class="property-color-bar"></div> 
        <img src="images/{{$estate->image_principale }}" alt="" />
      </a>
      <div class="clear"></div>
      
  </div>
@endforeach
</div>
	
	<div class="pagination">
        <div class="center">
            <ul>
              <li><a href="#" class="button small grey"><i class="fa fa-angle-left"></i></a></li>
              <li class="current"><a href="#" class="button small grey">1</a></li>
              <li><a href="#" class="button small grey">2</a></li>
              <li><a href="#" class="button small grey">3</a></li>
              <li><a href="#" class="button small grey"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>

  </div><!-- end container -->
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">تفاصيل المالك </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <section class="module contact-details">
  <div class="container">

    <div class="row">
      <div class="col-lg-3 col-md-3">
        <div class="contact-item">
          <i class="fa fa-envelope"></i>
          <h4>Email Us</h4>
          <p>hello@homely.com</p>
          <p>support@homely.com</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="contact-item">
          <i class="fa fa-phone"></i>
          <h4>Call Us</h4>
          <p>General: 123 456 5665</p>
          <p>Support: (+200) 123 456 5665</p>
        </div>
      </div>
      
    </div><!-- end row -->

  </div>
</section>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
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
<script src="{{asset('back_front')}}/js/global.js"></script>

<script>
    $(document).ready(function() {    
      
      // $("#agenceDetails").click(function(){
      //    alert("ya here");
      // });
      $('#sort_by').change(function() {
          var type = $(this).val();
          $('#shearchEstates').children().
                css({ 'opacity' : 0.2 }).
                end().
                css({ 'opacity' : 0.2 });
          $('.fa-spin').fadeIn();
          $.ajax({
                type:"POST",
                url:"/flats",
                data :  {
                    "_token": "{{ csrf_token() }}",
                    "type": type,
                },
                datatype:"json",
                success:function(data) {
                    
                    console.log(data);
                    var div = " ";
                    $.each(data, function(i, item) {
                      if (item.rentorBuy == "buy") { 
                          $("#divBuy span.text").text("للبيع");

                      } else { 
                        $("#divBuy span.text").text("للكراء");
                      }
                        //dataEsates
                      div += '<div class="property property-row shadow-hover"><div class="property-content" dir="rtl"><div class="property-title"><h4><a href="#">'+item.type+'"<p class="property-address"><i style="margin-left: 10px;" class="fa fa-map-marker icon"></i>'+item.region+'</p>'+
                      '<div class="clear"></div><p class="property-text">'+item.description+'</p></div><table class="property-details"><tr><td>  المساحة  :  '+item.surface+' متر </td></tr></table></div><div class="property-footer">'+
                      '<a style="margin-left: -219px;" href="url("details-estate/"'+item.id_estate+') " class="button button-icon"><i class="fa fa-angle-right"></i>تفاصيل العقار </a><div class="clear"></div></div>'+
                      '<a href="" class="property-img"><div class="img-fade"></div><div id="divBuy" class="property-tag button status"><span class="text"></span></div><div style="font-family:changa" class="property-price" dir="rtl">'+item.price+' دينار</div>'+
                      ' <div class="property-color-bar"></div><img src="images/'+item.image_principale+'" alt="" /> </a><div class="clear"></div></div>';
                      
                      
                    });
                    setTimeout(function() {
                      $('#shearchEstates').html('');
                      $('.fa-spin').hide();
                      $( "#shearchEstates" ).append(div);
                       
                        $('#shearchEstates').children().
                            css({ 'opacity' : 1 }).
                            end().
                            css({ 'opacity' : 1 });
                        // $('#formShearch').fadeIn();
                    }, 2000); 
                    
                    // setTimeout(function() {
                    //     $('#estateAdded').hide();
                    //     $('.fa-spin').hide();
                    //     $('#formShearch').children().
                    //         css({ 'opacity' : 1 }).
                    //         end().
                    //         css({ 'opacity' : 1 });
                    //     $('#formShearch').fadeIn();
                    // }, 2000); 

                
                }
            });
      
      });
      
   });
</script>


</body>

</html>