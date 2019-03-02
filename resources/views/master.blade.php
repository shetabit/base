<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="{!! config('components.assets_path') !!}/images/favicon_1.ico">
    <title>قالب اچ تی ام ال مدیریتی نادیا</title>
		<link rel="stylesheet" href="{!! config('components.assets_path') !!}/plugins/morris/morris.css">

    <link href="{!! config('components.assets_path') !!}/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
    <link href="{!! config('components.assets_path') !!}/css/core.css" rel="stylesheet" type="text/css" />
    <link href="{!! config('components.assets_path') !!}/css/components.css" rel="stylesheet" type="text/css" />
    <link href="{!! config('components.assets_path') !!}/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="{!! config('components.assets_path') !!}/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="{!! config('components.assets_path') !!}/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="{!! config('components.assets_path') !!}/css/custom.css" rel="stylesheet" type="text/css" />
    @stack('styles')
    <script src="{!! config('components.assets_path') !!}/js/modernizr.min.js"></script>
  </head>
  <body class="fixed-left">
    <script>
      var App = {
        token: '{!! csrf_token() !!}',
        base_url: '{!! url('/') !!}',
        pages: {}
      }
    </script>
    <div id="app">
      <div id="wrapper">

        @include('shetabit-components::shared.topbar')
        @include('shetabit-components::shared.sidebar')


        <div class="content-page">
          <div class="content">
            <div class="container">
              @yield('content')
            </div>
          </div>
          <footer class="footer text-right">
              © 1396. تمام حقوق محفوظ است
          </footer>
        </div>
      </div>
    </div>



    <script>var resizefunc = [];</script>
    <script src="{!! config('components.assets_path') !!}/js/jquery.min.js"></script>
    <script src="{!! config('components.assets_path') !!}/js/bootstrap-rtl.min.js"></script>
    <script src="{!! config('components.assets_path') !!}/js/detect.js"></script>
    <script src="{!! config('components.assets_path') !!}/js/fastclick.js"></script>
    <script src="{!! config('components.assets_path') !!}/js/jquery.slimscroll.js"></script>
    <script src="{!! config('components.assets_path') !!}/js/jquery.blockUI.js"></script>
    <script src="{!! config('components.assets_path') !!}/js/waves.js"></script>
    <script src="{!! config('components.assets_path') !!}/js/wow.min.js"></script>
    <script src="{!! config('components.assets_path') !!}/js/jquery.nicescroll.js"></script>
    <script src="{!! config('components.assets_path') !!}/js/jquery.scrollTo.min.js"></script>
    <script src="{!! config('components.assets_path') !!}/plugins/moment/moment.js"></script>
    <script src="{!! config('components.assets_path') !!}/plugins/morris/morris.min.js"></script>
    <script src="{!! config('components.assets_path') !!}/plugins/raphael/raphael-min.js"></script>
    <script src="{!! config('components.assets_path') !!}/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
    <script src="{!! config('components.assets_path') !!}/js/jquery.core.js"></script>
    <script src="{!! config('components.assets_path') !!}/js/jquery.app.js"></script>
    <script src="{!! config('components.assets_path') !!}/pages/jquery.dashboard_2.js"></script>
    <script src="{!! url('/') !!}/js/vue.min.js"></script>
    <script src="{!! config('components.assets_path') !!}/js/main.js"></script>
    @stack('scripts')
  </body>

</html>