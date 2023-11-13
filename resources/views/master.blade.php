<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buy Tech</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{URL::to('public/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{URL::to('public/assets/css/bootstrap-icons.css')}}">

    <link rel="stylesheet" href="{{URL::to('public/assets/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{URL::to('public/fontawesome-free-6.2.1-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('public/jquery-ui-1.13.2.custom/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('public/assets/css/owl.theme.default.min.css')}}">

    <link href="{{URL::to('public/assets/css/templatemo-pod-talk.css')}}" rel="stylesheet">

    <link href="public/select2/select2.min.css" rel="stylesheet" />
    <!--

TemplateMo 584 Pod Talk

https://templatemo.com/tm-584-pod-talk

-->
</head>

<body>
    <script>
        var base_url = "{{url('/')}}/";
    </script>

    {{-- =================== HEADER =================== --}}
       @include('layouts.header');

       <main>
              @yield('content')
    </main>
 {{-- =================== FOOTER =================== --}}
        @include('layouts.footer');
   


    <!-- JAVASCRIPT FILES -->
    <script src="{{URL::to('public/assets/js/jquery.min.js')}}"></script>
    <script src="{{URL::to('public/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::to('public/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::to('public/assets/js/custom.js')}}"></script>
    <script src="{{URL::to('public/fontawesome-free-6.2.1-web/js/all.min.js')}}"></script>
    <script src="{{URL::to('public/jquery-ui-1.13.2.custom/jquery-ui.min.js')}}"></script>
    <script src="public/select2/select2.min.js"></script>


</body>

</html>