<style>
  .header-default .member-actions {
      padding: 0;
      float: left;
      margin-left:0px;
  }
  .header-default .nav.navbar-nav {
      float: right;
  } 
  li,td,p{
    font-family:changa;
  } 
  .header-default .member-actions .button
  {
    font-family:changa;

  }
  .form-block label {
    text-align: right;
    font-family:changa;

}
.top-bar a {
    font-family: changa;
}
header {
    background: #e8ebf3;
   
}

</style>

<header class="header-default">

  <!-- <div class="top-bar">
    <div class="container">
        <div class="top-bar-left left">
          <ul class="top-bar-item right social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          </ul>
          <div class="clear"></div>
        </div>
        <div class="top-bar-right right">
          <a href="login.html" class="top-bar-item"><i class="fa fa-sign-in icon"></i>تسجيل الدخول</a>
          <a href="register.html" class="top-bar-item"><i class="fa fa-user-plus icon"></i>تسجيل</a>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
  </div> -->

  <div class="container">

    <!-- navbar header -->
    <div class="navbar-header">

      <div class="header-details">
        <div class="header-item header-search left">
          <table>
              <tr>
              <td><i class="fa fa-search"></i></td>
              <!-- <td class="header-item-text">
                <form class="search-form">
                  <input type="text" placeholder="Search..." />
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </td> -->
            </tr>
          </table>
        </div>
        <div class="header-item header-phone left">
          <table>
            <tr>
              <td><i class="fa fa-phone"></i></td>
              <td class="header-item-text">
              {{trans('app.call-us')}}<br/>
                <span>(+212) 123 456 5665</span>
              </td>
            </tr>
          </table>
        </div>
        <div class="header-item header-phone left">
          <table>
            <tr>
              <td><i class="fa fa-envelope"></i></td>
              <td class="header-item-text">
              {{trans('app.contact')}}<br/>
                <span>jaouharat@contact.com</span>
              </td>
            </tr>
          </table>
        </div>
        <div class="clear"></div>
      </div>

      <a class="navbar-brand" href="{{ url('/') }}">Logo</a>

      <!-- nav toggle -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <!-- main menu -->
    <div class="navbar-collapse collapse">
      <div class="main-menu-wrap">
        <div class="container-fixed">

        <div class="member-actions right">
          <a href="#" class="button small alt button-icon"><i class="fa fa-plus"></i>{{trans('app.company-estate')}}</a>
        </div>
        <ul class="nav navbar-nav right">
        <li class="menu-item-has-children">
          <a href="property-listing-grid.html"><span class="flag-icon flag-icon-us"></span>English</a>
            <ul class="sub-menu">
            <li><a href="{{ url('/language',['language'=>'en']) }}?backUrl={{request()->fullUrl() }}"><span class="flag-icon flag-icon-us"></span>English</a></li>
              <li><a href="{{ url('/language',['language'=>'ar']) }}?backUrl={{request()->fullUrl() }}"><span class="flag-icon flag-icon-ae"></span>العربية</a></li>              
            </ul>
          </li>
          <li class="menu-item-has-children">
            <a href="#"> {{trans('app.contact-us')}}</a>
            
          </li>
          
          <li class="menu-item-has-children">
            <a href="#">{{trans('app.prperty-rent')}}</a>
            
          </li>
          
          <li class="menu-item-has-children current-menu-item">
            <a href="#">{{trans('app.prperty-purchase')}}</a>
            <ul class="sub-menu">
              
            </ul>
          </li>
          <li><a href="{{ url('/') }}"> {{trans('app.home')}} </a></li>
        </ul>
        <div class="clear"></div>

      </div>

      </div><!-- end main menu wrap -->
    </div><!-- end navbar collaspe -->

  </div><!-- end container -->
</header>