<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Panel User</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Data Table -->
    <link rel="stylesheet" href="{{asset('stisla/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">

    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{asset('stisla/node_modules/summernote/dist/summernote-bs4.css')}}">

    <!-- Adv Form Stisla CSS -->
    <link rel="stylesheet" href="{{asset('stisla/node_modules/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/node_modules/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/node_modules/selectric/public/selectric.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">

    <!-- Multiple Upload Stisla CSS -->
    <link rel="stylesheet" href="{{asset('stisla/node_modules/dropzone/dist/min/dropzone.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style-stisla.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/extend-stisla.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/uploadimage.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/assets/css/components.css')}}">
</head>

<body>
<div id="app">
    <div class="main-wrapper">


    @include('user-layout.topbar')

    @include('user-layout.sidebar')

    @yield('content')

    @include('user-layout.footer')

    </div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{asset('stisla/assets/js/stisla.js')}}"></script>
{{-- <script src="{{asset('assets/js/uploadimage.js')}}"></script> --}}

<!-- JS Libraies -->

<!-- Data Table Libraies -->
<script src="{{asset('stisla/node_modules/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('stisla/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('stisla/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js')}}"></script>
<script src="{{asset('stisla/assets/js/page/modules-datatables.js')}}"></script>

<!-- Summernote JS Libraies -->
<script src="{{asset('stisla/node_modules/summernote/dist/summernote-bs4.js')}}"></script>

<!-- Adv Form Stisla JS Libraies -->
{{-- <script src="{{asset('stisla/node_modules/cleave.js/dist/cleave.min.js')}}"></script>
<script src="{{asset('stisla/node_modules/cleave.js/dist/addons/cleave-phone.us.js')}}"></script> --}}
<script src="{{asset('stisla/node_modules/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
<script src="{{asset('stisla/node_modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('stisla/node_modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('stisla/node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('stisla/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('stisla/node_modules/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('stisla/node_modules/selectric/public/jquery.selectric.min.js')}}"></script>
<script src="{{asset('stisla/assets/js/page/forms-advanced-forms.js')}}"></script>

<!-- Multiple Upload Stisla Libraries -->
{{-- <script src="{{asset('asset/node_modules/dropzone/dist/min/dropzone.min.js')}}"></script> --}}
<script src="{{asset('stisla/assets/js/page/components-multiple-upload.js')}}"></script>

<!-- Template JS File -->
<script src="{{asset('stisla/assets/js/scripts.js')}}"></script>
<script src="{{asset('stisla/assets/js/custom.js')}}"></script>

@yield('js')
</body>
</html>
