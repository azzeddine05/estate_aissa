<!DOCTYPE html>
<html lang="en" dir="rtl">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Redial</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{asset('back')}}/dist/images/favicon.ico" />  
    
    <!--Plugin CSS-->
    <link href="{{asset('back')}}/dist/css/plugins.min.css" rel="stylesheet">
    
    <!--main Css-->
    <link href="{{asset('back')}}/dist/css/main.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Changa" rel="stylesheet">

</head>
    <style>
        li,h6,td,th,p,small,label,a{
            font-family: changa;
        }
    </style>
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
                    <div class="col-sm-12">
                        <div class="card redial-border-light redial-shadow mb-4">
                            <div class="card-body d-lg-flex justify-content-center d-block">
                                <div class="media d-block d-lg-flex redial-brd-left ml-xl-4 mr-0 text-center text-lg-left mb-4 mb-lg-0">
                                    <div class="d-lg-flex h1 mb-0 redial-primary align-self-center"><i class="fa fa-bar-chart"></i></div>
                                    <div class="media-body mx-xl-5 mx-lg-4 mx-0">
                                        <div class="chart sparkline spark1"></div>
                                        <p class="mb-0"><strong class="redial-dark">عدد العقارات </strong>  <strong class="redial-dark">2</strong></p>
                                    </div>
                                </div>
                                <div class="media d-block d-lg-flex redial-brd-left ml-xl-4 mr-0 text-center text-lg-left mb-4 mb-lg-0">
                                    <div class="d-lg-flex h1 mb-0 redial-cyan align-self-center"><i class="fa fa-comments-o"></i></div>
                                    <div class="media-body mx-xl-5 mx-lg-4 mx-0">
                                        <div class="chart sparkline spark2"></div>
                                        <p class="mb-0"><strong class="redial-dark">عدد العقارات المنتهية</strong> <strong class="redial-dark">1</strong></p>
                                    </div>
                                </div>
                                <div class="media d-block d-lg-flex  text-center text-lg-left">
                                    <div class="d-lg-flex h1 mb-0 redial-drank align-self-center"><i class="fa fa-line-chart"></i></div>
                                    <div class="media-body mx-xl-5 mx-lg-4 mx-0">
                                        <div class="chart sparkline spark3"></div>
                                        <p class="mb-0"><strong class="redial-dark">إحصائيات أخرى </strong>  <strong class="redial-dark"></strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                  
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="row mb-4">
                            <div class="col-12 col-md-12">
                                <div class="card redial-border-light redial-shadow mb-4">
                                    <div class="card-body">
                                    @if(session()->has('message'))
                                    <div style="font-family:changa;" class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                    @endif
                                   
                                    
                                        <h6 class="header-title pr-3 redial-relative">العروض </h6>
                                        <table id="example" class="table table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>نوع العقار</th>
                                                    <th>للبيع ام للايجار </th>
                                                    <th>المنطقة </th>
                                                    <th>مساحة العقار </th>
                                                    <th>الوصف </th>
                                                    <th>الوصف بالانجليزي</th>
                                                    <th>السعر  </th>
                                                    <th>العملية </th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                            @foreach($estates as $estate)
                                                <tr>
                                                    <td>{{$estate->type}}</td>
                                                    <td>{{$estate->rentorBuy}} </td>
                                                    <td>{{$estate->region}}</td>
                                                    <td>{{$estate->surface}} </td>
                                                    <td>{{$estate->description}}</td>
                                                    <td>{{$estate->description_english}}</td>
                                                    <td>600</td>
                                                        
                                                    <td>
                                                        <div class="btn-group mb-2">
                                                            <a href="{{ url('estate/details/'.$estate->id_estate) }}"  title="تفاصيل العقار " class="btn btn-secondary"><i class="fa fa-list"></i></a>
                                                        </div>
                                                        @if($estate->status !== "buyed" && $estate->status !== "rented")
                                                        <div class="btn-group mb-2">
                                                            <a href="#"  title=" تعديل العقار " class="btn btn-success"><i class="fa fa-link"></i></a>
                                                        </div>
                                                        <div class="btn-group mb-2">
                                                            <a href="#"  title=" حدف العقار " class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                        @endif
                                                        @if($estate->rentorBuy	 === "buy" && $estate->status !== "buyed" )
                                                        <div class="btn-group mb-2">
                                                            <a href="{{ url('/estate/buy/'.$estate->id_estate) }}"  title=" bay3 " class="btn btn-primary"><i class="fa fa-check"></i></a>
                                                        </div>
                                                        @elseif($estate->rentorBuy	 === "rent" && $estate->status !== "rented" )
                                                        <div class="btn-group mb-2">
                                                            <a href="{{ url('/estate/rent/'.$estate->id_estate) }}"  title="ijjar" class="btn btn-info"><i class="fa fa-check"></i></a>
                                                        </div>
                                                        @else
                                                        <div class="btn-group mb-2">
                                                            <button type="button" title="la yomkin" class="btn btn-danger" disabled><i class="fa fa-close"></i></button>
                                                        </div>
                                                        @endif
                                                    </td>
                                                 </tr>
                                            @endforeach

                                        
                                        
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>    
            </div>
        </div>
        <!-- End main-content-->

        <!-- Top To Bottom--> 
        <a href="#" class="scrollup text-center redial-bg-primary redial-rounded-circle-50 "> 
            <h4 class="text-white mb-0"><i class="icofont icofont-long-arrow-up"></i></h4>
        </a>
        <!-- End Top To Bottom-->

        <!-- Chat-->
       
        <!-- End Chat-->
        
    @include('back/layouts/script');

        <!-- <script>
            $(document).ready(function() {
               
            });
        </script> -->
    </body>

<!-- Mirrored from psd2allconversion.com/templates/themeforest/html/redial/style1/rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Nov 2018 21:16:25 GMT -->
</html>