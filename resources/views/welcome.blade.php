<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no" />
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
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style1.css')}}" />
    <title>Glamyo Health</title>
</head>

<body>
    <!--==================== Header ====================-->
    <header>
        <div class="banner--wrap"  style="background: url('{{asset('assets/frontend/images/banner-bg.jpg')}}') center no-repeat;">
            <nav>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Nav menu -->
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <a class="navbar-brand" href="index.php"><img src="{{asset('assets/frontend/images/logo.png')}}" width="150" alt=" " /></a>
                                <button class="navbar-toggler nav-custome1" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle
                                        navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto nav-sub">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="health.php" id="navbarDropdown1"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><img src="{{asset('assets/frontend/images/1.png')}}" class="nav-icon"> Health <i class="fas fa-chevron-down"></i> </a>
                                                
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a class="dropdown-item" href="health/sports-orthopedic/index.php">Sports Orthopedic</a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" href="#">Proctology <i class="fas fa-plus"></i></a>
                                                        <ul class="dropdown-menu dropdown-menu1">
                                                            <li><a class="dropdown-item" href="health/piles/index.php">Piles
                                                                    </a></li>
                                                            <li><a class="dropdown-item" href="health/fistula/index.php">Fistula
                                                                   </a></li>
                                                            <li><a class="dropdown-item" href="health/fissure/index.php">Fissure</a></li>
                                                                   
                                                        </ul>
                                                    </li>
                                                 
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" href="#">Laproscopy <i class="fas fa-plus"></i></a>
                                                        <ul class="dropdown-menu dropdown-menu1">
                                                            <li><a class="dropdown-item" href="health/hernia/index.php">Hernia</a></li>
                                                            <li><a class="dropdown-item" href="health/gallstone/index.php">Gallstone</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" href="#">Urology <i class="fas fa-plus"></i></a>
                                                        <ul class="dropdown-menu dropdown-menu1">
                                                            <li><a class="dropdown-item" href="health/phimosis/index.php">Phimosis</a></li>
                                                            <li><a class="dropdown-item" href="health/kidney-stone/index.php">Kidney Stone</a></li>
                                                            <li><a class="dropdown-item" href="health/hydrocele/index.php">Hydrocele</a></li>
                                                        </ul>
                                                    </li>
                                                    
                                                </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="beauty.php" id="navbarDropdown1"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><img src="{{asset('assets/frontend/images/2.png')}}" class="nav-icon"> Beauty <i class="fas fa-chevron-down"></i> </a>
                                                
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a class="dropdown-item" href="beauty/gynecomastia/index.php">Gynecomastia</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="dropdown-item" href="beauty/hair-transplant/index.php">Hair Transplant</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="dropdown-item" href="beauty/liposuction/index.php">Liposuction</a>
                                                    </li>
                                                 
                                                    
                                                </ul>
                                        </li>
        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="care.php" id="navbarDropdown1"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><img src="{{asset('assets/frontend/images/3.png')}}" class="nav-icon"> Care <i class="fas fa-chevron-down"></i> </a>
                                                
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a class="dropdown-item" href="care/hair-care/index.php">Hair Care</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="dropdown-item" href="care/covid-19/index.php">Covid 19</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="dropdown-item" href="appointment.html">Masks & Sanitizers</a>
                                                    </li>
                                                 
                                                    
                                                </ul>
                                        </li>
                                            <li class="appointment-btn">
                                                <a href="tel:+91 97111 44 230" class="btn btn-primary"><i data-feather="phone" class="text-white"></i> +91 97111 44 230</a>
                                                <a href="#" data-toggle="modal" data-target="#location" class="marker"> <i data-feather="map-pin" class="icon"></i></a>
                                            </li>
                                        </ul>
                                       
                                </div>
                            </nav>
                            <!--//End Nav menu -->
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="banner-slider">
                    <div class="banner">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">
                                <!-- Slider Title -->
                                <div class="main-title">
                                    <span>We are here for you</span>
                                    <h1>
                                        Healthcare, Simplified.
                                    </h1>
                                    <p>
                                        Glamyo is a multi-specialty healthcare provider delivering a hassle-free experience for all elective surgeries & cosmetic procedures with personalized care.
                                    </p>
                                    <a href="#" class="btn btn-primary">Book Appointment</a>
                                    <a href="https://www.youtube.com/embed/kqBvOMzeZUI"
                                        class="play-btn popup-youtube"><i class="fas fa-play"></i></a>
                                </div>
                                <!--//End Slider Title -->
                            </div>
                            <div class="col-12 col-md-6 col-lg-7 d-flex align-items-end">
                                <div class="anim-container flex-fill">
                                    <svg class="circle-svg" width="100%" height="100%" viewBox="0 0 754 733" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="big-circle" opacity="0.071" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M377 29C563.12 29 714 179.879 714 366C714 552.119 563.12 702.999 377 702.999C190.88 702.999 40 552.119 40 366C40 179.879 190.88 29 377 29Z"
                                            fill="#4D72D0" />
                                        <path class="small-circle" opacity="0.051" fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M376.471 120.995C512.043 120.995 621.947 230.898 621.947 366.471C621.947 502.043 512.043 611.946 376.471 611.946C240.898 611.946 130.995 502.043 130.995 366.471C130.995 230.898 240.898 120.995 376.471 120.995Z"
                                            fill="#4D72D0" />
                                    </svg>

                                    <img src="{{asset('assets/frontend/images/doctors.png')}}" class="img-fluid animated-hero" alt="hero" />

                                    <ul class="main-slider-social">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="banner">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">
                                <!-- Slider Title -->
                                <div class="main-title">
                                    <span>We are here for you</span>
                                    <h1>
                                        What Makes Us Better, Makes You Better.
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu lacus ex.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                        ipsum dolor sit amet.
                                    </p>
                                    <a href="#" class="btn btn-primary">Make Appointment</a>
                                    <a href="https://www.youtube.com/watch?v=pBFQdxA-apI"
                                        class="play-btn popup-youtube"><i class="fas fa-play"></i></a>
                                </div>
                                <!--//End Slider Title -->
                            </div>
                            <div class="col-12 col-md-6 col-lg-7 d-flex align-items-end">
                                <div class="anim-container flex-fill">
                                    <svg class="circle-svg" width="100%" height="100%" viewBox="0 0 754 733" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="big-circle" opacity="0.071" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M377 29C563.12 29 714 179.879 714 366C714 552.119 563.12 702.999 377 702.999C190.88 702.999 40 552.119 40 366C40 179.879 190.88 29 377 29Z"
                                            fill="#4D72D0" />
                                        <path class="small-circle" opacity="0.051" fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M376.471 120.995C512.043 120.995 621.947 230.898 621.947 366.471C621.947 502.043 512.043 611.946 376.471 611.946C240.898 611.946 130.995 502.043 130.995 366.471C130.995 230.898 240.898 120.995 376.471 120.995Z"
                                            fill="#4D72D0" />
                                    </svg>

                                    <img src="{{asset('assets/frontend/images/doctors2.png')}}" class="img-fluid animated-hero" alt="hero" />

                                    <ul class="main-slider-social">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="banner">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">
                                <!-- Slider Title -->
                                <div class="main-title">
                                    <span>We are here for you</span>
                                    <h1>
                                        What Makes Us Better, Makes You Better.
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu lacus ex.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                        ipsum dolor sit amet.
                                    </p>
                                    <a href="#" class="btn btn-primary">Make Appointment</a>
                                    <a href="https://www.youtube.com/watch?v=pBFQdxA-apI"
                                        class="play-btn popup-youtube"><i class="fas fa-play"></i></a>
                                </div>
                                <!--//End Slider Title -->
                            </div>
                            <div class="col-12 col-md-6 col-lg-7 d-flex align-items-end">
                                <div class="anim-container flex-fill">
                                    <svg class="circle-svg" width="100%" height="100%" viewBox="0 0 754 733" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="big-circle" opacity="0.071" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M377 29C563.12 29 714 179.879 714 366C714 552.119 563.12 702.999 377 702.999C190.88 702.999 40 552.119 40 366C40 179.879 190.88 29 377 29Z"
                                            fill="#4D72D0" />
                                        <path class="small-circle" opacity="0.051" fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M376.471 120.995C512.043 120.995 621.947 230.898 621.947 366.471C621.947 502.043 512.043 611.946 376.471 611.946C240.898 611.946 130.995 502.043 130.995 366.471C130.995 230.898 240.898 120.995 376.471 120.995Z"
                                            fill="#4D72D0" />
                                    </svg>

                                    <img src="{{asset('assets/frontend/images/doctors.png')}}" class="img-fluid animated-hero" alt="hero" />

                                    <ul class="main-slider-social">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // end .container -->
        </div>
        <!-- // end .bannerwrap -->
    </header>


      

    <!--//End Header -->
    <!--==================== About Section ====================-->
    <section class="about-section">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                <div id='crmWebToEntityForm' class='zcwf_lblLeft crmWebToEntityForm'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
   <form action='https://crm.zoho.in/crm/WebToLeadForm' name=WebToLeads110084000002255001 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory110084000002255001()' accept-charset='UTF-8'>
 <input type='text' style='display:none;' name='xnQsjsdp' value='b43efcd5d07598c5a2dec7cbbd9f0a4a786812c2b0d51f01c98e1840ea0d0c3a'></input> 
 <input type='hidden' name='zc_gad' id='zc_gad' value=''></input> 
 <input type='text' style='display:none;' name='xmIwtLD' value='16076923e650cb768373cb673d8a208c6190d38709290526444d7b8822569020'></input> 
 <input type='text'  style='display:none;' name='actionType' value='TGVhZHM='></input>
 <input type='text' style='display:none;' name='returnURL' value='https://glamyohealth.in' > </input>
     <!-- Do not remove this code. -->
     <input type='text' style='display:none;' id='ldeskuid' name='ldeskuid'></input>
     <input type='text' style='display:none;' id='LDTuvid' name='LDTuvid'></input>
     <!-- Do not remove this code. -->
     <input type='text' style='display:none;' id='LEADCF3' name='LEADCF3' maxlength='255' value='Website'></input>
