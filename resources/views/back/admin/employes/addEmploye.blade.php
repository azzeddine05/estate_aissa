<!DOCTYPE html>
<html lang="en" dir="rtl">
 
@include('back/layouts/head')
    <body class="rtl">
        
        <!-- header-->
    @include('back/layouts/header')

        <!-- End header-->

        <!-- Main-content Top bar-->
        <div class="redial-relative mt-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-2 align-self-center my-3 my-lg-0">
                        <h6 class="text-uppercase redial-font-weight-700 redial-light mb-0 pl-2">لوحة التحكم </h6>
                    </div>
                    <div class="col-12 col-md-4 align-self-center">
                        <div class="float-sm-right float-none mb-4 mb-sm-0">
                            <ol class="breadcrumb mb-0 bg-transparent redial-light">
                                <li class="breadcrumb-item active">لوحة التحكم  </li>
                            </ol>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- End Main-content Top bar-->

        <!-- main-content-->
        <div class="wrapper">
            @include('back/layouts/sideBar')
           <div id="content">
                <div class="row">
                <div class="col-12 col-xl-8">
                    <div class="card redial-border-light redial-shadow mb-4">
                    
                        <div class="card-body">
                            <h6 class="header-title pr-3 redial-relative">اضافة موضف جديد </h6>
                            <form method="POST" action="{{ url('/add_Employe')}} ">
                                 {{ csrf_field() }}

                                <div class="form-group">
                                    <label class="redial-font-weight-600">الإسم </label>
                                    <input type="text" name="first_name" class="form-control" placeholder=" " required>
                                </div>
                                <div class="form-group">
                                    <label class="redial-font-weight-600">الإسم العائلي </label>
                                    <input type="test" name="last_name" class="form-control" placeholder="" required>
                                </div> 
                                <div class="form-group">
                                    <label class="redial-font-weight-600"> البريد الإلكتروني </label>
                                    <input type="text" name="email" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label class="redial-font-weight-600"> كلمة السر </label>
                                    <input type="text" name="password" class="form-control" placeholder="" required>
                                </div>
                                 
                                <div class="redial-divider my-4"></div>
                                <button style="font-family:changa;" type="submit" class="btn btn-primary btn-xs" >أضف الآن</button>
                            </form>
                        </div>
                    </div>
                                
                </div>
                </div>    
            </div>
        </div>
        <!-- End main-content-->

        <!-- Top To Bottom-->
        <a href="#" class="scrollup text-center redial-bg-primary redial-rounded-circle-50"> 
            <h4 class="text-white mb-0"><i class="icofont icofont-long-arrow-up"></i></h4>
        </a>
        <!-- End Top To Bottom-->

        <!-- Chat-->
       
        <!-- End Chat-->
        
        <!-- jQuery -->
		@include('back/layouts/script');

    </body>

<!-- Mirrored from psd2allconversion.com/templates/themeforest/html/redial/style1/rtl/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Nov 2018 21:16:35 GMT -->
</html>