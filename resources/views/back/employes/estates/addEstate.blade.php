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
                    <div class="col-12 col-sm-12">
                    <div style="margin-right: 320px;" class="row">
                        <div class="form-group">
                            <input name="tt" type="checkbox" id="checkbox1">
                            <label for="checkbox1" class="redial-dark mb-0">عقارات للبيع </label>
                        </div>
                        <div class="form-group">
                            <input name="tt" type="checkbox" id="checkbox2">
                            <label for="checkbox2" class="redial-dark mb-0">عقارات للإيجار </label>
                        </div>
                        <div class="form-group">
                            <input name="tt" type="checkbox" id="checkbox3">
                            <label for="checkbox3" class="redial-dark mb-0">عقارات منتهية </label>
                        </div>
                        <div class="form-group">
                            <input name="tt" type="checkbox" id="checkbox4">
                            <label for="checkbox4" class="redial-dark mb-0">عقارات مأجورة </label>
                        </div>
                        <div style="margin-right: 300px;" class="btn-group mb-2">
                            <a href="{{url('/add_estate')}}" class="btn btn-primary"><i class="fa fa-plus"></i>أضف عقار جديد </a>
                        </div>
                    </div><br>
                    <i class="fa fa-spinner fa-spin" style="display:none; font-size: 50px; margin-right: 570px; margin-top: 90px; color:red;"></i>

                        <div id="estateAdded" class="row mb-4">
                            <div class="col-12 col-md-10 mb-4 mb-md-0">
                                <div class="card redial-border-light redial-shadow">
                                    <div class="card-body">
                                    <form id="frm" method="post" action="{{url('/estate/add')}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                        <div class="wizard redial-relative">
                                            <div class="wizard-inner">
                                                <div class="connecting-line"></div>
                                                <ul class="nav nav-fill flex-column flex-sm-row mb-2" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link redial-dark redial-relative round-tab text-left p-0 active" data-toggle="tab" href="#id1" role="tab" aria-controls="id1" aria-expanded="true"> 
                                                            <i class="fa fa-user redial-rounded-circle-50 text-white h5 mb-0 redial-relative"></i>
                                                            <small class="d-block redial-font-weight-800">معلومات العقار </small>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link redial-dark redial-relative round-tab text-sm-center text-left p-0" data-toggle="tab" href="#id2" role="tab" aria-controls="id2" aria-expanded="true"> 
                                                            <i class="fa fa-key redial-rounded-circle-50 text-white h5 mb-0 redial-relative"></i>
                                                            <small class="d-block redial-font-weight-800">معلومات المالك  </small>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link redial-dark redial-relative round-tab text-sm-right text-left p-0" data-toggle="tab" href="#id3" role="tab" aria-controls="id3" aria-expanded="true"> 
                                                            <i class="fa fa-credit-card-alt redial-rounded-circle-50 text-white h5 mb-0 redial-relative"></i>
                                                            <small class="d-block redial-font-weight-800">صور العقار</small>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade active show" id="id1" role="tabpanel" aria-labelledby="id1" aria-expanded="true">
                                                <div class="form">
                                                <div class="form-group">
                                                        <label class="redial-font-weight-600">صلاحيات العقار  </label>
                                                        <select id="estatePermition" class="form-control" name="estatePermition">
                                                            <option value="forEmploye"> عروض عقارية </option>

                                                            <option value="forAdmin">عقارات للإدارة </option>
                                                           
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="redial-font-weight-800 redial-dark">اسم الموظف </label>
                                                        <input id="employeName" value="{{ Session::get('name')}}  {{ Session::get('firstName')}}" name="employeName" type="text" class="form-control bg-transparent" placeholder="" readonly/>
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <label class="redial-font-weight-600">نوع العقار</label>
                                                        <select class="form-control" id="typeSelected"  name="typeEstate">
                                                            <option value="شقة">شقة</option>
                                                            <option value="عمارة">عمارة </option>
                                                            <option value="منزل ">منزل </option>
                                                            <option value="أرض">أرض  </option>
                                                            <option value="فيلا ">فيلا  </option>
                                                            
                                                        </select>
                                                    </div>

                                                    <div class="row" id="room">
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                            <label class="">رقم الشقة </label>

                                                                <input name="appartmentNum" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                            <label class="">الغرف</label>

                                                                <input name="roomsNumber" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                            <label class="">الحمامات </label>

                                                                <input name="bathroomsNumber" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>

                                                    </div>

                                                     <div class="row invisible" id="building">
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                            <label class=""> عدد الشقق</label>

                                                                <input name="appartmentNumber" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-4">
                                                            <div class="form-group">
                                                            <label class="">الطوابق </label>

                                                                <input name="roomsCount" type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                       

                                                    </div>


													<div class="row">
														<div class="form-group">
															<input type="radio" value="buy" name="typeV" id="checkbox1">
															<label for="checkbox1" class="redial-dark redial-font-weight-600">للبيع </label>
														</div>
														<div class="form-group">
															<input value="rent" type="radio"  name="typeV" id="checkbox2">
															<label for="checkbox2" class="redial-dark redial-font-weight-600">للإيجار </label>
														</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="redial-font-weight-800 redial-dark"> المنطقة </label>
                                                        <input id="region" name="region" type="text" class="form-control bg-transparent" placeholder="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="redial-font-weight-800 redial-dark">مساحة العقار   </label>
                                                        <input id="surface" name="surface" type="text" class="form-control bg-transparent" placeholder="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="redial-font-weight-800 redial-dark"> المبلغ  </label>
                                                        <input id="price" name="price" type="text" class="form-control bg-transparent" placeholder="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="redial-font-weight-600">وصف العقار</label>
                                                        <textarea id="description"  name="description" class="form-control" placeholder="" ></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="redial-font-weight-600"> الوصف بالإنجليزي </label>
                                                        <textarea id="descriptionEnglish" name="descriptionEnglish" class="form-control" placeholder="" ></textarea>
                                                    </div>

                                                     <!-- <a href="#id2" data-toggle="tab" role="tab" class="btn btn-primary btn-sm btn-block rounded-0 text-uppercase"> suivant </a> -->
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="id2" role="tabpanel" aria-labelledby="id2" aria-expanded="true">
                                                <div class="form">
                                                    <div class="form-group">
                                                        <label class="redial-font-weight-800 redial-dark">إسم المالك </label>
                                                        <input type="text" name="owner_name" class="form-control bg-transparent" placeholder="" />
                                                        <!-- <small class="form-text">You will occasionally receive account related emails.</small> -->
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="redial-font-weight-800 redial-dark">رقم المالك </label>
                                                        <input name="owner_number" type="text" class="form-control bg-transparent" placeholder="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="redial-font-weight-800 redial-dark">الرقم الشخصي </label>
                                                        <input name="owner_phone" type="text" class="form-control bg-transparent" placeholder="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="redial-font-weight-800 redial-dark"> الجنسية </label>
                                                        <input name="owner_nationality" type="text" class="form-control bg-transparent" placeholder="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="redial-font-weight-800 redial-dark"> عنوان المالك </label>
                                                        <input name="owner_adresse" type="text" class="form-control bg-transparent" placeholder="" />
                                                    </div>
                                                    <div id="bankAccount" class="form-group">
                                                        <label class="redial-font-weight-800 redial-dark"> الحساب البنكي  </label>
                                                        <input name="owner_bank_acount" type="text" class="form-control bg-transparent" placeholder="" />
                                                    </div>
                                                    <div id="bankAccountName" class="form-group">
                                                        <label class="redial-font-weight-800 redial-dark">  إسم البنك  </label>
                                                        <input name="owner_bank_acount_name" type="text" class="form-control bg-transparent" placeholder="" />
                                                    </div>
                                                    <!-- <a data-toggle="tab" href="#id3" role="tab" aria-controls="id3" aria-expanded="true" class="btn btn-primary btn-sm btn-block rounded-0 text-uppercase">أضف  </a> -->
                                                </div>    
                                            </div>
                                            <div class="tab-pane fade" id="id3" role="tabpanel" aria-labelledby="id3" aria-expanded="true">
                                                <div class="row">
                                                
                                                    <div class="col-12 col-sm-6 mb-8">
                                                        <input type="file" name="image1">
                                                        <input type="file" name="image2">
                                                        <input type="file" name="image3">
                                                        <input type="file" name="">
                                                        <input type="file" name="">

                                                    </div>
                                                    
                                                    <button type="submit" id="" class="btn btn-primary btn-sm btn-block rounded-0 text-uppercase">أضف الآن </button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div> 
                            </div>
                            
                        </div>     
                    </div>


                <div style="display:none" class="row" id="formShearch">
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
                                            
                                            <tbody id="dataEsates">
                                                
                                              
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
    <script>
        $(document).ready(function() {

        $('#checkbox1').on('change', function (e) {
            $('#checkbox2').prop('checked', false);
            $('#estateAdded').children().
                css({ 'opacity' : 0.2 }).
                end().
                css({ 'opacity' : 0.2 });
            $('#formShearch').children().
                css({ 'opacity' : 0.2 }).
                end().
                css({ 'opacity' : 0.2 });
            
            $('.fa-spin').fadeIn();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type:"POST",
                url:"/estatesBuyed",
                data :  {
                    "_token": "{{ csrf_token() }}",
                },
                datatype:"json",
                success:function(data) {
                    $('#dataEsates').html('');
                    console.log(data);
                    var div = " ";
                    $.each(data, function(i, item) {
                        //dataEsates
                      div += '<tr><td>"'+item.type+'"</td>'+'<td>"'+item.rentorBuy+'"</td>'+'<td>"'+item.region+'"</td>'+'<td>"'+item.surface+'"</td>'+'<td>"'+item.description+'"</td>'+'<td>"'+item.description_english+'"</td>'+'<td>"'+item.price+'"</td>'+'"<td>vcvc</td></tr>"';
                       console.log(item.type);

                    });
                    $( "#dataEsates" ).append(div);
                    setTimeout(function() {
                        $('#estateAdded').hide();
                        $('.fa-spin').hide();
                        $('#formShearch').children().
                            css({ 'opacity' : 1 }).
                            end().
                            css({ 'opacity' : 1 });
                        $('#formShearch').fadeIn();
                    }, 2000); 

                   
                    
                //        console.log(data.cp);
                //     console.log(data.cp);
                }
            });
        });


        $('#checkbox2').on('change', function (e) {
            $('#checkbox1').prop('checked', false);
            $('#estateAdded').children().
                 css({ 'opacity' : 0.2 }).
                 end().
                 css({ 'opacity' : 0.2 });

            $('#formShearch').children().
                css({ 'opacity' : 0.2 }).
                end().
                css({ 'opacity' : 0.2 });
            $('.fa-spin').fadeIn();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type:"POST",
                url:"/estatesRented",
                data :  {
                    "_token": "{{ csrf_token() }}",
                },
                datatype:"json",
                success:function(data) {
                    $('#dataEsates').html('');
                    console.log(data);
                    var div = " ";
                    $.each(data, function(i, item) {
                        //dataEsates
                      div += '<tr><td>"'+item.type+'"</td>'+'<td>"'+item.rentorBuy+'"</td>'+'<td>"'+item.region+'"</td>'+'<td>"'+item.surface+'"</td>'+'<td>"'+item.description+'"</td>'+'<td>"'+item.description_english+'"</td>'+'<td>"'+item.price+'"</td>'+'"<td>vcvc</td></tr>"';
                       console.log(item.type);

                    });
                    $( "#dataEsates" ).append(div);
                    setTimeout(function() {
                        $('#estateAdded').hide();
                        $('.fa-spin').hide();
                        $('#formShearch').children().
                            css({ 'opacity' : 1 }).
                            end().
                            css({ 'opacity' : 1 });
                        $('#formShearch').fadeIn();
                    }, 2000); 

                }
            });
        });


        $('#typeSelected').on('change', function (e) {
            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;
            if(valueSelected == "شقة"){
                $('#building').hide();
                $('#room').show();
            }else if( valueSelected == "عمارة"){
                $('#room').hide();
                $('#building').removeClass('invisible');
                $('#building').show();

            }else if( valueSelected == "أرض"){
                $('#room').hide();
                //$('#building').removeClass('invisible');
                $('#building').hide();

            }

        });


          $('form').submit(function () {

            // Get the Login Name value and trim it
            var region = $.trim($('#region').val());
            var surface = $.trim($('#surface').val());
            var price = $.trim($('#price').val());

            var description = $.trim($('#description').val());
            
            //var tb = $("#myTabContent").tabs();

            // Check if empty of not
            if (region === '' || surface === '' || price === '' || description === '') {
                alert('يجب عليك الرجوع والتحقق من ملء المعلومات كاملة ');
                //tb.tabs('select', 2);

                return false;
            }
        });


      
        $("#bankAccount").hide();
        $("#bankAccountName").hide();

        $('#estatePermition').on('change', function (e) {

            var checkState = $(this).val();
            console.log(checkState);
            if(checkState == "forAdmin"){
                $("#bankAccount").show();
                $("#bankAccountName").show();
 
            }else{
                $("#bankAccountName").hide();
                $("#bankAccount").hide();
            }
        

        });
            $("#etapTwo").click(function() {
                console.log("here");
                $("#id2").hide();

            });

            $("#addEstate").click(function() {
                var estatePermition =  $(".estatePermition").val();
                var nameEmploye = $("#employeName").val();
                var typeEstate = $(".typeEstate").val();
                var buyOrEstate = $('input[name=type]:checked').val();
                var region = $("#region").val();
                var surface = $("#surface").val();
                var description = $("#description").val();
                var descriptionEnglish = $("#descriptionEnglish").val();
               
                alert(estatePermition);
                alert(nameEmploye);
                alert(typeEstate);
                alert(buyOrEstate);
                alert(region);
                alert(description);
                alert(descriptionEnglish);
                //     alert(codeCommercial);
            $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
            $.ajax({
                type:"POST",
                url:"/add_estate",
                data :  {
                    "_token": "{{ csrf_token() }}",
                    "estatePermition": estatePermition,"nameEmploye":nameEmploye, "typeEstate":typeEstate,
                    "buyOrEstate":buyOrEstate, "region":region, "surface":surface, "description":description,
                    "descriptionEnglish":descriptionEnglish

                },
                datatype:"json",
                success:function(data) {
                    
                    //console.log(data);
                    
               
                }
            });
                

            });


        });
    </script>
        

    </body>

<!-- Mirrored from psd2allconversion.com/templates/themeforest/html/redial/style1/rtl/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Nov 2018 21:16:35 GMT -->
</html>