<input type='text' style='display:none;' id='LEADCF2' name='LEADCF2' maxlength='255' value='Direct'></input>
<select class='zcwf_col_fld_slt' style='display:none;' id='Lead_Status' name='Lead Status'  >
            <option value='-None-'>-None-</option>
        <option selected value='New&#x20;Lead'>New Lead</option>
            <option value='Churn'>Churn</option>
            <option value='Cold&#x20;Lead'>Cold Lead</option>
            <option value='Hot&#x20;Lead'>Hot Lead</option>
            <option value='OPD&#x20;Scheduled'>OPD Scheduled</option>
            <option value='Surgery&#x20;Scheduled'>Surgery Scheduled</option>
            <option value='Surgery&#x20;Lost'>Surgery Lost</option>
            <option value='DNP&#x20;Exhausted'>DNP Exhausted</option>
            <option value='DNP'>DNP</option>
            <option value='Surgery&#x20;Done'>Surgery Done</option>
            <option value='JUNK&#x20;Leads'>JUNK Leads</option>
            <option value='Not&#x20;Int&#x20;&#x2f;&#x20;Closed'>Not Int &#x2f; Closed</option>
            <option value='Cross&#x20;BD'>Cross BD</option>
            <option value='Covid'>Covid</option>
        </select>
                    <ul class="booking-form">
                        <li><input type="text" class="form-control" id='Last_Name' name='Last Name' placeholder="Enter Your Full Name" /><i
                                class="fas fa-user"></i></li>
                        <li><div class="input-group mb-3">
                     <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1">+91</span>
                        </div>
                            <input type="text" class="form-control numeric" id='Mobile' name='Mobile' placeholder="Enter Contact Number" /><i
                                class="fas fa-phone"></i></div></li>
                        <li>
                            <select class="custom-select form-control" id='LEADCF1' name='LEADCF1'>
                                <option>Select a Treatment</option>
                                <option value="Piles">Piles</option><option value="Hernia">Hernia</option><option value="Gallstone">Gallstone</option><option value="Gynaecomastia">Gynaecomastia</option><option value="Circumcision">Circumcision</option><option value="Hydrocele">Hydrocele</option><option value="Varicocele">Varicocele</option><option value="Prostate">Prostate</option><option value="Lasik">Lasik</option><option value="Botox">Botox</option><option value="Laser Hair Removal">Laser Hair Removal</option><option value="IVF">IVF</option><option value="Rhinoplasty">Rhinoplasty</option><option value="Abdominoplasty">Abdominoplasty</option><option value="Blephroplasty">Blephroplasty</option><option value="Kidney Stone">Kidney Stone</option><option value="Varicose Veins">Varicose Veins</option><option value="Fissure">Fissure</option><option value="Fistula">Fistula</option><option value="Pilonidal sinus">Pilonidal sinus</option><option value="Knee replacement">Knee replacement</option></select>
                        </li>


                        <li class="form-btn">
                            <input type='submit' value="Submit" title='Submit' id='formsubmit'  class="btn btn-success"/>
                        </li>
                        <script type='text/javascript' id='VisitorTracking'>var $zoho= $zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:'a7d96324e5322fcf345f7de5e869f775b070c7c98a133937297cfdd8bfe68800dc3ceaa8a0471058a7d8490ca5d56212', values:{},ready:function(){$zoho.salesiq.floatbutton.visible('hide');}};var d=document;s=d.createElement('script');s.type='text/javascript';s.id='zsiqscript';s.defer=true;s.src='https://salesiq.zoho.in/widget';t=d.getElementsByTagName('script')[0];t.parentNode.insertBefore(s,t);function trackVisitor(){try{if($zoho){var LDTuvidObj = document.forms['WebToLeads110084000002255001']['LDTuvid'];if(LDTuvidObj){LDTuvidObj.value = $zoho.salesiq.visitor.uniqueid();}var firstnameObj = document.forms['WebToLeads110084000002255001']['First Name'];if(firstnameObj){name = firstnameObj.value +' '+name;}$zoho.salesiq.visitor.name(name);var emailObj = document.forms['WebToLeads110084000002255001']['Email'];if(emailObj){email = emailObj.value;$zoho.salesiq.visitor.email(email);}}} catch(e){}}</script>
                        <!-- Do not remove this --- Analytics Tracking code starts --><script id='wf_anal' src='https://crm.zohopublic.in/crm/WebFormAnalyticsServeServlet?rid=16076923e650cb768373cb673d8a208c6190d38709290526444d7b8822569020gidb43efcd5d07598c5a2dec7cbbd9f0a4a786812c2b0d51f01c98e1840ea0d0c3agid534cb20477b1d28b5f45f7cc241888c5gid4ee3a7e9ace6ab1be7c541b329164307'></script><!-- Do not remove this --- Analytics Tracking code ends. --></form></div>
                    </ul>
                </div>
            </div>
            
            <section class="counter">
        <div class="container container-custom">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="counter-block">
                        <img src="{{asset('assets/frontend/images/counter2.png')}}" alt="#">
                        <div class="counter-text">
                            <h2>12,500+</h2>
                            <p>Happy Patients</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="counter-block">
                        <img src="{{asset('assets/frontend/images/counter1.png')}}" alt="#">
                        <div class="counter-text">
                            <h2>200+</h2>
                            <p>Doctors</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="counter-block">
                        <img src="{{asset('assets/frontend/images/counter3.png')}}" alt="#">
                        <div class="counter-text">
                            <h2>100+</h2>
                            <p>Hospitals</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="counter-block" style="border-right: none">
                        <img src="{{asset('assets/frontend/images/counter3.png')}}" alt="#">
                        <div class="counter-text">
                            <h2>9+</h2>
                            <p>Cities</p>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="about-video_block">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <a href="https://www.youtube.com/watch?v=pBFQdxA-apI"
                                    class="video-play-img popup-youtube">
                                    <img src="images/about-img.png" class="img-fluid w-100" alt="#" />
                                    <div class="video-play-btn">
                                        <div class="video-play-icon">
                                            <i class="fas fa-play"></i>
                                        </div>
                                        <span>PLAY VIDEO</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="video-play-text">
                                    <h2>About Glamyo Health</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation.
                                    </p>
                                    <p>
                                        Sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostru
                                        <a href="#">Readmore</a>
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="facilities blue">
                                                <h3>9540+</h3>
                                                <span>Happy Patients</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="facilities green">
                                                <h3>215+</h3>
                                                <span>Expert Doctors</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="facilities yellow">
                                                <h3>115+</h3>
                                                <span>Hospitals</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="facilities gray">
                                                <h3>9+</h3>
                                                <span>Cities</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section> 
    <!--//End About Section -->

    
    <!-- .et_pb_section -->
            <div class="container-custom et_pb_section et_pb_section_3 et_section_regular" >
                
                 <div class="et_pb_row et_pb_row_3">
            <div class="et_pb_column et_pb_column_4_4 et_pb_column_4  et_pb_css_mix_blend_mode_passthrough et-last-child">
            
            
            <div class="et_pb_module et_pb_text et_pb_text_3  et_pb_text_align_left et_pb_bg_layout_light">
            
            
            <div class="et_pb_text_inner"><h2>Glamyo Health</h2></div>
        </div> <!-- .et_pb_text -->
        </div> <!-- .et_pb_column -->
            
            
        </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_4">
            <div class="et_pb_column et_pb_column_3_5 et_pb_column_5  et_pb_css_mix_blend_mode_passthrough">
            
            
            <div class="et_pb_module et_pb_text et_pb_text_4  et_pb_text_align_left et_pb_bg_layout_light">
            
            
            <div class="et_pb_text_inner"><h3>Talk to our Expert Surgeons.</h3>
