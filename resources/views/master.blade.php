<!DOCTYPE html>
<html>
  <head>
    <title>{!! (isset($page_title) ? $page_title.' | ' : '') . env('APP_NAME') !!}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{!! config('base.assets_path') !!}/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
    <link href="{!! config('base.assets_path') !!}/css/core.css" rel="stylesheet" type="text/css" />
    <link href="{!! config('base.assets_path') !!}/css/components.css" rel="stylesheet" type="text/css" />
    <link href="{!! config('base.assets_path') !!}/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="{!! config('base.assets_path') !!}/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="{!! config('base.assets_path') !!}/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="{!! config('base.assets_path') !!}/css/custom.css" rel="stylesheet" type="text/css" />
    <link href="{!! config('base.assets_path') !!}/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">
    <link href="{!! config('base.assets_path') !!}/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="{!! config('base.assets_path') !!}/plugins/kamadatepicker/style/kamadatepicker.min.css"  rel="stylesheet" type="text/css" />
    @stack('styles')
    <script src="{!! config('base.assets_path') !!}/js/modernizr.min.js"></script>
  </head>
  <body class="fixed-left">
    <div id="wrapper">
      @include('shetabit-base::shared.sidebar')
      <script>
        var App = {
          token: '{!! csrf_token() !!}',
          base_url: '{!! url("/") !!}',
          pages: {}
        }
        var AppMethods = {}
      </script>
      @stack('app-methods')

      @include('shetabit-base::shared.components')
    </div>
    <div id="app">
      @include('shetabit-base::shared.topbar')


        <div class="content-page">
          <div class="content">
            <div class="container">
              @yield('content')
            </div>
            @stack('page-bottom')
          </div>
          <footer class="footer text-right">
              © 1397. تمام حقوق محفوظ است
          </footer>
        </div>
    </div>

    <script>var resizefunc = [];</script>
    <script src="{!! config('base.assets_path') !!}/js/jquery.min.js"></script>
    <script src="{!! config('base.assets_path') !!}/js/bootstrap-rtl.min.js"></script>
    <script src="{!! config('base.assets_path') !!}/js/detect.js"></script>
    <script src="{!! config('base.assets_path') !!}/js/jquery.slimscroll.js"></script>
    <script src="{!! config('base.assets_path') !!}/js/jquery.nicescroll.js"></script>
    <script src="{!! config('base.assets_path') !!}/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
    <script src="{!! config('base.assets_path') !!}/plugins/notifyjs/js/notify.js"></script>
    <script src="{!! config('base.assets_path') !!}/plugins/notifications/notify-metro.js"></script>
    <script src="{!! config('base.assets_path') !!}/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="{!! config('base.assets_path') !!}/js/vue.min.js"></script>
    <script src="{!! config('base.assets_path') !!}/js/main.js"></script>
    <script src="{!! config('base.assets_path') !!}/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
    <script src="{!! config('base.assets_path') !!}/plugins/kamadatepicker/src/kamadatepicker.min.js"></script>
    @stack('scripts')
    <script src="{!! config('base.assets_path') !!}/js/jquery.core.js"></script>
    <script src="{!! config('base.assets_path') !!}/js/jquery.app.js"></script>
  </body>

    </html>