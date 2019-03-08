<nav id="sidebar" class="card redial-border-light px-2 mb-4">
                <div class="sidebar-scrollarea">
                    <ul class="metismenu list-unstyled mb-0 px-0" id="menu">
                         @if(Session::has('admin'))
                         <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard pl-1"></i> لوحة التحكم </a></li>
                         @else
                         <li><a href="{{ url('/employe-admin') }}"><i class="fa fa-dashboard pl-1"></i> لوحة التحكم </a></li>
                         @endif

                        @if(Session::has('admin'))
                        <li class="">
                            <a class="has-arrow" href="#" data-toggle="collapse" aria-expanded="false"><i class="icofont icofont-shopping-cart pl-1"></i>إدارة الموضفين </a>
                             <ul class="list-unstyled collapse" aria-expanded="false" style="height: 0px;">
                                <li><a href="{{ url('/employe/add') }}"> إضافة موضف جديد</a></li>
                                <li><a href="{{ url('/admin/employes') }}">كل الموضفين </a></li>
                                
                            </ul>
                        </li>
                        @endif

                        <li class="">
                        <a class="has-arrow" href="#" data-toggle="collapse" aria-expanded="false"><i class="icofont icofont-shopping-cart pl-1"></i> إدارة العقارات </a>

                            <ul class="list-unstyled collapse" aria-expanded="false" style="height: 0px;">

                                <li><a href="{{ url('/add_estate') }}"><i class="icofont icofont-database pr-1"></i> أضف عقار</a></li>
                                <li><a href="{{ url('/admin/estates/all') }}"><i class="icofont icofont-file pl-1"></i>البحث عن عقارات </a></li>
                                <li><a href="{{ url('/admin/estates-rents') }}"><i class="icofont icofont-file pl-1"></i>العقارات المنتهية او المأجرة </a></li>
                                <li><a href="{{ url('/reports') }}"><i class="icofont icofont-file pl-1"></i> تقارير العقارات </a></li>
                                <li><a href="#"><i class="icofont icofont-file pl-1"></i> العقود والارصدة </a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a class="has-arrow" href="#" data-toggle="collapse" aria-expanded="false"><i class="icofont icofont-shopping-cart pl-1"></i> البحت وإدارة الممتلكات </a>
                             <ul class="list-unstyled collapse" aria-expanded="false" style="height: 0px;">
                                <li><a href="#">نوع المعاملة </a></li>
                                <li><a href="#">نوع العقار </a></li>
                                <li><a href="#">المنطقة </a></li>
                                <li><a href="{{ url('/admin/estates-admin') }}">الكل</a></li>
                            </ul>
                        </li>
                        
                      
                    </ul>
                </div>
            </nav>