<p>Get the most advanced surgical procedures done through our renowned surgeons.</p></div>
        </div> <!-- .et_pb_text -->
        </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_2_5 et_pb_column_6  et_pb_css_mix_blend_mode_passthrough et-last-child">
            
            
            <div class="et_pb_module et_pb_text et_pb_text_5  et_pb_text_align_right et_pb_bg_layout_light">
            
            
            <div class="et_pb_text_inner"><h3><a href="index.html">EXPLORE <strong><span style="color: #00ccff;">&gt;</span></strong></a></h3></div>
        </div> <!-- .et_pb_text -->
        </div> <!-- .et_pb_column -->
            
            
        </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_5 et_pb_gutters1">
            <div class="et_pb_column et_pb_column_4_4 et_pb_column_7 accordion  et_pb_css_mix_blend_mode_passthrough et-last-child">
            
            
            <div class="et_pb_module et_pb_blurb et_pb_blurb_0 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="tel:+919711144230">Sports Orthopedics</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Active lifestyle demands comprehensive care. Work-related niggle, sports injury, relieving pain. Our world-class doctors get you back to your active life.&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p style="padding-top: 6vw;">Active lifestyle demands comprehensive care. Work-related niggle, sports injury, relieving pain. Our world-class doctors get you back to your active life.</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_1 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.glamyohealth.in/piles/">Laser Piles Treatment</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;At Glamyo care, our expert doctors will take care of piles in a painless one day laser procedure.&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p style="padding-top: 6vw;">At Glamyo care, our expert doctors will take care of piles in a painless one day laser procedure.</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div> 
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_2 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.glamyohealth.in/hernia/">Hernia Treatment</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Minimally invasive painless surgery. No scars, no stitches. Recovery within a week&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p style="padding-top: 6vw;">Minimally invasive painless surgery. No scars, no stitches. Recovery within a week</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_3 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.glamyohealth.in/gall-bladder/">Gallstone Treatment</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Advanced Mediport Procedure. Painless 30 mins Procedure. No Stitches, No Scars. Within a Week Recovery&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p style="padding-top: 6vw;">Advanced Mediport Procedure. Painless 30 mins Procedure. No Stitches, No Scars. Within a Week Recovery</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_4 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.glamyohealth.in/varicose-veins/">Varicose Veins</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Get Rid of the Pain of Varicose Veins. Painless and bloodless treatment. No cuts.&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p style="padding-top: 6vw;">Get Rid of the Pain of Varicose Veins. Painless and bloodless treatment. No cuts.</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb -->
        </div> <!-- .et_pb_column -->
            
            
        </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_6 et_pb_gutters1">
            <div class="et_pb_column et_pb_column_4_4 et_pb_column_8 accordion  et_pb_css_mix_blend_mode_passthrough et-last-child">
            
            
            <div class="et_pb_module et_pb_blurb et_pb_blurb_5 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="tel:+919711144230">Sports Orthopedics</a></h4>
                    <div class="et_pb_blurb_description"><p style="padding-top: 6vw;">Active lifestyle demands comprehensive care. Work-related niggle, sports injury, relieving pain. Our world-class doctors get you back to your active life.</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_6 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.glamyohealth.in/piles/">Laser Piles Treatment</a></h4>
                    <div class="et_pb_blurb_description"><p style="padding-top: 6vw;">At Glamyo care, our expert doctors will take care of piles in a painless one day laser procedure.</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_7 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.glamyohealth.in/hernia/">Hernia Treatment</a></h4>
                    <div class="et_pb_blurb_description"><p style="padding-top: 6vw;">Minimally invasive painless surgery. No scars, no stitches. Recovery within a week.</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_8 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.glamyohealth.in/gall-bladder/">Gall Stone Treatment</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Advanced Mediport Procedure. Painless 30 mins Procedure. No Stitches, No Scars.\u00a0Within a Week Recovery.&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Advanced Mediport Procedure. Painless 30 mins Procedure. No Stitches, No Scars. Within a Week Recovery.&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p style="padding-top: 6vw;">Advanced Mediport Procedure. Painless 30 mins Procedure. No Stitches, No Scars. Within a Week Recovery.</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_9 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.glamyohealth.in/varicose-veins/">Varicose Veins</a></h4>
                    <div class="et_pb_blurb_description"><p style="padding-top: 6vw;">Get Rid of the Pain of Varicose Veins. Painless and bloodless treatment. No cuts.</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb -->
        </div> <!-- .et_pb_column -->
            
            
        </div> <!-- .et_pb_row -->
            
            
        </div> <!-- .et_pb_section -->
        <div class="container-custom et_pb_section et_pb_section_4 et_section_regular" >
            
            
            
            
                <div class="et_pb_row et_pb_row_7">
            <div class="et_pb_column et_pb_column_4_4 et_pb_column_9  et_pb_css_mix_blend_mode_passthrough et-last-child">
            
            
            <div class="et_pb_module et_pb_text et_pb_text_6  et_pb_text_align_left et_pb_bg_layout_light">
            
            
            <div class="et_pb_text_inner"><h2>Glamyo Beauty</h2></div>
        </div> <!-- .et_pb_text -->
        </div> <!-- .et_pb_column -->
            
            
        </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_8">
            <div class="et_pb_column et_pb_column_3_5 et_pb_column_10  et_pb_css_mix_blend_mode_passthrough">
            
            
            <div class="et_pb_module et_pb_text et_pb_text_7  et_pb_text_align_left et_pb_bg_layout_light">
            
            
            <div class="et_pb_text_inner"><h3>Celebrate the beauty you deserve.</h3>
