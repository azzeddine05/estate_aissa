@include('front.layouts.head')

<body>

@include('front/layouts/header')


<section class="module login">
  <div class="container">

    <div class="row">
      <div class="col-lg-4 col-lg-offset-4"> 
      <p id="errorLogin" style="color:red" class="m-b-15 font-size-13"></p>

        <!-- <p>Don't have an account? <strong><a href="register.html">Register here.</a></strong></p>  -->
        <form class="login-form">
          <div class="form-block">
            <label> الإسم </label>
            <input id="email" class="border" type="text" name="email" />
          </div>
          <div class="form-block">
            <label>كلمة المرور </label>
            <input id="password" class="border" type="password" name="pass" />
          </div>
          <!-- <div class="form-block">
            <label><input type="checkbox" name="remember" />Remember Me</label><br/>
          </div> -->
          <div style="text-align:center" class="form-block">
            <button id="checkLogin" style="font-family:changa" class="button button-icon" type="button"><i class="fa fa-angle-right"></i>الدخول </button>
          </div>
          <div class="divider"></div>
          <p class="note"><a href="#">نسيت كلمة المرور </a> </p>    
        </form>
      </div>
    </div><!-- end row -->

  </div>
</section>

<section class="module cta newsletter">
  <div class="container">
	<div class="row">
		<!-- <div class="col-lg-7 col-md-7">
			<h3>Sign up for our <strong>newsletter.</strong></h3>
			<p>Lorem molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
		</div> -->
		<!-- <div class="col-lg-5 col-md-5">
			<form method="post" id="newsletter-form" class="newsletter-form">
				<input type="email" placeholder="Your email..." />
				<button type="submit" form="newsletter-form"><i class="fa fa-send"></i></button>
			</form>
		</div> -->
	</div><!-- end row -->
  </div><!-- end container -->
</section>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 widget footer-widget">
                <a class="footer-logo" href="index.html"><img src="images/logo-white.png" alt="جوهرة الليوان" /></a>
                <p style="text-align: right">جوهرة الليوان الوسيط العقاري الأول اكتب شيء أخر عن جوهرة الليوان </p>
                <div class="divider"></div>
                <ul class="social-icons circle">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 widget footer-widget from-the-blog">
                <!-- <h4><span>From the Blog</span> <img src="images/divider-half.png" alt="" /></h4>
                <ul>
                    <li>
                      <a href="#"><h3>Open House at 123 Smith Drive</h3></a>
                      <p>Vel fermentum ipsum. Quis molestie odio. Interdum et...<br/> <a href="#">Read More</a></p>
                      <div class="clear"></div>
                    </li>
                     <li>
                        <a href="#"><h3>Open House at 123 Smith Drive</h3></a>
                        <p>Vel fermentum ipsum. Quis molestie odio. Interdum et...<br/> <a href="#">Read More</a></p>
                        <div class="clear"></div>
                      </li>
                </ul> -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 widget footer-widget">
                <h4><span>ابقى على تواصل</span> <img src="images/divider-half.png" alt="" /></h4>
                <p>البحرين المنامة 3<br/>
                شارع 33
                </p>
                <p>
                
                <p class="footer-phone"><i class="fa fa-phone icon"></i> (123) 4564-7890</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 widget footer-widget newsletter">
                <!-- <h4><span>Newsletter</span> <img src="images/divider-half.png" alt="" /></h4>
                <p><b>Subscribe to our newsletter!</b> Vel lorem ipsum. Lorem molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                <form class="subscribe-form" method="post" action="#">
                    <input type="text" name="email" value="Your email" />
                    <input type="submit" name="submit" value="SEND" class="button small alt" />
                </form> -->
            </div>
        </div><!-- end row -->
    </div><!-- end footer container -->
</footer>

<div class="bottom-bar">
    <div class="container" style="font-family : changa">
    © 2019  |  <a href="http://rypecreative.com/" target="_blank"> جميع الحقوق محفوضة </a>  |  جوهرة الليوان   
    </div>
</div>
<!-- JavaScript file links -->
<script src="{{asset('back_front')}}/js/jquery-3.1.1.min.js"></script>      <!-- Jquery -->
<script src="{{asset('back_front')}}/assets/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="{{asset('back_front')}}/js/bootstrap.min.js"></script>  <!-- bootstrap 3.0 -->
<script src="{{asset('back_front')}}/assets/slick-1.6.0/slick.min.js"></script> <!-- slick slider -->
<script src="{{asset('back_front')}}/assets/chosen-1.6.2/chosen.jquery.min.js"></script> <!-- chosen - for select dropdowns -->
<script src="j{{asset('back_front')}}/s/isotope.min.js"></script> <!-- isotope-->
<script src="j{{asset('back_front')}}/s/wNumb.js"></script> <!-- price formatting -->
<script src="{{asset('back_front')}}/js/nouislider.min.js"></script> <!-- price slider -->
<script src="{{asset('back_front')}}/assets/html5lightbox/html5lightbox.js"></script> <!-- lightbox -->
<script src="{{asset('back_front')}}/js/global.js"></script>
<script>
  $(document).ready(function($){
      
      $("#checkLogin").click(function(e){
          e.preventDefault();
          var email = $("#email").val();
          var password = $("#password").val();
          $.ajax({
              type:"POST",
              url:"/login",
              data :  {
                  "_token": "{{ csrf_token() }}",
                  "email": email,
                  "password": password,

              },
              datatype:"text",
              success:function(data) {
                  if( data == 2)
                  {
                      window.location.replace('admin');
                  }else if(data == 1){
                    window.location.replace('/add_estate');

                  }else{
                    $("#errorLogin").text("خطأ في الإسم أو كلمة السر ");

                  }
                  


              }
          });
      });
  });
</script>


</body>

<!-- Mirrored from rypecreative.com/homely/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Nov 2018 10:43:46 GMT -->
</html>