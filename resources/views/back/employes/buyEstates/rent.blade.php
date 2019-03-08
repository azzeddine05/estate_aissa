<!DOCTYPE html>
<html lang="en" dir="rtl">
 
@include('back/layouts/head')
    <body class="rtl">
        
        <!-- header-->
    @include('back/layouts/header')

         <!-- Main-content Top bar-->
        <div class="redial-relative mt-80">
            <div class="container-fluid">
              
            </div>
        </div>
        <!-- End Main-content Top bar-->

        <!-- main-content-->
        <div class="wrapper">
        @include('back/layouts/sideBar')

            <div id="content">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="row mb-4">
                        <form method="post" action="{{url('/estate/buy')}}">
                            {{csrf_field()}}
                            <div class="col-12 col-md-12 mb-4">
                                <div class="card redial-border-light redial-shadow">
                                    <!-- <div class="card-body">
                                        <div id="markermap"></div>
                                    </div> -->
                                    
                                </div><br><br>
                                <h6 class="header-title pr-3 redial-relative">عملية استئجار عقار  </h6>

                            </div><br><br>

                            <div class="col-12 col-xl-4 mb-4 mb-xl-0">
                                <div class="card redial-border-light redial-shadow">
                                    <div class="card-body">
                                        <h6 class="header-title pr-3 redial-relative">معلومات المالك </h6><br>
                                       
                                        <div class="form-group">
                                                <label class="redial-font-weight-600">إسم المالك </label>
                                                <input type="text" value="{{ $estate->owner_name }}" class="form-control" placeholder="" />
                                            </div>
                                            <div class="form-group">
                                                <label class="redial-font-weight-600">رقم المالك </label>
                                                <input type="text" value="{{ $estate->owner_number	 }}" class="form-control" placeholder="" />
                                            </div>
                                            <div class="form-group">
                                                <label class="redial-font-weight-600">الجنسية </label>
                                                <input type="text" value="{{ $estate->owner_nationality }}" class="form-control" placeholder="" />
                                            </div>
                                            <input name="id_estate" type="hidden" value="{{ $estate->id_estate }}">
                                            <input name="state_for" type="text" value="{{ $estate->rentorBuy }}">

                                            <div class="form-group">
                                                <label class="redial-font-weight-600">الرقم الشخصي </label>
                                                <input type="text" value="{{ $estate->owner_phone }}" class="form-control" placeholder="" />
                                            </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4 mb-4 mb-xl-0">
                                <div class="card redial-border-light redial-shadow">
                                    <div class="card-body">
                                        <h6 class="header-title pr-3 redial-relative">معلومات المستأجر  </h6><br>
                                            <div class="form-group">
                                                <label class="redial-font-weight-600">إسم المستأجر  </label>
                                                <input type="text" name="name_purchaser" class="form-control" placeholder="" />
                                            </div>
                                            <div class="form-group">
                                                <label class="redial-font-weight-600">رقم المستأجر  </label>
                                                <input type="text"  name="number_purchaser" class="form-control" placeholder="" />
                                            </div>
                                            <div class="form-group">
                                                <label class="redial-font-weight-600">الجنسية</label>
                                                <input type="text"  name="nationality_purchaser" class="form-control" placeholder="" />
                                            </div>
                                            <div class="form-group">
                                                <label class="redial-font-weight-600">الرقم الشخصي </label>
                                                <input type="text" name="phone_purchaser" class="form-control" placeholder="" />
                                            </div>
                                           
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4 mb-4 mb-xl-0">
                                <div class="card redial-border-light redial-shadow">
                                    <div class="card-body">
                                        <h6 class="header-title pr-3 redial-relative">معلومات الإيجار </h6><br>
                                        <form>
                                            <div class="row">
                                                <div class="form-group buytext">
                                                    <label class="redial-font-weight-600"> مدة الإيجار </label>
                                                    <input  name="nbr_jours_rent" type="text" class="form-control" placeholder="" />
                                                </div>
                                                <div class="form-group buytext">
                                                    <label class="redial-font-weight-600"> قيمة الإيجار </label>
                                                    <input type="text" value="{{ $estate->price }}" class="form-control" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group buytext">
                                                    <label class="redial-font-weight-600">مقدم الشيك</label>
                                                    <input type="text" name="submitted_amount" class="form-control" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group buytext">
                                                    <label class="redial-font-weight-600"> من </label>
                                                    <input name="end_rent" type="text" class="form-control" placeholder="" />
                                                </div>
                                                <div class="form-group buytext">
                                                    <label class="redial-font-weight-600">إلى </label>
                                                    <input name="start_rent" type="text" class="form-control" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group buytext">
                                                    <label class="redial-font-weight-600"> الموقع</label>
                                                    <input type="text" name="location" class="form-control" placeholder="" />
                                                </div>
                                                <div class="form-group buytext">
                                                    <label class="redial-font-weight-600"> مبنى</label>
                                                    <input type="text"  name="building" class="form-control" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group buytext">
                                                    <label class="redial-font-weight-600"> الطريق </label>
                                                    <input type="text"  name="path" class="form-control" placeholder="" />
                                                </div>
                                                <div class="form-group buytext">
                                                    <label class="redial-font-weight-600"> مجمع </label>
                                                    <input type="text"  name="complex" class="form-control" placeholder="" />
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-right: 425px; margin-top: 2px;" class="btn-group mb-2">
                                <button type="submit" class="btn btn-success btn-default">أكمل عملية الإيجار </button>
                            </div>
                        </div>
                        </form>

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
        <script src="dist/js/plugins.min.js"></script> 
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb0X-HAAey-LDpdZ26SWV5flKuZb8mr4o"></script>
        <script src="dist/js/gmaps.min.js"></script>   
        <script src="assets/js/gmaps.html"></script>
        <script src="dist/js/common.js"></script>
    </body>

<!-- Mirrored from psd2allconversion.com/templates/themeforest/html/redial/style1/rtl/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Nov 2018 21:17:40 GMT -->
</html>