<p>Choose from our extensive array of body procedures performed by attentive compassionate cosmetic surgeons and cosmetologists.</div>
        </div> <!-- .et_pb_text -->
        </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_2_5 et_pb_column_11  et_pb_css_mix_blend_mode_passthrough et-last-child">
            
            
            <div class="et_pb_module et_pb_text et_pb_text_8  et_pb_text_align_right et_pb_bg_layout_light">
            
            
            <div class="et_pb_text_inner"><h3><a href="cosmetic-procedures/index.html">EXPLORE</a> <strong><span style="color: #00ccff;">&gt;</span></strong></h3></div>
        </div> <!-- .et_pb_text -->
        </div> <!-- .et_pb_column -->
            
            
        </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_9 et_pb_gutters1">
            <div class="et_pb_column et_pb_column_4_4 et_pb_column_12 accordion  et_pb_css_mix_blend_mode_passthrough et-last-child">
            
            
            <div class="et_pb_module et_pb_blurb et_pb_blurb_10 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.glamyohealth.in/liposuction-3/">Liposuction</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Get the right body contour by removing excess fat deposits.&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p style="padding-top: 6vw;">Get the right body contour by removing excess fat deposits.</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_11 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="tel:+919711144230">Hair Transplant</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Choose the Most Advanced &amp; Safe Hair Transplant Procedure&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p style="padding-top: 6vw;">Choose the Most Advanced &amp; Safe Hair Transplant Procedure</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_12 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.glamyohealth.in/cool-sculpting/">Cool Sculpting®</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Freeze your extra fat using non-invasive &amp; non-surgical US FDA approved technology.&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Freeze your extra fat using non-invasive &amp; non-surgical US FDA approved technology.&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b918448478281/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p style="padding-top: 6vw;">Freeze your extra fat using non-invasive &amp; non-surgical US FDA approved technology.</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_13 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.glamyohealth.in/peels/">Peels</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Get smooth, acne free skin with non invasive skin glow treatments at Glamyo.&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Get smooth, acne free skin with non invasive skin glow treatments at Glamyo.&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b918448478281/__TALK.html TO US&lt;\/a&gt;&lt;br \/&gt;&lt;\/p&gt;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p style="padding-top: 6vw;">Get smooth, acne free skin with non invasive skin glow treatments at Glamyo.</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_14 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.glamyohealth.in/gynaecomastia/">Gynecomastia</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Advanced technique to instantly reduce the size of male breasts.&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Advanced technique to instantly reduce the size of male breasts.&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b918448478281/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p style="padding-top: 6vw;">Advanced technique to instantly reduce the size of male breasts.</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb -->
        </div> <!-- .et_pb_column -->
            
            
        </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_10 et_pb_gutters1">
            <div class="et_pb_column et_pb_column_4_4 et_pb_column_13 accordion  et_pb_css_mix_blend_mode_passthrough et-last-child">
            
            
            <div class="et_pb_module et_pb_blurb et_pb_blurb_15 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="tel:+918448478281">Liposuction</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Get the right body contour by removing excess fat deposits.&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;phone&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;&lt;span style=\&quot;font-weight: 400;\&quot;&gt;Get the right body contour by removing excess fat deposits.&lt;\/span&gt;&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-phone-hidden="true"><p style="padding-top: 6vw;">Get the right body contour by removing excess fat deposits.</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_16 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="tel:+919711144230">Hair Transplant</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Choose the Most Advanced &amp; Safe Hair Transplant Procedure&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Choose the Most Advanced &amp; Safe Hair Transplant Procedure&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p style="padding-top: 6vw;">Choose the Most Advanced &amp; Safe Hair Transplant Procedure</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_17 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.glamyohealth.in/cool-sculpting/">CoolSculpting®</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p&gt;&lt;span style=\&quot;font-weight: 400;\&quot;&gt;Freeze your extra fat using &lt;\/span&gt;&lt;span style=\&quot;font-weight: 400;\&quot;&gt;non-invasive &amp; non-surgical US FDA approved technology.&lt;\/span&gt;&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&lt;p&gt;&lt;span style=\&quot;font-weight: 400;\&quot;&gt;Freeze your extra fat using &lt;\/span&gt;&lt;span style=\&quot;font-weight: 400;\&quot;&gt;non-invasive &amp; non-surgical US FDA approved technology.&lt;\/span&gt;&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p><span style="font-weight: 400;">Freeze your extra fat using </span><span style="font-weight: 400;">non-invasive &amp; non-surgical US FDA approved technology.</span></p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_18 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.glamyohealth.in/peels/">Peels</a></h4>
                    <div class="et_pb_blurb_description"><p style="padding-top: 6vw;">Get smooth, acne free skin with non invasive skin glow treatments at Glamyo.</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_19 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.glamyohealth.in/gynaecomastia/">Gynaecomastia</a></h4>
                    <div class="et_pb_blurb_description"><p style="padding-top: 6vw;"><span style="font-weight: 400;">Advanced technique to instantly reduce the size of male breasts.</span></p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb -->
        </div> <!-- .et_pb_column -->
            
            
        </div> <!-- .et_pb_row -->
            
            
        </div> <!-- .et_pb_section -->
        <div class="container-custom et_pb_section et_pb_section_5 et_section_regular" >
            
            
            
            
                <div class="et_pb_row et_pb_row_11">
            <div class="et_pb_column et_pb_column_4_4 et_pb_column_14  et_pb_css_mix_blend_mode_passthrough et-last-child">
            
            
            <div class="et_pb_module et_pb_text et_pb_text_9  et_pb_text_align_left et_pb_bg_layout_light">
            
            
            <div class="et_pb_text_inner"><h2>Glamyo Care</h2></div>
        </div> <!-- .et_pb_text -->
        </div> <!-- .et_pb_column -->
            
            
        </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_12">
            <div class="et_pb_column et_pb_column_3_5 et_pb_column_15  et_pb_css_mix_blend_mode_passthrough">
            
            
            <div class="et_pb_module et_pb_text et_pb_text_10  et_pb_text_align_left et_pb_bg_layout_light">
            
            
            <div class="et_pb_text_inner"><h3>Take care of your Health.</h3>
