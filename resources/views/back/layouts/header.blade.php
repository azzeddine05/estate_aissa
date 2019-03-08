<div id="header-fix" class="header py-4 py-lg-2 fixed-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-3 col-xl-2 align-self-center">
                        <div class="site-logo text-right">
                            <a href="index-2.html"><img src="dist/images/logo-v1.png" alt="" class="img-fluid"></a>
                        </div>
                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="navbar-btn bg-transparent float-left">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 align-self-center d-none d-lg-inline-block">
                        <form>
                            <div class="form-group mb-0 redial-relative">
                                <input type="text" class="form-control redial-rounded-circle-50 border-0" placeholder="البحت">
                                <div class="btn-search">
                                    <a href="#" class="redial-light"><i class="lnr lnr-magnifier redial-absolute redial-left-20"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-7 d-none d-lg-inline-block">
                        <nav class="navbar navbar-expand-lg p-0">
                            <ul class="navbar-nav notification mr-auto d-inline-flex">
                                <li class="nav-item dropdown  align-self-center">
                                    <a class="nav-link p-3" data-toggle="dropdown" aria-expanded="false"><span class="lnr lnr-envelope h4 text-white"></span>
                                        <span class="ring-point">
                                            <span class="ring"></span>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu border-bottom-0 rounded-0 py-0">
                                        
                                      
                                        <!-- <li><a class="dropdown-item text-center py-2" href="#"> <strong>Read All Message <i class="fa fa-angle-right pl-2"></i></strong></a></li> -->
                                    </ul>
                                </li>
                                <li class="nav-item dropdown  align-self-center">
                                    <a class="nav-link p-3" data-toggle="dropdown" aria-expanded="false"><span class="lnr lnr-alarm h4 text-white"></span>
                                        <span class="ring-point">
                                            <span class="ring"></span>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu border-bottom-0 rounded-0 py-0">
                                        
                                       
                                        <!-- <li><a class="dropdown-item text-center py-3" href="#"> <strong>See All Tasks <i class="fa fa-angle-right pl-2"></i></strong></a></li> -->
                                    </ul>
                                </li>
                                <li class="nav-item dropdown user-profile align-self-center">
                                    <a class="nav-link" data-toggle="dropdown" aria-expanded="false"> 
                                        <span class="float-right pl-3 text-white"><i class="fa fa-angle-down"></i></span>
                                        <div class="media">
                                            <img src="dist/images/author.jpg" alt="" class="d-flex ml-3 img-fluid redial-rounded-circle-50" width="45">
                                            <div class="media-body align-self-center">
                                                <p class="mb-2 text-white text-uppercase font-weight-bold">{{ Session::get('name')}}</p>
                                                <!-- <small class="redial-primary-light font-weight-bold text-white"> المتصل  </small> -->
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu border-bottom-0 rounded-0 py-0">
                                        <li><a class="dropdown-item py-2" href="#"><i class="fa fa-user pl-2"></i>الملف الشخصي </a></li>
                                        <li><a class="dropdown-item py-2" href="{{ url('/admin/settings') }}"><i class="fa fa-cog pl-2"></i> الإعدادات </a></li>
                                        <li><a class="dropdown-item py-2" href="{{ url('/logout') }}"><i class="fa fa-sign-out pl-2"></i> تسجيل الخروج </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>