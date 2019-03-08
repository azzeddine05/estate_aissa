<!DOCTYPE html>
<html lang="en" dir="rtl">
 
@include('back/layouts/head')
    <body class="rtl">
        
        <!-- header-->
    @include('back/layouts/header')

         <!-- Main-content Top bar-->
        <div class="redial-relative mt-80">
           
        </div>
        <!-- End Main-content Top bar-->

        <!-- main-content-->
        <div class="wrapper">
        @include('back/layouts/sideBar')

            <div id="content">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="row mb-4">
                            <div class="col-12 col-md-12 mb-4">
                               
                            </div>
                           
                            <div class="col-12 col-xl-6">
                                <div class="card redial-border-light redial-shadow">
                                    <div class="card-body">
                                        <h6 class="header-title pr-3 redial-relative">Contact us</h6>
                                        <p>Lorem ipsum dolor sit amet, Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
                                        <address>
                                            <strong>Loop, Inc.</strong><br>
                                            795 Park Ave, Suite 120<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P: </abbr> (234) 145-1810 
                                        </address>
                                        <address>
                                            <strong>Email</strong><br>
                                            <a href="mailto:#" class="redial-primary redial-font-weight-600">first.last@email.com </a>
                                        </address>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><a href="https://www.facebook.com/" target="blank" class="btn btn-social btn-facebook mb-2"><i class="icofont icofont-social-facebook"></i></a></li>
                                            <li class="list-inline-item"><a href="https://twitter.com/" target="blank" class="btn btn-social btn-twitter mb-2"><i class="icofont icofont-social-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="https://in.linkedin.com/" target="blank" class="btn btn-social btn-linkedin mb-2"><i class="icofont icofont-brand-linkedin"></i></a></li>
                                            <li class="list-inline-item"><a href="https://www.instagram.com/" target="blank" class="btn btn-social btn-instagram mb-2"><i class="icofont icofont-social-instagram"></i></a></li>
                                            <li class="list-inline-item"><a href="https://plus.google.com/discover" target="blank" class="btn btn-social btn-google mb-2"><i class="icofont icofont-social-google-plus"></i></a></li>
                                            <li class="list-inline-item"><a href="https://www.tumblr.com/" target="blank" class="btn btn-social btn-tumblr mb-2"><i class="icofont icofont-social-tumblr"></i></a></li>
                                            <li class="list-inline-item"><a href="https://in.pinterest.com/" target="blank" class="btn btn-social btn-pinterest mb-2"><i class="icofont icofont-social-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="https://www.flickr.com/" target="blank" class="btn btn-social btn-flickr mb-2"><i class="icofont icofont-brand-flikr"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6 mb-4 mb-xl-0">
                                <div class="card redial-border-light redial-shadow">
                                    <div class="card-body">
                                        <h6 class="header-title pr-3 redial-relative">Feedback</h6>
                                        <p>Lorem ipsum dolor sit amet, Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
                                        <form action="{{url('/admin/settings')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="text" value="" name="user_id">
                                            <div class="form-group">
                                                <input name="first_name" type="text" class="form-control" placeholder="Name:" />
                                            </div>
                                            <div class="form-group">
                                                <input  name="last_name" type="text" class="form-control" placeholder="Email:" />
                                            </div>
                                            <div class="form-group">
                                                <input name="email" type="text" class="form-control" placeholder="Email:" />
                                            </div>
                                            <div class="form-group">
                                                <input name="password" type="text" class="form-control" placeholder="Email:" />
                                            </div>
                                           
                                            <button type="submit" class="btn btn-primary btn-default">Submit</button>
                                        </form>
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
        <div id="sidechat">
            <a href="#" class="setting text-center redial-bg-primary d-none d-lg-block"> 
                <h4 class="text-white mb-0"><i class="icofont icofont-gear"></i></h4>
            </a>
            <div class="sidbarchat">
                <ul class="nav nav-tabs border-0 justify-content-lg-center my-3 my-lg-0 flex-column flex-sm-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link redial-light border-top-0 border-left-0 border-right-0 active pt-0" id="11-tab" data-toggle="tab" href="#11" role="tab" aria-controls="home" aria-selected="true">Chat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link redial-light border-top-0 border-left-0 border-right-0 pt-0" id="21-tab" data-toggle="tab" href="#21" role="tab" aria-controls="profile" aria-selected="false">Todo</a>
                    </li>

                </ul>
                <div class="tab-content py-4" id="mysideTabContent">
                    <div class="tab-pane fade show active" id="11" role="tabpanel" aria-labelledby="11-tab">
                        <ul class="nav flex-column px-0" role="tablist">
                            <li class="nav-item redial-divider px-3">
                                <a class="nav-link active redial-light" data-toggle="tab" href="#tab1" role="tab" aria-selected="true">
                                    <div class="media d-block d-sm-flex text-center py-3">
                                        <img class="img-fluid d-md-flex ml-sm-3 redial-rounded-circle-50" src="dist/images/author2.jpg" alt="">
                                        <div class="media-body align-self-center redial-line-height-1_5 mt-2 mt-sm-0 text-right">
                                            <h6 class="mb-1 redial-font-weight-800">Harry Jones</h6>
                                            Managing Partner at MDD
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item redial-divider px-3">
                                <a class="nav-link redial-light" data-toggle="tab" href="#tab2" role="tab" aria-selected="false">
                                    <div class="media d-block d-sm-flex text-center py-3">
                                        <img class="img-fluid d-md-flex ml-sm-3 redial-rounded-circle-50" src="dist/images/author3.jpg" alt="">
                                        <div class="media-body align-self-center redial-line-height-1_5 mt-2 mt-sm-0 text-right">
                                            <h6 class="mb-1 redial-font-weight-800">Daniel Taylor</h6>
                                            Freelance Web Developer
                                        </div>
                                    </div> 
                                </a>
                            </li>
                            <li class="nav-item redial-divider px-3">
                                <a class="nav-link redial-light" data-toggle="tab" href="#tab3" role="tab" aria-selected="false">
                                    <div class="media d-block d-sm-flex text-center py-3">
                                        <img class="img-fluid d-md-flex ml-sm-3 redial-rounded-circle-50" src="dist/images/author.jpg" alt="">
                                        <div class="media-body align-self-center redial-line-height-1_5 mt-2 mt-sm-0 text-right">
                                            <h6 class="mb-1 redial-font-weight-800">Charlotte </h6>
                                            Co-Founder & CEO at Pi
                                        </div>
                                    </div> 
                                </a>
                            </li>
                            <li class="nav-item redial-divider px-3">
                                <a class="nav-link redial-light" data-toggle="tab" href="#tab4" role="tab" aria-selected="false">
                                    <div class="media d-block d-sm-flex text-center py-3">
                                        <img class="img-fluid d-md-flex ml-sm-3 redial-rounded-circle-50" src="dist/images/author7.jpg" alt="">
                                        <div class="media-body align-self-center redial-line-height-1_5 mt-2 mt-sm-0 text-right">
                                            <h6 class="mb-1 redial-font-weight-800">Jack Sparrow</h6>
                                            Managing Partner at MDD
                                        </div>
                                    </div> 
                                </a>
                            </li>
                            <li class="nav-item redial-divider px-3">
                                <a class="nav-link redial-light" data-toggle="tab" href="#tab5" role="tab" aria-selected="false">
                                    <div class="media d-block d-sm-flex text-center py-3">
                                        <img class="img-fluid d-md-flex ml-sm-3 redial-rounded-circle-50" src="dist/images/author6.jpg" alt="">
                                        <div class="media-body align-self-center redial-line-height-1_5 mt-2 mt-sm-0 text-right">
                                            <h6 class="mb-1 redial-font-weight-800">Bhaumik</h6>
                                            Managing Partner at MDD
                                        </div>
                                    </div> 
                                </a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link redial-light" data-toggle="tab" href="#tab6" role="tab" aria-selected="false">
                                    <div class="media d-block d-sm-flex text-center py-3">
                                        <img class="img-fluid d-md-flex ml-sm-3 redial-rounded-circle-50" src="dist/images/author8.jpg" alt="">
                                        <div class="media-body align-self-center redial-line-height-1_5 mt-2 mt-sm-0 text-right">
                                            <h6 class="mb-1 redial-font-weight-800">Wood Walton</h6>
                                            Managing Partner at MDD
                                        </div>
                                    </div> 
                                </a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link redial-light" data-toggle="tab" href="#tab6" role="tab" aria-selected="false">
                                    <div class="media d-block d-sm-flex text-center py-3">
                                        <img class="img-fluid d-md-flex ml-sm-3 redial-rounded-circle-50" src="dist/images/author8.jpg" alt="">
                                        <div class="media-body align-self-center redial-line-height-1_5 mt-2 mt-sm-0 text-right">
                                            <h6 class="mb-1 redial-font-weight-800">Wood Walton</h6>
                                            Managing Partner at MDD
                                        </div>
                                    </div> 
                                </a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link redial-light" data-toggle="tab" href="#tab6" role="tab" aria-selected="false">
                                    <div class="media d-block d-sm-flex text-center py-3">
                                        <img class="img-fluid d-md-flex ml-sm-3 redial-rounded-circle-50" src="dist/images/author8.jpg" alt="">
                                        <div class="media-body align-self-center redial-line-height-1_5 mt-2 mt-sm-0 text-right">
                                            <h6 class="mb-1 redial-font-weight-800">Wood Walton</h6>
                                            Managing Partner at MDD
                                        </div>
                                    </div> 
                                </a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link redial-light" data-toggle="tab" href="#tab6" role="tab" aria-selected="false">
                                    <div class="media d-block d-sm-flex text-center py-3">
                                        <img class="img-fluid d-md-flex ml-sm-3 redial-rounded-circle-50" src="dist/images/author8.jpg" alt="">
                                        <div class="media-body align-self-center redial-line-height-1_5 mt-2 mt-sm-0 text-right">
                                            <h6 class="mb-1 redial-font-weight-800">Wood Walton</h6>
                                            Managing Partner at MDD
                                        </div>
                                    </div> 
                                </a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link redial-light" data-toggle="tab" href="#tab6" role="tab" aria-selected="false">
                                    <div class="media d-block d-sm-flex text-center py-3">
                                        <img class="img-fluid d-md-flex ml-sm-3 redial-rounded-circle-50" src="dist/images/author8.jpg" alt="">
                                        <div class="media-body align-self-center redial-line-height-1_5 mt-2 mt-sm-0 text-right">
                                            <h6 class="mb-1 redial-font-weight-800">Wood Walton</h6>
                                            Managing Partner at MDD
                                        </div>
                                    </div> 
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="tab-pane fade" id="21" role="tabpanel" aria-labelledby="21-tab">
                        <ul class="mb-0 list-unstyled inbox mt-3 px-0">
                            <li class="border border-top-0 border-left-0 border-right-0">
                                <a href="#" class="h6">
                                    <div class="form-group mb-0 p-3">
                                        <input type="checkbox" id="scheckbox12">
                                        <label for="scheckbox12" class="redial-dark redial-font-weight-600">John Smith</label>
                                        <small class='float-right text-muted'><i class="fa fa-paperclip pl-1"></i> Aug 10</small>
                                        <small class="d-block pt-2"><i class="fa fa-star pl-2"></i> No Subject Lorem ipsum dolor sit amet </small>
                                    </div>
                                </a>
                            </li>
                            <li class="border border-top-0 border-left-0 border-right-0">
                                <a href="#" class="h6">
                                    <div class="form-group mb-0 p-3">
                                        <input type="checkbox" id="scheckbox13">
                                        <label for="scheckbox13" class="redial-dark redial-font-weight-600">Lauren Boggs</label>
                                        <small class='float-right text-muted'> Nov 5</small>
                                        <small class="d-block pt-2"><i class="fa fa-star pl-2"></i>Invite Lorem ipsum dolor sit amet</small>
                                    </div>
                                </a>
                            </li>
                            <li class="border border-top-0 border-left-0 border-right-0">
                                <a href="#" class="h6">
                                    <div class="form-group mb-0 p-3">
                                        <input type="checkbox" id="scheckbox14">
                                        <label for="scheckbox14" class="redial-dark redial-font-weight-600">Devid Taylor</label>
                                        <small class='float-right text-muted'><i class="fa fa-paperclip pl-1"></i> Jan 25</small>
                                        <small class="d-block pt-2"><i class="fa fa-star pl-2"></i>Developemnt  Lorem ipsum dolor sit amet</small>

                                    </div>
                                </a>
                            </li>
                            <li class="border border-top-0 border-left-0 border-right-0">
                                <a href="#" class="h6">
                                    <div class="form-group mb-0 p-3">
                                        <input type="checkbox" id="sscheckbox12">
                                        <label for="sscheckbox12" class="redial-dark redial-font-weight-600">John Smith</label>
                                        <small class='float-right text-muted'><i class="fa fa-paperclip pl-1"></i> Aug 10</small>
                                        <small class="d-block pt-2"><i class="fa fa-star pl-2"></i> No Subject Lorem ipsum dolor sit amet </small>
                                    </div>
                                </a>
                            </li>
                            <li class="border border-top-0 border-left-0 border-right-0">
                                <a href="#" class="h6">
                                    <div class="form-group mb-0 p-3">
                                        <input type="checkbox" id="sscheckbox13">
                                        <label for="sscheckbox13" class="redial-dark redial-font-weight-600">Lauren Boggs</label>
                                        <small class='float-right text-muted'> Nov 5</small>
                                        <small class="d-block pt-2"><i class="fa fa-star pl-2"></i>Invite Lorem ipsum dolor sit amet</small>
                                    </div>
                                </a>
                            </li>
                            <li class="border border-top-0 border-left-0 border-right-0">
                                <a href="#" class="h6">
                                    <div class="form-group mb-0 p-3">
                                        <input type="checkbox" id="sscheckbox14">
                                        <label for="sscheckbox14" class="redial-dark redial-font-weight-600">Devid Taylor</label>
                                        <small class='float-right text-muted'><i class="fa fa-paperclip pl-1"></i> Jan 25</small>
                                        <small class="d-block pt-2"><i class="fa fa-star pl-2"></i>Developemnt  Lorem ipsum dolor sit amet</small>

                                    </div>
                                </a>
                            </li>
                            <li class="border border-top-0 border-left-0 border-right-0">
                                <a href="#" class="h6">
                                    <div class="form-group mb-0 p-3">
                                        <input type="checkbox" id="ccheckbox14">
                                        <label for="ccheckbox14" class="redial-dark redial-font-weight-600">Devid Taylor</label>
                                        <small class='float-right text-muted'><i class="fa fa-paperclip pl-1"></i> Jan 25</small>
                                        <small class="d-block pt-2"><i class="fa fa-star pl-2"></i>Developemnt  Lorem ipsum dolor sit amet</small>

                                    </div>
                                </a>
                            </li>
                            <li class="border border-top-0 border-left-0 border-right-0">
                                <a href="#" class="h6">
                                    <div class="form-group mb-0 p-3">
                                        <input type="checkbox" id="vcheckbox14">
                                        <label for="vcheckbox14" class="redial-dark redial-font-weight-600">Devid Taylor</label>
                                        <small class='float-right text-muted'><i class="fa fa-paperclip pl-1"></i> Jan 25</small>
                                        <small class="d-block pt-2"><i class="fa fa-star pl-2"></i>Developemnt  Lorem ipsum dolor sit amet</small>

                                    </div>
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>
        </div>
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