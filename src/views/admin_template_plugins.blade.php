
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<script src="{{ asset('vendor/crudbooster/assets/stisla/iziToast.min.js') }}"></script>
<!-- REQUIRED JS SCRIPTS -->
<link rel='stylesheet' href='{{ asset("vendor/crudbooster/assets/lightbox/dist/css/lightbox.min.css") }}'/>
<script src="{{ asset('vendor/crudbooster/assets/lightbox/dist/js/lightbox.min.js') }}"></script>

<!--SWEET ALERT-->
<script src="{{asset('vendor/crudbooster/assets/sweetalert/dist/sweetalert.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('vendor/crudbooster/assets/sweetalert/dist/sweetalert.css')}}">

<!--MONEY FORMAT-->
<script src="{{asset('vendor/crudbooster/jquery.price_format.2.0.min.js')}}"></script>

<!--DATATABLE-->
<link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/stisla/dataTables.bootstrap4.min.css') }}">
<script src="{{ asset('vendor/crudbooster/assets/stisla/datatables.min.js') }}"></script>
<script src="{{ asset('vendor/crudbooster/assets/stisla/dataTables.bootstrap4.min.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('vendor/crudbooster/assets/stisla/scripts.js') }}"></script>
<script src="{{ asset('vendor/crudbooster/assets/stisla/custom.js') }}"></script>
<!-- General JS Scripts -->
<script src="{{ asset('vendor/crudbooster/assets/stisla/popper.min.js') }}" ></script>
<script src="{{ asset('vendor/crudbooster/assets/stisla/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/crudbooster/assets/stisla/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('vendor/crudbooster/assets/stisla/moment.min.js') }}"></script>
<script src="{{ asset('vendor/crudbooster/assets/stisla/stisla.js') }}"></script>
<script>
    var ASSET_URL = "{{asset('/')}}";
    var APP_NAME = "{{Session::get('appname')}}";
    var ADMIN_PATH = '{{url(config("crudbooster.ADMIN_PATH")) }}';
    var NOTIFICATION_JSON = "{{route('NotificationsControllerGetLatestJson')}}";
    var NOTIFICATION_INDEX = "{{route('NotificationsControllerGetIndex')}}";

    var NOTIFICATION_YOU_HAVE = "{{cbLang('notification_you_have')}}";
    var NOTIFICATION_NOTIFICATIONS = "{{cbLang('notification_notification')}}";
    var NOTIFICATION_NEW = "{{cbLang('notification_new')}}";
</script>
{{--<script src="{{asset('vendor/crudbooster/assets/js/main.js').'?r='.time()}}"></script>--}}


