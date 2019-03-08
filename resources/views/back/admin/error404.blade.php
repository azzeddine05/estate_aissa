<!DOCTYPE html>
<html lang="en" dir="rtl">
 
@include('back/layouts/head')
    <body class="rtl">
        
        <!-- header-->
    @include('back/layouts/header')
        
        <!-- 404 Error -->
        <section class="redial-bg-dark py-5">
            <div class="container">
                <div class="row">
                    <div class="col-5 mx-auto">
                       <div class="jumbotron mb-0 bg-white rounded">
                            <h1 class="display-3 redial-font-weight-800"> 404</h1>
                            <h5><i class="fa fa-warning pl-2"></i>Oops! Something went wrong</h5>
                            <p>The page you are looking for is not found, please try after some time or go back to home</p>
                            <a  href="{{ url('login') }}" class="btn btn-primary btn-sm">رجوع</a>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- End  404 Error -->
        
        <!-- jQuery -->
        <script src="dist/js/plugins.min.js"></script>
        <script src="dist/js/common.js"></script>
    </body>

<!-- Mirrored from psd2allconversion.com/templates/themeforest/html/redial/style1/rtl/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Nov 2018 21:16:37 GMT -->
</html>