<p>Talk to our General Physicians for Diagnostic Tests and Health Checkup.</p></div>
        </div> <!-- .et_pb_text -->
        </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_2_5 et_pb_column_16  et_pb_css_mix_blend_mode_passthrough et-last-child">
            
            
            <div class="et_pb_module et_pb_text et_pb_text_11  et_pb_text_align_right et_pb_bg_layout_light">
            
            
            <div class="et_pb_text_inner"><h3><a href="cosmetic-procedures/index.html">EXPLORE</a> <strong><span style="color: #00ccff;">&gt;</span></strong></h3></div>
        </div> <!-- .et_pb_text -->
        </div> <!-- .et_pb_column -->
            
            
        </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_13 et_pb_gutters1">
            <div class="et_pb_column et_pb_column_4_4 et_pb_column_17 accordion  et_pb_css_mix_blend_mode_passthrough et-last-child">
            
            
            <div class="et_pb_module et_pb_blurb et_pb_blurb_20 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.glamyohealth.in/covid-19/">Covid-19 Testing</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Stay assured with Glamyo&#8217;s Covid-19 tests.&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p style="padding-top: 6vw;">Stay assured with Glamyo&#8217;s Covid-19 tests.</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_21 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.shop.glamyohealth.in/">Masks & Sanitizers</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;We supply personal safety products like Masks, Sanitizers, Gloves, IR Thermometer etc. at your doorstep&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p style="padding-top: 6vw;">We supply personal safety products like Masks, Sanitizers, Gloves, IR Thermometer etc. at your doorstep</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_22 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="tel:+919711144230">Online Consultation</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;&lt;span&gt;Book an online consultation with our specialists from the comfort of your home.&lt;\/span&gt;&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p style="padding-top: 6vw;"><span>Book an online consultation with our specialists from the comfort of your home.</span></p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_23 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="tel:+919711144230">General Health Checkup</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p&gt;&lt;span style=\&quot;font-weight: 400;\&quot;&gt;Book an appointment with our Doctors for all your medical needs.&lt;\/span&gt;&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p><span style="font-weight: 400;">Book an appointment with our Doctors for all your medical needs.</span></p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb -->
        </div> <!-- .et_pb_column -->
            
            
        </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_14 et_pb_gutters1">
            <div class="et_pb_column et_pb_column_4_4 et_pb_column_18 accordion  et_pb_css_mix_blend_mode_passthrough et-last-child">
            
            
            <div class="et_pb_module et_pb_blurb et_pb_blurb_24 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.glamyohealth.in/covid-19/">Covid-19 Tests</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Stay assured with Glamyo&#8217;s Covid-19 tests.&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;&lt;span style=\&quot;font-weight: 400;\&quot;&gt;Get the right body contour by removing excess fat deposits.&lt;\/span&gt;&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;phone&quot;:&quot;&lt;p style=\&quot;padding-top: 6vw;\&quot;&gt;Stay assured with Glamyo&#039;s Covid-19 tests.&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true" data-et-multi-view-load-phone-hidden="true"><p style="padding-top: 6vw;">Stay assured with Glamyo&#8217;s Covid-19 tests.</p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_25 accordian-item et_clickable et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="tel:9711144230">General Health Checkup</a></h4>
                    <div class="et_pb_blurb_description" data-et-multi-view="{&quot;schema&quot;:{&quot;content&quot;:{&quot;desktop&quot;:&quot;&lt;p&gt;&lt;span style=\&quot;font-weight: 400;\&quot;&gt;Book an appointment with our Doctors for all your medical needs.&lt;\/span&gt;&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_9711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;tablet&quot;:&quot;&lt;p&gt;&lt;span style=\&quot;font-weight: 400;\&quot;&gt;Book an appointment with our Doctors for all your medical needs.&lt;\/span&gt;&lt;\/p&gt;\n&lt;p&gt;&lt;a class=\&quot;Talk-Btn\&quot; href=_tel_%2b919711144230/__TALK.html TO US&lt;\/a&gt;&lt;\/p&gt;&quot;}},&quot;slug&quot;:&quot;et_pb_blurb&quot;}" data-et-multi-view-load-tablet-hidden="true"><p><span style="font-weight: 400;">Book an appointment with our Doctors for all your medical needs.</span></p>
<p><a class="Talk-Btn" href="9711144230.html">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_26 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="tel:+919711144230">Online Consultation</a></h4>
                    <div class="et_pb_blurb_description"><p><span style="font-weight: 400;">Book an online consultation with our specialists from the comfort of your home.</span></p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb --><div class="et_pb_module et_pb_blurb et_pb_blurb_27 accordian-item et_pb_section_parallax_hover  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
            
            
            <div class="et_pb_blurb_content">
                
                <div class="et_pb_blurb_container">
                    <h4 class="et_pb_module_header"><a href="https://www.shop.glamyohealth.in/">Masks & Sanitizers</a></h4>
                    <div class="et_pb_blurb_description"><p style="padding-top: 6vw;"><span style="font-weight: 400;">We supply personal safety products like Masks, Sanitizers, Gloves, IR Thermometer etc. at your doorstep</span></p>
