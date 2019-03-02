<div class="topbar">
        <div class="topbar-left">
          <div class="text-center">
            <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>{!! env('APP_NAME') !!}</span></a>
            <!-- Image Logo here -->
            <!--<a href="index.html" class="logo">-->
                <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
            <!--</a>-->
          </div>
        </div>

        <div class="navbar navbar-default" role="navigation">
          <div class="container">
            <div class="">
              <div class="pull-left">
                <button class="button-menu-mobile open-left waves-effect waves-light">
                  <i class="md md-menu"></i>
                </button>
                <span class="clearfix"></span>
              </div>
                <ul class="nav navbar-nav navbar-right pull-right">
                  <li class="hidden-xs">
                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                  </li>
                  <li class="dropdown top-menu-item-xs">
                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="{!! config('components.assets_path') !!}/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                    <ul class="dropdown-menu">
                      <li><a href="javascript:void(0)"><i class="ti-power-off m-r-10 text-danger"></i> خروج</a></li>
                    </ul>
                  </li>
              </ul>
            </div>
         </div>
        </div>
      </div>