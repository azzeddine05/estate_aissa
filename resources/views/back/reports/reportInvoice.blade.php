<!DOCTYPE html>
<html lang="en" dir="rtl">
 
    @include('back/layouts/header')
    <body class="rtl">
        <!-- header-->
    @include('back/layouts/head')

    <!-- End header-->

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
                            <div class="col-12 col-md-12 mb-4">
                                <div class="card redial-border-light redial-shadow">
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td colspan="2">Order Details</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;"><address>
                                                        <strong>Your Store</strong><br>
                                                        Address 1 </address>
                                                    <b>Telephone:</b> 123456789<br>
                                                    <b>E-Mail:</b> demo@demo.com<br>
                                                    <b>Web Site:</b> <a href="#">http://abc.com</a></td>
                                                <td style="width: 50%;"><b>Date Added:</b> 26/09/2016<br>
                                                    <b>Order ID:</b> 3135<br>
                                                    <b>Payment Method:</b> Cash On Delivery<br>
                                                    <b>Shipping Method:</b> Flat Shipping Rate<br>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                          
                         
                            <div class="col-12 col-md-12 mb-4">
                                <div class="card redial-border-light redial-shadow">
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td><b>Product</b></td>
                                                <td><b>Model</b></td>
                                                <td class="text-right"><b>Quantity</b></td>
                                                <td class="text-right"><b>Unit Price</b></td>
                                                <td class="text-right"><b>Total</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>HP LP3065 <br>
                                                    &nbsp;<small> - Delivery Date: 2011-04-22</small>
                                                </td>
                                                <td>Product 21</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$122.00</td>
                                                <td class="text-right">$122.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left" colspan="4"><b>Sub-Total</b></td>
                                                <td class="text-right">$100.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left" colspan="4"><b>Flat Shipping Rate</b></td>
                                                <td class="text-right">$5.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left" colspan="4"><b>Eco Tax (-2.00)</b></td>
                                                <td class="text-right">$4.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left" colspan="4"><b>VAT (20%)</b></td>
                                                <td class="text-right">$21.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left" colspan="4"><b>Total</b></td>
                                                <td class="text-right">$130.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
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

      
        <!-- jQuery -->
        <script src="{{asset('back')}}/dist/js/plugins.min.js"></script>       
        <script src="{{asset('back')}}/dist/js/common.js"></script>
    </body>

</html>