<p><a class="Talk-Btn" href="tel:+919711144230">TALK TO US</a></p></div>
                </div>
            </div> <!-- .et_pb_blurb_content -->
        </div> <!-- .et_pb_blurb -->
        </div> <!-- .et_pb_column -->
            
            
        </div> <!-- .et_pb_row -->
            
            
        </div> <!-- .et_pb_section -->



        <!----Appointment-->

        <!-- <section class="space background-bg4" style="margin-top: 60px;">
            <div class="container container-custom">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="appointment-form_wrap">
                            <div class="heading-style1">
                                <span>Online Booking</span>
                                <h2>Make an Appointment</h2>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-cutom">
                                            <input type="email" class="form-control form-custom" placeholder="Enter Your Name">
                                            <i class="far fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-cutom">
                                            <input type="number" class="form-control form-custom" placeholder="Date and time">
                                            <i class="far fa-clock"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-cutom">
                                            <input type="number" class="form-control form-custom" placeholder="Enter phone number">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-cutom">
                                            <input type="text" class="form-control form-custom" placeholder="Select location">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-cutom">
                                            <input type="text" class="form-control form-custom" placeholder="Choose department">
                                            <i class="far fa-circle"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-cutom">
                                            <input type="text" class="form-control form-custom" placeholder="Select doctor">
                                            <i class="far fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-cutom">
                                            <label for="exampleFormControlTextarea1">Your Message</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="#" class="btn btn-success">BOOK NOW</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="why-choose_block">
                            <div class="heading-style1 mb-0">
                                <span>Why Us</span>
                                <h2>Why Choose Us</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing <br> elit, sed do eius mod tempor inc ididuntut</p>
                                <hr>
                            </div>
                            <div class="whychoose-wrap">
                                <img src="images/icon1.png" alt="#">
                                <div class="whychoose-text_block">
                                    <h4>Fastest Growing Clinic</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, su</p>
                                </div>
                            </div>
                            <div class="whychoose-wrap">
                                <img src="images/icon2.png" alt="#">
                                <div class="whychoose-text_block">
                                    <h4>Free Pick & Drop Service</h4>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitati</p>
                                </div>
                            </div>
                            <div class="whychoose-wrap">
                                <img src="images/icon3.png" alt="#">
                                <div class="whychoose-text_block">
                                    <h4>24/7 Working Time</h4>
                                    <p>Duis aute irure dolor in repr ehenderit in voluptate.</p>
                                </div>
                            </div>
                            <div class="whychoose-wrap mb-0">
                                <img src="images/icon4.png" alt="#">
                                <div class="whychoose-text_block">
                                    <h4>5 Star Customer Rating </h4>
                                    <p>Excepteur sint occaecat cupidatat non proident,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

  
    <!--==================== Why Choose ====================-->
    <!-- <section class="space why-choose-block">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <h2>
                        Why Choose<br /> Glamyo Care?
                    </h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="why-choose_list why-choose_list-br">
                                <i class="fas fa-check"></i>
                                <div class="why-choose_list-content">
                                    <h5>Advanced Care</h5>
                                    <span>Lorem ipsum dolor sit</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-choose_list why-choose_list-br">
                                <i class="fas fa-check"></i>
                                <div class="why-choose_list-content">
                                    <h5>Online Medicine</h5>
                                    <span>Lorem ipsum dolor sit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="why-choose_list why-choose_list-br">
                                <i class="fas fa-check"></i>
                                <div class="why-choose_list-content">
                                    <h5>Medical & Surgical</h5>
                                    <span>Lorem ipsum dolor sit</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-choose_list why-choose_list-br">
                                <i class="fas fa-check"></i>
                                <div class="why-choose_list-content">
                                    <h5>Lab Tests</h5>
                                    <span>Lorem ipsum dolor sit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" class="btn btn-dark" tabindex="0">MAKE APPOINTMENT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 offset-lg-1">
                    <div class="why-choose_right">
                        <h2>
                            Emergency?<br /> Contact Us.
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br /> sed do eius mod tempor
                            incididunt ut labore et dolore<br /> magna aliqua. Ut enim ad minim veniam
                        </p>
                        <div class="why-choose_list">
                            <div class="choose-icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>

                            <div class="why-choose_list-content">
                                <span>Call us now</span>
                                <h3>+91 97111 44230</h3>
                            </div>
                        </div>
                        <div class="why-choose_list">
                            <div class="choose-icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="why-choose_list-content">
                                <span>Mail us</span>
                                <h3>info@glamyohealth.in</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--//End Why Choose -->
    <!--==================== News ====================-->
    <!-- <section class="space">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="news-img-block">
                        <img src="images/play-img.png" class="img-fluid w-100" alt="#" />
                        <a class="video-play-button popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                            <span></span>
                        </a>
                        <div id="video-overlay" class="video-overlay">
                            <a class="video-overlay-close">&times;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="video-play-text">
                        <span>Who we are -----</span>
                        <h2>We Have Advanced Laser Technology</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                        <hr />
                        <div class="newsletter-subscribe">
                            <h4>Subscribe to our Newsletter</h4>
                            <div class="newsletter-subscribe_form">
                                <input type="text" class="form-control" placeholder="Enter Your Email" />
                                <a href="#"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--//End News -->

    <section class="space why-choose-block" style>
        <div class="container container-custom">
        <div class="row">
        <div class="col-md-12 col-lg-5">
        <h2>
        Why Choose<br> Glamyo Health
        </h2>
        <hr>
        <div class="row">
        <div class="col-md-6">
        <div class="why-choose_list why-choose_list-br">
        <i class="fas fa-check"></i>
        <div class="why-choose_list-content">
        <h5>Advanced Care</h5>
        <span>Lorem ipsum dolor sit</span>
        </div>
        </div>
        </div>
        <div class="col-md-6">
        <div class="why-choose_list why-choose_list-br">
        <i class="fas fa-check"></i>
        <div class="why-choose_list-content">
        <h5>Online Consultation</h5>
        <span>Lorem ipsum dolor sit</span>
        </div>
        </div>
        </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-md-6">
        <div class="why-choose_list why-choose_list-br">
        <i class="fas fa-check"></i>
        <div class="why-choose_list-content">
        <h5>Medical &amp; Surgical</h5>
        <span>Lorem ipsum dolor sit</span>
        </div>
        </div>
        </div>
        <div class="col-md-6">
        <div class="why-choose_list why-choose_list-br">
        <i class="fas fa-check"></i>
        <div class="why-choose_list-content">
        <h5>Lab Tests</h5>
        <span>Lorem ipsum dolor sit</span>
        </div>
        </div>
        </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-md-12">
        <a href="#" class="btn btn-dark" tabindex="0">MAKE APPOINTMENT</a>
        </div>
        </div>
        </div>
        <div class="col-md-12 col-lg-6 offset-lg-1">
        <div class="why-choose_right">
        <h2>
        Covid Symptoms?<br> Contact Us
        </h2>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eius mod tempor
        incididunt ut labore et dolore<br> magna aliqua. Ut enim ad minim veniam
        </p>
        <div class="why-choose_list">
        <div class="choose-icon">
        <i class="fas fa-phone-volume"></i>
        </div>
        <div class="why-choose_list-content">
        <span>Call us now</span>
       <a href="tel:+91 97111 44 230" style="color: #fff;"><h3>+91 97111 44 230</h3></a> 
        </div>
        </div>
        <div class="why-choose_list">
        <div class="choose-icon">
        <i class="fas fa-envelope-open-text"></i>
        </div>
        <div class="why-choose_list-content">
        <span>Mail us</span>
        <h3>info@glamyo.in</h3>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>

    <!--==================== Our Team ====================-->
    <section class="our-team">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="sub-title_center">
                        <span>---- Our Team ----</span>
                        <h2>Our Dedicated Doctors</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="doctors-slider">
                        <div class="team-img_block yellow">
                            <div class="team-img-socila-block">
                                <img src="{{asset('assets/frontend/images/doc2.png')}}" class="img-fluid" alt="Dr. Gaurav Bansal" />
                                <!-- <ul class="social-icons">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul> -->
                            </div>
                            <h4>Dr. Gaurav Bansal</h4>
                            <p>Laproscopic Surgeon</p>
                        </div>
                        <div class="team-img_block green">
                            <div class="team-img-socila-block">
                                <img src="{{asset('assets/frontend/images/dr.kapil.png')}}" class="img-fluid" alt="Dr. Kapil Agarwal" />
                                <!-- <ul class="social-icons">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul> -->
                            </div>
                            <h4>Dr. Kapil Agarwal</h4>
                            <p>General Surgeon</p>
                        </div>
                        <div class="team-img_block blue">
                            <div class="team-img-socila-block">
                                <img src="{{asset('assets/frontend/images/Nadia-Zakhir.png')}}" class="img-fluid" alt="Dr. Nadia Zakhir" />
                                <!-- <ul class="social-icons">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul> -->
                            </div>
                            <h4>Dr. Nadia Zakhir</h4>
                            <p>Cosmetic Surgeon</p>
                        </div>
                        <div class="team-img_block yellow">
                            <div class="team-img-socila-block">
                                <img src="{{asset('assets/frontend/images/doc7.png')}}" class="img-fluid" alt="Dr. Jotinder Khanna" />
                                <!-- <ul class="social-icons">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul> -->
                            </div>
                            <h4>Dr. Jotinder Khanna</h4>
                            <p>Laser Surgeon</p>
                        </div>
                        <div class="team-img_block blue">
                            <div class="team-img-socila-block">
                                <img src="{{asset('assets/frontend/images/dr.nikunj.png')}}" class="img-fluid" alt="Dr. Nishant Chajjer" />
                                <!-- <ul class="social-icons">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul> -->
                            </div>
                            <h4>Dr. Nikunj Bansal</h4>
                            <p>General Surgeon</p>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                    <a href="our-doctors.php" class="btn btn-primary">View More</a></div>
                </div>
            </div>
        </div>
    </section>
    <!--//End Our Team -->

      <!--==================== Our Services ====================-->
      <!-- <section class="space light">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-style1">
                        <span>Our Services</span>
                        <h2>High Quality Services for You</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="service-slider">
                        <div class="service-block yellow">
                            <img src="images/service-icon1.png" alt="#">
                            <h3>Sports Orthopedics</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore </p>
                            <a href="#" class="btn btn-dark">READ MORE</a>
                            <div class="service-bg-icon">
                                <img src="images/services-bg1.png" class="img-fluid" alt="#">
                            </div>
                        </div>
                        <div class="service-block green">
                            <img src="images/service-icon2.png" alt="#" />
                            <h3>Laser Piles Treatment</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                                incididunt ut labore</p>
                            <a href="#" class="btn btn-dark">READ MORE</a>
                            <div class="service-bg-icon">
                                <img src="images/services-bg2.png" class="img-fluid" alt="#">
                            </div>
                        </div>
                        <div class="service-block blue">
                            <img src="images/service-icon3.png" alt="#" />
                            <h3>Hernia Treatment</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                                incididunt ut labore
                            </p>
                            <a href="#" class="btn btn-dark">READ MORE</a>
                            <div class="service-bg-icon">
                                <img src="images/services-bg3.png" class="img-fluid" alt="#">
                            </div>
                        </div>
                        <div class="service-block green">
                            <img src="images/service-icon3.png" alt="#" />
                            <h3>Gallstone Treatment</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                                incididunt ut labore
                            </p>
                            <a href="#" class="btn btn-dark">READ MORE</a>
                            <div class="service-bg-icon">
                                <img src="images/services-bg4.png" class="img-fluid" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center service-help_link">
                        Contact us for better help and services.
                        <a href="#">Let’s get started</a>
                    </p>
                </div>
            </div>
        </div>
    </section>  -->
    <!--//End Our Services -->
    <!--==================== Get a Consultant ====================-->
    <!-- <section class="bg-img3">
        <div class="container container-custom">
            <div class="row">
                <div class="col-lg-5 offset-lg-7">
                    <div class="consultant-content">
                        <h2>We Believe in a Healthier You</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                        <p>
                            Adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam,
                        </p>
                        <a href="#" class="btn btn-success">Get a Consultant</a>
                        <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="popup-youtube"> <i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--//End Get a Consultant -->
    <!--==================== Testimonials ====================-->
    <section class="testimonial pb-10">
        <div class="container container-custom">
            <div class="col-md-12">
                <div class="heading-style1">
                    <span>Testimonials</span>
                    <h2>What Our Clients Say</h2>
                </div>
                <div class="testi-slider">
                    <div class="testimonial-wrap">
                        <img src="{{asset('assets/frontend/images/9.jpg')}}" class="img-fluid testi-img-icon" alt="#" />
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p>I would like to recommend Glamyo for their excellence in pursuit of his Professional experience and the way they take care of their patients. Thank you so much for the immense support you gave us in times I needed the most. I would recommend them for their tremendous experience to diagnose and treat patients.
                        </p>
                        <span class="testi-name">Imran Ladiwala</span>
                        <div class="testi-styled-bg">
                            <img src="{{asset('assets/frontend/images/testi-side-img_05.png')}}" class="img-fluid" alt="#" />
                        </div>
                    </div>
                    <div class="testimonial-wrap quaternary-br-color">
                        <img src="{{asset('assets/frontend/images/11.jpg')}}" class="img-fluid testi-img-icon" alt="#" />
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p>It was an amazing experience. I have always hated visiting doctors in clinics and hospitals but this one was amazing, the ambiance is so good, it’s so well designed and well thought of. Smooth and efficient. But the cherry on the cake was the doctor herself.
I loved it!
                        </p>
                        <span class="testi-name">Pooja Sareen</span>
                        <div class="testi-styled-bg">
                            <img src="{{asset('assets/frontend/images/testi-side-img_05.png')}}" class="img-fluid" alt="#" />
                        </div>
                    </div>
                    <div class="testimonial-wrap">
                        <img src="{{asset('assets/frontend/images/testi-img1.jpg')}}" class="img-fluid testi-img-icon" alt="#" />
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation.
                        </p>
                        <span class="testi-name">Mary Jane (ceo)</span>
                        <div class="testi-styled-bg">
                            <img src="{{asset('assets/frontend/images/testi-side-img_05.png')}}" class="img-fluid" alt="#" />
                        </div>
                    </div>
                    <div class="testimonial-wrap quaternary-br-color">
                        <img src="{{asset('assets/frontend/images/testi-img2.jpg')}}" class="img-fluid testi-img-icon" alt="#" />
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <p><span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation.
                        </p>
                        <span class="testi-name">Mary Jane (ceo)</span>
                        <div class="testi-styled-bg">
                            <img src="{{asset('assets/frontend/images/testi-side-img_05.png')}}" class="img-fluid" alt="#" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//End Testimonials -->
    <!--==================== Blog ====================-->
    <!-- <section class="space">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="sub-title_center">
                        <span><i>---- Blog ----</i></span>
                        <h2>Latest News & Events</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-wrap">
                        <div class="blog-row-block">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="blog-img">
                                        <img src="images/blog-img1.jpg" class="img-fluid" alt="#" />
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="blog-content">
                                        <span>January 12 2019 | By Admin</span>
                                        <h3>
                                            Finding meaning in the intersection <br /> between marriage and medicine...
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex align-items-center">
                                    <div class="blog-read-more">
                                        <p><i class="far fa-eye"></i>233 <span>|</span> <i class="far fa-comment"></i>33
                                        </p>
                                        <a href="#" class="btn btn-primary">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-row-block">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="blog-img">
                                        <img src="images/blog-img2.jpg" class="img-fluid" alt="#" />
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="blog-content">
                                        <span>January 12 2019 | By Admin</span>
                                        <h3>
                                            Telemedicine overprescribes antib iotics:<br /> Are you really receiving...
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex align-items-center">
                                    <div class="blog-read-more">
                                        <p><i class="far fa-eye"></i>233 <span>|</span> <i class="far fa-comment"></i>33
                                        </p>
                                        <a href="#" class="btn btn-primary">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-row-block">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="blog-img">
                                        <img src="images/blog-img3.jpg" class="img-fluid" alt="#" />
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="blog-content">
                                        <span>January 12 2019 | By Admin</span>
                                        <h3>
                                            23-year-old woman with 2 weeks of painful <br /> lumps on her legs and..
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex align-items-center">
                                    <div class="blog-read-more">
                                        <p><i class="far fa-eye"></i>233 <span>|</span> <i class="far fa-comment"></i>33
                                        </p>
                                        <a href="#" class="btn btn-primary">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-row-block">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="blog-img">
                                        <img src="images/blog-img4.jpg" class="img-fluid" alt="#" />
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="blog-content">
                                        <span>January 12 2019 | By Admin</span>
                                        <h3>
                                            Keep insulting doctors, and good luck <br /> finding a physician in 10 days...
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex align-items-center">
                                    <div class="blog-read-more">
                                        <p><i class="far fa-eye"></i>233 <span>|</span> <i class="far fa-comment"></i>33
                                        </p>
                                        <a href="#" class="btn btn-primary">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-5">
                        <a href="#" class="btn btn-outline-primary">View All Blogs</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <div class="container">
    <div class="row space">
                <div class="col-md-4">
                    <div class="service-thumbnail d-flex flex-fill">
                        <img src="{{asset('assets/frontend/images/service-thumbnail01.png')}}" class="img-fluid" alt="#" />
                        <div class="service-thumbnail_text">
                            <h4>Specialised Service</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-thumbnail d-flex flex-fill">
                        <img src="{{asset('assets/frontend/images/service-thumbnail02.png')}}" class="img-fluid" alt="#" />
                        <div class="service-thumbnail_text">
                            <h4>24/7 Advanced Care</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-thumbnail border-0 d-flex flex-fill">
                        <img src="{{asset('assets/frontend/images/service-thumbnail03.png')}}" class="img-fluid" alt="#" />
                        <div class="service-thumbnail_text">
                            <h4>Get Results Online</h4>
                        </div>
                    </div>
                </div>
            </div>
    </div> 
    
    
   <!--City Modal-->
   <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Select Your City</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                
          </div>
        </div>
      </div>

    <!--==================== Footer ====================-->
    <footer>
        <div class="container container-custom">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="foot-contact-block">
                        <img src="{{asset('assets/frontend/images/logo.png')}}" class="img-fluid" alt="#" />
                        <p>
                        Glamyo is a multi-specialty healthcare provider delivering a hassle-free experience for all elective surgeries & cosmetic procedures with personalized care.
                        </p>
                        <a href="tel:9711144230">
                            <h4><i class="fas fa-phone"></i>+91 97111 44 230</h4>
                        </a>
                        <a href="mailto:info@Glamyo.com">
                            <h4><i class="far fa-envelope"></i>info@glamyo.in</h4>
                        </a>
                       </div>
                       <div class="foot-link-box footlink-box_btn">
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2 ">
                  
                  </div>
                <div class="col-sm-6 col-md-4 col-lg-2 offset-lg-1">
                    <div class="foot-link-box">
                        <h4>Quick Links</h4>
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>About Us</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Our Mission</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Our Services</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Blogs & News</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Contact Us</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="foot-link-box">
                        <h4>Our Services</h4>
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Covid-19 Test</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Laser Surgery</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Liposuction</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Sports Orthopedics</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Gynaecomastia</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-double-right"></i>Online Consultation</a>
                            </li>
                        </ul>
                    </div>
                </div>
              
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>© Glamyo Health 2020. All Rights Reserved</p>
                        <a href="#" id="scroll"><i class="fas fa-angle-double-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

     <!-- location modal -->
    <div id="location" class="modal fade" role="dialog" style="z-index: 9999;background-color: rgb(0, 0, 0, 0.2);">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header" style="border-bottom:1px solid #fff;">
      <h4 class="text-center pt-4">Select Your City</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-md-4">
              <a href="delhi/index.php">
                <img src="https://www.sociobuy.com/storage/images/locations/jaBD1ZeZdUD91lrHncY0YgrBVEHY29T9ni1QDaml.jpeg" class="hover-black mx-auto" width="64px" style="display: block;">
                <img src="https://www.sociobuy.com/storage/images/locations/jaBD1ZeZdUD91lrHncY0YgrBVEHY29T9ni1QDaml.jpeg" class="hover-red mx-auto" width="64px" style="display: none;">
                <p align="center" class="text-dark pt-3">DELHI NCR</p>
              </a>
            </div>
                      <div class="col-md-4">
              <a href="gurugram/index.php">
                <img src="https://www.sociobuy.com/storage/images/locations/N0yXzqelyGziOIpbg9znDGVpCzTo14EYKdeKOBNz.jpeg" class="hover-black mx-auto" width="64px" style="display: block;">
                <img src="https://www.sociobuy.com/storage/images/locations/N0yXzqelyGziOIpbg9znDGVpCzTo14EYKdeKOBNz.jpeg" class="hover-red mx-auto" width="64px" style="display: none;">
                <p align="center" class="text-dark pt-3">GURUGRAM</p>
              </a>
            </div>
                    
                   
            <div class="col-md-4">
              <a href="noida/index.php">
                <img src="https://www.sociobuy.com/storage/images/locations/N0yXzqelyGziOIpbg9znDGVpCzTo14EYKdeKOBNz.jpeg" class="hover-black mx-auto" width="64px" style="display: block;">
                <img src="https://www.sociobuy.com/storage/images/locations/N0yXzqelyGziOIpbg9znDGVpCzTo14EYKdeKOBNz.jpeg" class="hover-red mx-auto" width="64px" style="display: none;">
                <p align="center" class="text-dark pt-3">NOIDA</p>
              </a>
            </div>
                      <div class="col-md-4">
              <a href="bengaluru/index.php">
                <img src="https://www.sociobuy.com/storage/images/locations/uc49ISmO6cDMX5wK5rZ7WNUAuNLr6mfFReHE0hWW.jpeg" class="hover-black mx-auto" width="64px" style="display: block;">
                <img src="https://www.sociobuy.com/storage/images/locations/uc49ISmO6cDMX5wK5rZ7WNUAuNLr6mfFReHE0hWW.jpeg" class="hover-red mx-auto" width="64px" style="display: none;">
                <p align="center" class="text-dark pt-3">BENGALURU</p>
              </a>
            </div>
                      <div class="col-md-4">
              <a href="mumbai/index.php">
                <img src="https://www.sociobuy.com/storage/images/locations/jaBD1ZeZdUD91lrHncY0YgrBVEHY29T9ni1QDaml.jpeg" class="hover-black mx-auto" width="64px" style="display: block;">
                <img src="https://www.sociobuy.com/storage/images/locations/jaBD1ZeZdUD91lrHncY0YgrBVEHY29T9ni1QDaml.jpeg" class="hover-red mx-auto" width="64px" style="display: none;">
                <p align="center" class="text-dark pt-3">MUMBAI</p>
              </a>
            </div>
            <div class="col-md-4">
              <a href="hyderabad/index.php">
                <img src="https://www.sociobuy.com/storage/images/locations/jaBD1ZeZdUD91lrHncY0YgrBVEHY29T9ni1QDaml.jpeg" class="hover-black mx-auto" width="64px" style="display: block;">
                <img src="https://www.sociobuy.com/storage/images/locations/jaBD1ZeZdUD91lrHncY0YgrBVEHY29T9ni1QDaml.jpeg" class="hover-red mx-auto" width="64px" style="display: none;">
                <p align="center" class="text-dark pt-3">HYDERABAD</p>
              </a>
            </div>
                  </div>
      </div>
    </div>
  </div>
</div>

        <!-- Optional JavaScript -->
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
        // location popup modal
        $(window).load(function() {
        $("#popupSubscriber").modal("show");
        });
    </script>
    <script>
        const $input = document.querySelector(".numeric");
        const BIRTHNUMBER_ALLOWED_CHARS_REGEXP = /[0-9\/]+/;
        $input.addEventListener("keypress", e => {
          console.log(e);
          if (!BIRTHNUMBER_ALLOWED_CHARS_REGEXP.test(e.key)) {
            e.preventDefault();
          }
        });
    </script>
    <script>
       feather.replace()
    </script>
  </body>
</html>