<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no"/>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{asset('assets/frontend/images/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}" />
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/all.css')}}" />
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slick-theme.css')}}" />
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css')}}" />
    <!-- Blurp CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/et-blurp.css')}}" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/landing.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/css/ilmosys-icon.css')}}">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <title></title>
    <!-- Global site tag (gtag.js) - Google Ads: 674605734 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-674605734"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-674605734');
    </script>

    <!-- Event snippet for Request A Call Back conversion page -->
    <script>
    gtag('event', 'conversion', {'send_to': 'AW-674605734/O1JBCKXOl7oBEKbV1sEC'});
    </script>
</head>
<body>
    @include('layouts.frontend.partial.menu')
    <!-- Sub header -->
    <section class="space sub-header" style="margin-top: 10rem;">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="alt-header_content" style="text-align: center; color: #fff;">
                       <h1>Our Treatments</h1>
                        <div class="sub-header_main" style="float: right">
                        <h2></h2>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    @include('layouts.frontend.partial.footer')


</body>
</html>