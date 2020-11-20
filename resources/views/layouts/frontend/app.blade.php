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
    @yield('title')
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/landing.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/css/ilmosys-icon.css')}}">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>

  <!-- Global site tag (gtag.js) - Google Ads: 674605734 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-674605734"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-674605734');
</script>

    <style>
    #crmWebToEntityForm tr , #crmWebToEntityForm td { 
    padding:25px;
    border-spacing:0px;
    border-width:0px;
    }
    .zcwf_lblLeft .zcwf_tooltip_over{
    position: relative;
    }
    .zcwf_lblLeft .zcwf_tooltip_ctn{
    position: absolute;
    background: #dedede;
    padding: 3px 6px;
    top: 3px;
    border-radius: 4px;word-break: break-all;
    min-width: 50px;
    max-width: 150px;
    color: #333;
    }
    @media all and (max-width: 600px) {
    .zcwf_lblLeft .zcwf_col_lab, .zcwf_lblLeft .zcwf_col_fld {
    width: auto;
    float: none !important;
    }
    .zcwf_lblLeft .zcwf_col_help {width: 40%;}
    }
    </style>
    @yield('css')
</head>
<body>
    @include('layouts.frontend.partial.menu')
    @yield('content')
    @include('layouts.frontend.partial.footer')
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('assets/frontend/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <!-- Slick Slider Js -->
    <script src="{{asset('assets/frontend/js/slick.min.js')}}"></script>
    <!-- Magnific popup Js -->
    <script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Script Js -->
    <script src="{{asset('assets/frontend/js/script.js')}}"></script>
    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
      feather.replace()
    </script>
    <!--//End Footer -->
    <script>
      if ( $(window).width() > 748 ) {
        startCarousel();
      } else {
        $('.owl-carousel').addClass('off');
      }
      function startCarousel(){
      $('.owl-carousel').owlCarousel({
          loop:true,
          autoplay: true,
          stagePadding: 15,
          margin:10,
          nav:false,
          navText : ["<img src='{{asset('assets/frontend/images/right.svg')}}'>","<img src='{{asset('assets/frontend/images/left.svg')}}'>"],
          responsive:{
            0:{
              items:1
            },
            640:{
              items:2
            },
            960:{
              items:3
            },
            1200:{
              items:3
            }
          }
        })
      }
      function stopCarousel() {
         var owl = $('.owl-carousel');
         owl.trigger('destroy.owl.carousel');
         owl.addClass('off');
      }
    </script> 
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLVPNS2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- zoho form embeed -->
    <script type='text/javascript' src='https://crm.zoho.in/crm/javascript/zcga.js'></script>
    <script type="text/javascript">
      $('#$callToAction').click(function() {
        fbq('track', 'Call');
      });
    </script>
        <script>
      $(window).scroll(function(){
    	$('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
      });
        </script>
    @yield('script')
  </body>
</html>