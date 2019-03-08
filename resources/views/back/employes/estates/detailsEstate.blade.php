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
        li,h6,td,th,p,small,label,a,button,dd,dt,h4{
            font-family: changa;
        }
        .mb-2, .my-2 {
            margin-bottom: .5rem!important;
            padding-right: 70px;
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
                    <div class="col-sm-12">
                        
                  
                        <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="row mb-4">
                            <div class="col-12 col-md-12">
                                <div class="card redial-border-light redial-shadow mb-4">
                                @if(session()->has('tenantAdded'))
                                    <div style="font-family:changa;" class="alert alert-success">
                                        {{ session()->get('tenantAdded') }}
                                    </div>
                                    @endif
                                    <div class="card-body">
                                        <h6 class="header-title pr-3 redial-relative">تفاصيل العقار</h6>
                                        <div class="btn-group mb-2">
                                            <button id="btnInfo" type="button" class="btn btn-info">معلومات العقار</button>
                                        </div>
                                        <div class="btn-group mb-2">
                                            <button id="btnDetailsEstate" type="button" class="btn btn-info">تفاصيل العقار</button>
                                        </div>
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-info">العقد</button>
                                        </div>
                                        <div class="btn-group mb-2">
                                            <button id="btnFormDepences" type="button" class="btn btn-info">المصروفات </button>
                                        </div>
                                        <div class="btn-group mb-2">
                                            <button id="btnRevenues" type="button" class="btn btn-info">الايرادات </button>
                                        </div>
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-info">الإيجار</button>
                                        </div><br><br>
                                        <div id="formInfoEstate" class="col-12 col-xl-10">
                                            <div class="card redial-border-light redial-shadow mb-4">
                                                <div class="card-body">
                                                    <h6 class="header-title pr-3 redial-relative">معلومات العقار </h6>
                                                    <table class="table table-bordered mb-0 redial-font-weight-500 table-responsive d-md-table">
                                                    <thead class="redial-dark">
                                                        <tr>
                                                            <th scope="col">صلاحيات العقار </th>
                                                            <th scope="col">نوع العقار</th>
                                                            <th scope="col">المساحة (متر)</th>
                                                            <th scope="col">السعر</th>
                                                            <th scope="col">المنطقة</th>
                                                            <th scope="col">الحالة </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            @if($estate->terms == "forEmploye")
                                                            <th scope="row">عروض عقارية</th>
                                                            @else
                                                            <th scope="row">عقارات للإدارة </th>
                                                            @endif
                                                            <td>{{$estate->type}}</td>
                                                            <td>{{$estate->surface}}</td> 
                                                            <td>{{$estate->price}}</td>
                                                            <td>{{$estate->region}}</td>
                                                            @if($estate->etat == "attente")
                                                            <td><span class="badge badge-danger text-white">بانتضار الموافقة</span></td>
                                                            @else
                                                            <td><span class="badge badge-success text-white"> متاح</span></td>
                                                            @endif
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="depences" class="col-12 col-xl-10 invisible">
                                            <div class="card-body">
                                                <h6 class="header-title pr-3 redial-relative">المصروفات  </h6>
                                                <div style="margin-right: -70px;" class="btn-group mb-2">
                                                  <button type="button" data-toggle="modal" data-target="#demoModal" class="btn btn-success btn-default">أضف مصروف جديد</button>
                                                </div>
                                                <table class="table table-bordered mb-0 redial-font-weight-500 table-responsive d-md-table">
                                                    <thead id="tableExpences" class="redial-dark">
                                                        <tr>
                                                            <th scope="col">المصروف</th>
                                                            <th scope="col">قيمة المصروف  </th>
                                                            
                                                            <th scope="col">العملية </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tableExpences">
                                                    @foreach($expences as $expence)
                                                        <tr>
                                                            <th scope="row">{{$expence->libelle}}</th>
                                                            <td>{{$expence->prix}}</td>
                                                            <td>Deo</td>
                                                            
                                                        </tr>
                                                    @endforeach
                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>  

                                        <!-- Launch Demo Modal for depences-->
                                        <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content redial-border-light">
                                                    <div class="modal-header redial-border-light">
                                                        <h5 class="modal-title text-center" id="exampleModalLabel">إضافة مصروف جديد</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="redial-font-weight-600">المصروف </label>
                                                            <input type="text" id="typeDepences" class="form-control" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="redial-font-weight-600">قيمة المصروف  </label>
                                                            <input type="text" id="priceDepences" class="form-control" placeholder="">
                                                        </div>
                                                      
                                                   </form>
                                                    </div>
                                                    <div class="modal-footer redial-border-light">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">رجوع</button>
                                                        <button id="addDepences" type="button" class="btn btn-primary">أضف الآن</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!--End Launch Demo Modal -->

                                     <!-- Launch Demo Modal fir revenus -->
                                     <div class="modal fade" id="demoModalRevenue" tabindex="-1" role="dialog" aria-labelledby="demoModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content redial-border-light">
                                                    <div class="modal-header redial-border-light">
                                                        <h5 class="modal-title text-center" id="exampleModalLabel"> إضافة ايرادات جديدة </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="redial-font-weight-600">نوع الإيرادات </label>
                                                            <input type="text" id="typeRevenue" class="form-control" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="redial-font-weight-600">قيمةالإيرادات  </label>
                                                            <input type="text" id="priceRevenue" class="form-control" placeholder="">
                                                        </div>
                                                      
                                                   </form>
                                                    </div>
                                                    <div class="modal-footer redial-border-light">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">رجوع</button>
                                                        <button id="addRevenue" type="button" class="btn btn-primary">أضف الآن</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!--End Launch Demo Modal -->




                                        <div id="revenues" class="col-12 col-xl-10 invisible">
                                            <div class="card-body">
                                                <h6 class="header-title pr-3 redial-relative">الإيرادات  </h6>
                                                <div style="margin-right: -70px;" class="btn-group mb-2">
                                                  <button type="button" data-toggle="modal" data-target="#demoModalRevenue" class="btn btn-success btn-default">أضف ايرادات </button>
                                                </div>
                                                <table class="table table-bordered mb-0 redial-font-weight-500 table-responsive d-md-table">
                                                    <thead class="redial-dark">
                                                        <tr>
                                                            <th scope="col">نوع الإيرادات </th>
                                                            <th scope="col"> قيمةالإيرادات   </th>
                                                            
                                                            <th scope="col">العملية </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tableRevenues">
                                                    @foreach($revenues as $revenue)
                                                        <tr>
                                                            <th scope="row">{{$revenue->libelle}}</th>
                                                            <td>{{$revenue->price}}</td>
                                                            <td>Deo</td>
                                                            
                                                        </tr>
                                                    @endforeach
                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div> 


                                        <div id="details_estate" class="col-12 col-xl-12 invisible">
                                            <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-md-6 mb-6">
                                                    <div class="card redial-border-light redial-shadow">
                                                        <div class="card-body">
                                                            <h6 class="header-title pr-3 redial-relative">تفاصيل المالك </h6>
                                                                <dl class="row mb-0 redial-line-height-2_5">
                                                                <dt class="col-sm-5">إسم المالك  :  </dt>
                                                                <dd class="col-sm-7">{{$estate->owner_name}}	</dd>
                                                                
                                                                <dt class="col-sm-5">الرقم الشخصي :</dt>
                                                                <dd class="col-sm-7">{{$estate->owner_phone}}</dd>
                                                                
                                                                <dt class="col-sm-5">الحساب البنكي :</dt>
                                                                <dd class="col-sm-7">{{$estate->owner_bank_acount_name	}}</dd>
                                                                
                                                                <dt class="col-sm-5">العنوان :</dt>
                                                                <dd class="col-sm-7">{{$estate->owner_adresse	}}</dd>
                                                                
                                                                <dt class="col-sm-5">رقم المالك :</dt>
                                                                <dd class="col-sm-7">{{$estate->owner_number}}</dd>
                                                                
                                                                <dt class="col-sm-5">الجنسية :</dt>
                                                                <dd class="col-sm-7">{{$estate->owner_nationality	}}</dd>
                                                                
                                                                <dt class="col-sm-5">رقم الحساب :</dt>
                                                                <dd class="col-sm-7">{{$estate->owner_bank_acount	}}</dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 mb-6">
                                                @if($estate->id_tenant != "")

                                                    <div class="card redial-border-light redial-shadow">
                                                        <div class="card-body">
                                                            <h6 class="header-title pr-3 redial-relative">تفاصيل المستأجر</h6>
                                                            <dl class="row mb-0 redial-line-height-2_5">
                                                                <dt class="col-sm-5">إسم المستأجر :</dt>
                                                                <dd class="col-sm-7">{{$tenant[0]->name}}</dd>
                                                                
                                                                <dt class="col-sm-5">الرقم الشخصي :</dt>
                                                                <dd class="col-sm-7">{{$tenant[0]->number_personal}}</dd>
                                                                
                                                                <dt class="col-sm-5">هاتف المستأجر :</dt>
                                                                <dd class="col-sm-7">{{$tenant[0]->phone}}</dd>
                                                                
                                                                <dt class="col-sm-5">البريد الإلكتروني  :</dt>
                                                                <dd class="col-sm-7">{{$tenant[0]->email}}</dd>
                                                                
                                                                <dt class="col-sm-5">الجنسية :</dt>
                                                                <dd class="col-sm-7">{{$tenant[0]->nationality}}</dd>
                                                                
                                                               
                                                            </dl>
                                                        </div>
                                                    </div>

                                                  
                                                @else
                                                <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="mb-0 redial-font-weight-400">أضف مستأجر جديد </h4>
                                                        </div> 
                                                        <div class="redial-divider"></div>
                                                        <div class="card-body py-4">
                                                            <img src="dist/images/logo-v2.png" alt="" class="img-fluid mb-4">
                                                            <form id="frm" method="post" action="{{url('/tenant/add')}}">
                                                                 {{csrf_field()}}
                                                                <div class="form-group">
                                                                <input id="stateId" name="stateId" type="hidden" value="{{$estate->id_estate}}">

                                                                <label class="redial-font-weight-600">إسم المستأجر</label>
                                                                    <input name="nameTenant" type="text" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                <label class="redial-font-weight-600"> الرقم الشخصي</label>
                                                                    <input name="tenantNumber" type="text" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                <label class="redial-font-weight-600"> هاتف المستأجر</label>
                                                                    <input name="tenantPhone" type="text" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                <label class="redial-font-weight-600">البريد الإلكتروني</label>
                                                                    <input name="tenantEmail" type="text" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                <label class="redial-font-weight-600"> الجنسية</label>
                                                                    <input name="tenantNationality" type="text" class="form-control" placeholder="">
                                                                </div>
                                                                <input type="submit" class="btn btn-success btn-md redial-rounded-circle-50 btn-block" value ="أضف الآن ">
                                                            </form>
                                                        </div> 
                                                    </div>
                                                 @endif
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

        <script>
            $(document).ready(function() {    
              
                $("#btnFormDepences").click(function(){
                    $("#formInfoEstate").hide();
                    $("#revenues").hide();
                    $("#details_estate").hide();
                    $("#depences").removeClass('invisible');
                    $("#depences").show();

                });

                $("#btnInfo").click(function(){
                    $("#depences").addClass('invisible');
                    $("#revenues").hide();
                    $("#details_estate").hide();
                    $("#formInfoEstate").show();
                    //$("#depences").removeClass('invisible');
                });

                $("#btnRevenues").click(function(){
                    $("#revenues").removeClass('invisible');
                   // $("#depences").addClass('invisible');
                    $("#depences").hide();

                    $("#details_estate").hide();
                    $("#formInfoEstate").hide();
                    $("#revenues").show();
                });
                
                $("#btnDetailsEstate").click(function(){
                    $("#details_estate").removeClass('invisible');
                   // $("#depences").addClass('invisible');
                    $("#depences").hide();
                    $("#formInfoEstate").hide();
                    $("#revenues").hide();
                    $("#details_estate").show();

                });

                $("#addDepences").click(function(){
                    var typeDepences =  $("#typeDepences").val();
                    var priceDepences = $("#priceDepences").val();
                    var stateId = $("#stateId").val();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type:"POST",
                        url:"/add_depences",
                        data :  {
                            "_token": "{{ csrf_token() }}",
                            "typeDepences": typeDepences,"priceDepences":priceDepences, "stateId": stateId
                        },
                        datatype:"json",
                        success:function(data) {
                            $('#demoModal').modal('hide');
                            $('#tableExpences').append("<tr><th>" + data.libelle +"</th><td>" + data.prix +"</td><td><button class='edit-modal btn btn-info' data-id='" + data.id_expenceid +  "' data-type_re='" +  + "'data-code_re='" +  +"'><span class='glyphicon glyphicon-edit'></span> Modifier</button> <button class='delete-modal btn btn-danger' data-id='"  + data.id_expence + "' data-code_re='" +  + "' ><span class='glyphicon glyphicon-trash'></span> Supprimer</button></td></tr>");

                        }
                    });
                });
                $("#addRevenue").click(function(){
                    var typeRevenue =  $("#typeRevenue").val();
                    var priceRevenue = $("#priceRevenue").val();
                    var stateId = $("#stateId").val();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type:"POST",
                        url:"/add_revenu",
                        data :  {
                            "_token": "{{ csrf_token() }}",
                            "typeRevenue": typeRevenue,"priceRevenue":priceRevenue, "stateId": stateId
                        },
                        datatype:"json",
                        success:function(data) {
                            $('#demoModalRevenue').modal('hide');
                            $('#tableRevenues').append("<tr><th>" + data.libelle +"</th><td>" + data.price +"</td><td><button class='edit-modal btn btn-info' data-id='" + data.id_expenceid +  "' data-type_re='" +  + "'data-code_re='" +  +"'><span class='glyphicon glyphicon-edit'></span> Modifier</button> <button class='delete-modal btn btn-danger' data-id='"  + data.id_expence + "' data-code_re='" +  + "' ><span class='glyphicon glyphicon-trash'></span> Supprimer</button></td></tr>");

                        }
                    });  
                });

               
            });
        </script>
    </body>

</html>