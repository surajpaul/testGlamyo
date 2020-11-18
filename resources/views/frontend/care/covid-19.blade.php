@extends('layouts.frontend.app')

@section('title')
<title>Covid 19 Medical Care | Glamyo Health</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('assets/frontend/css/covid.css')}}">
@endsection

@section('content')
    
    <!-- == main content area starts == -->
    <div id="dtr-main-content"> 
        
        <!-- hero section starts
================================================== -->
<section id="home" class="dtr-section parallax dtr-md-bg-hide" style="background-image: url({{asset('assets/frontend/images/covid/hero-img1.jpg')}}); background-size: auto; background-attachment: fixed; background-position: center 0px; background-repeat: no-repeat no-repeat;">
            <div class="container"> 
                
                <!-- row starts -->
                <div class="row"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6 offset-md-6 position-relative hero-section-top-padding dtr-pb-70">
                        <h1 class="color-blue">Feeling unwell?</h1>
                        <h2 class="color-dark-blue" style="color: #69BB45">Get medical care early</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        
                        <!-- rotating image / text -->
                        <div class="d-flex align-items-center dtr-mt-40">
                            <div class="rotating-vr"> <img src="{{asset('assets/frontend/images/covid/vir-symbol.svg')}}" alt="image" class="vr-img">
                                <p class="color-orange" style="position: relative;
top: 25%;
font-size: 20px;
color: #0F74B2;
transform: translateY(50%);">3.4%</p>
                            </div>
                            <p class="font-weight-700 dtr-ml-20" style="color: #0F74B2; font-size: 18px">Mortality Rate estimate by the<br>
                                WHO as of March 3</p>
                        </div>
                        <!-- rotating image / text ends --> 
                        
                        <!-- arrow --> 
                        <img src="{{asset('assets/frontend/images/covid/arrow.svg')}}" alt="image" class="hero-down-arrow"> </div>
                    <!-- column 1 ends --> 
                    
                </div>
                <!-- row ends --> 
                
            </div>
        </section>
        <!-- hero section ends
================================================== --> 
        
        <!-- section starts
================================================== -->
        <section id="about" class="dtr-section dtr-pt-100 dtr-pb-80 text-white" style="background-color: #0F74B2">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="text-size-lg color-white">Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV). </p>
                        <span class="vert-line mt-20"></span>
                        <h2 class="color-white">How virus spreads</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- section ends
================================================== --> 
        
        <!-- section starts
================================================== -->
        <section class="dtr-section dtr-py-100">
            <div class="container"> 
                
                <!-- circle bg icon -->
                <div class="dtr-circle-icon bg-white color-orange"><i class="icon-mbri-down"></i></div>
                
                <!-- row 1 starts -->
                <div class="row align-items-center"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6 dtr-md-mb-30"> <img src="{{asset('assets/frontend/images/covid/shape-img1.png')}}" alt="image"> </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6">
                        <div class="clearfix dtr-mb-30"> <img src="{{asset('assets/frontend/images/covid/icon1-64x64.png')}}" alt="image" class="float-left dtr-mr-10">
                            <p class="text-size-lg font-weight-200 color-blue"><span class="font-weight-600 color-orange">close contact</span> with an infected person</p>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour or randomised words which don't look even slightly believable. Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <!-- column 2 ends --> 
                    
                </div>
                <!-- row 1 ends --> 
                
                <!-- row 2 starts -->
                <div class="row align-items-center dtr-py-100"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6">
                        <div class="clearfix dtr-mb-30"> <img src="{{asset('assets/frontend/images/covid/icon2-64x64.png')}}" alt="image" class="float-left dtr-mr-10">
                            <p class="text-size-lg font-weight-200 color-blue"><span class="font-weight-600 color-orange">Droplets</span> spread when Infected
                                Person coughs or sneezes</p>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour or randomised words which don't look even slightly believable. Lorem ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6 text-right dtr-md-mt-30"> <img src="{{asset('assets/frontend/images/covid/shape-img2.png')}}" alt="image"> </div>
                    <!-- column 2 ends --> 
                    
                </div>
                <!-- row 2 ends --> 
                
                <!-- row 3 starts -->
                <div class="row align-items-center"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6 dtr-md-mb-30"> <img src="{{asset('assets/frontend/images/covid/shape-img3.png')}}" alt="image"> </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6">
                        <div class="clearfix dtr-mb-30"> <img src="{{asset('assets/frontend/images/covid/icon3-64x64.png')}}" alt="image" class="float-left dtr-mr-10">
                            <p class="text-size-lg font-weight-200 color-blue"><span class="font-weight-600 color-orange">Contact</span> with contaminated
                                surfaces or objects</p>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour or randomised words which don't look even slightly believable. Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <!-- column 2 ends --> 
                    
                </div>
                <!-- row 3 ends --> 
                
            </div>
        </section>
        <!-- section ends
================================================== --> 

        
        <!-- features section starts
================================================== -->
        <section id="features" class="dtr-section dtr-py-100 bg-light">
            <div class="container"> 
                
                <!-- section intro row starts -->
                <div class="row dtr-mb-30">
                    <div class="col-12 text-center">
                        <p class="text-grad-orange font-weight-700">Basic protective measures</p>
                        <h2>How to protect yourself</h2>
                    </div>
                </div>
                <!-- section intro row ends --> 
                
                <!-- row 1 starts -->
                <div class="row">
                    <div class="col-12 col-md-2 offset-md-1 text-center dtr-pt-100 dtr-mt-120 dtr-md-mt-0 dtr-md-pt-0"> <img src="{{asset('assets/frontend/images/covid/icon1-care.png')}}" alt="image" class="dtr-mb-30">
                        <h6>If you feel unwell get medical care early</h6>
                    </div>
                    <div class="col-12 col-md-2 text-center dtr-mt-120 dtr-md-mt-30 dtr-md-pt-0"> <img src="{{asset('assets/frontend/images/covid/icon2-care.png')}}" alt="image" class="dtr-mb-30">
                        <h6>Avoid traveling if unnecessary</h6>
                    </div>
                    <div class="col-12 col-md-2 text-center dtr-pt-20 dtr-md-mt-0"> <img src="{{asset('assets/frontend/images/covid/icon3-care.png')}}" alt="image" class="dtr-mb-30">
                        <h6>Wash your hands frequently</h6>
                    </div>
                    <div class="col-12 col-md-2 text-center dtr-mt-120 dtr-md-mt-30 dtr-md-pt-0"> <img src="{{asset('assets/frontend/images/covid/icon4-care.png')}}" alt="image" class="dtr-mb-30">
                        <h6>Maintain social distancing</h6>
                    </div>
                    <div class="col-12 col-md-2 text-center dtr-pt-100 dtr-mt-120 dtr-md-mt-30 dtr-md-pt-0"> <img src="{{asset('assets/frontend/images/covid/icon5-care.png')}}" alt="image" class="dtr-mb-30">
                        <h6>Avoid touching eyes, nose and mouth</h6>
                    </div>
                </div>
                <!-- row 1 ends --> 
                
                <!-- row 2 starts -->
                <div class="row dtr-section-with-bg dtr-bg-size-auto dtr-bg-position-center-top dtr-mt-minus110 dtr-md-mt-30 wow fadeInUp" style="background-image: url({{asset('assets/frontend/images/covid/curve.svg')}});">
                    <div class="col-12 col-md-6 offset-md-3 text-center dtr-pt-50">
                        <p class="dtr-mb-0 color-dark-blue">Be Ready to fight</p>
                        <p class="text-size-md-alt font-weight-600 dtr-mb-20 color-orange">#coronavirus</p>
                        <p class="color-dark-blue"> If you develop any symptoms such as fever,<br>
                            cough and difficulty breathing</p>
                        <p class="font-weight-700 dtr-mt-20 color-blue">Seek medical care immediately! </p>
                        <p class="text-size-xs font-weight-600 dtr-mt-30 color-dark-blue">Learn more to be ready for #COVID19:<br>
                            www.who.int/COVID19</p>
                    </div>
                </div>
                <!-- row 2 ends --> 
                
            </div>
        </section>
        <!-- features section ends
================================================== --> 
        

        
        <!-- info section starts
================================================== -->
        <section class="dtr-section dtr-py-100 bg-grey">
            <div class="container"> 
                <!-- row starts -->
                <div class="row"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6">
                        <div class="dtr-pr-30 dtr-sm-pr-0"><img src="{{asset('assets/frontend/images/covid/image-1.png')}}" alt="image"></div>
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6 dtr-md-mt-30">
                        <p class="text-size-lg font-weight-200 color-blue">Learn how you can <span class="font-weight-600 color-orange">survive</span> widespread COVID-19 outbreak</p>
                        <p class="text-grad-orange font-weight-700 dtr-mb-20">Educate yourself about 2019-nCoV</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem ipsum.</p>
                        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                    </div>
                    <!-- column 2 ends --> 
                    
                </div>
                <!-- row starts --> 
                
            </div>
        </section>
        <!-- info section ends
================================================== --> 
        

        
        <!-- faq section starts
================================================== -->
        <section id="faq" class="dtr-section dtr-py-100">
            <div class="container"> 
                
                <!-- row starts -->
                <div class="row"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6">
                        <p class="text-size-lg font-weight-200 color-blue">Your <span class="font-weight-600 color-orange">questions</span> answered</p>
                        <p class="text-grad-orange font-weight-700 dtr-mb-40">How to cope with 2019-nCoV outbreak</p>
                        
                        <!-- accordion 1 starts -->
                       <div class="faq" id="accordion">
                                      <div class="card">
                                          <div class="card-header" id="faqHeading-1">
                                              <div class="mb-0">
                                                  <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                                      <span class="badge">1</span>What is COVID-19?
                                                  </h5>
                                              </div>
                                          </div>
                                          <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                              <div class="card-body">
                                                  <p>Lorem text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical. Dummy texts have been in use by typesetters since the 16th century.</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header" id="faqHeading-2">
                                              <div class="mb-0">
                                                  <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                                      <span class="badge">2</span>Who is more at risk of severe illness?
                                                  </h5>
                                              </div>
                                          </div>
                                          <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                              <div class="card-body">
                                              <p>Lorem text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical. Dummy texts have been in use by typesetters since the 16th century.</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header" id="faqHeading-3">
                                              <div class="mb-0">
                                                  <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                                      <span class="badge">3</span>What to do if you develop similar symptoms?
                                                  </h5>
                                              </div>
                                          </div>
                                          <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                              <div class="card-body">
                                              <p>Lorem text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical. Dummy texts have been in use by typesetters since the 16th century.</p>
                                                  </div>
                                          </div>
                                      </div>
                                     
                                  </div>
                              </div>
                   
                        <!-- accordion 1 ends --> 

                          <!-- column 2 starts -->
                    <div class="col-12 col-md-6 text-right dtr-md-mt-30"> 
                        <img src="{{asset('assets/frontend/images/covid/image-2.png')}}" alt="image"> 
                    </div>
                    <!-- column 2 ends --> 
                    
                        
                    </div>
                    <!-- column 1 ends --> 
                    
                  
                </div>
                <!-- row ends --> 
                
            </div>
        </section>
        <!-- faq section ends
================================================== --> 
        

    </div>
    <!-- == main content area ends == --> 
    </section>
            </div>
      <div class="modal fade bs-example-modal-new" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

          <div class="modal-dialog">
            <!-- Modal Content: begins -->
            <div class="modal-content" style="background-color: transparent !important; border: 0px solid rgba(0,0,0,.2);">
              <!-- Modal Body -->  
              <div class="modal-body">
                <div class="body-message">
 <div id='crmWebToEntityForm' class='zcwf_lblLeft crmWebToEntityForm' style='background-color: transparent;color: black;max-width: 600px; border-radius: 15px;'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
   <form action='https://crm.zoho.in/crm/WebToLeadForm' name=WebToLeads110084000002090181 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory110084000002090181()' accept-charset='UTF-8'>
 <input type='text' style='display:none;' name='xnQsjsdp' value='b43efcd5d07598c5a2dec7cbbd9f0a4a786812c2b0d51f01c98e1840ea0d0c3a'></input> 
 <input type='hidden' name='zc_gad' id='zc_gad' value=''></input> 
 <input type='text' style='display:none;' name='xmIwtLD' value='16076923e650cb768373cb673d8a208cbff4a16a5549950b99bafb636c3eff59'></input> 
 <input type='text'  style='display:none;' name='actionType' value='TGVhZHM='></input>
 <input type='text' style='display:none;' name='returnURL' value='https://glamyohealth.in/thank-you' > </input>
     <!-- Do not remove this code. -->

   <table style='width: auto;margin-top: -42px;background-color: #ffffff;border-radius: 5px;padding: 5%;color: #222;box-shadow: 3px 4px 12px #999;'>
    <tr>
       <td colspan='4'  style='text-align:center;font-family:Verdana;font-size:22px; font-weight: 600; word-break: break-word; color:#0F74B2;'>
          Book Consultation</td></tr> 
          <br></br>
          <tr><td  style='word-break: break-word;text-align:left;font-size:15px;font-family:Verdana;width:35%;'>Name<span style='color:#444;'>*</span></td>
              <td style='width:65%;' ><input type='text' style='width:100%;box-sizing:border-box; border-bottom: 1px solid #999 !important; border: none; text-transform: capitalize;'  maxlength='80' name='Last Name' required="true"/></td>
          </tr>
          <tr><td  style='word-break: break-word;text-align:left;font-size:15px;font-family:Verdana;width:40%;'>Phone No.<span style='color:#222;'>*</span></td><td style='width:70%;'>
              <div class="input-group-prepend" style="position: absolute;margin-top: 1px; color: #666;">
                  <span class="input-group-text" style="padding: 0; font-size: 1.1rem; border: none; background: transparent;">+91</span>
                </div>
          <input class="numeric" type='text' style='width:100%;box-sizing:border-box; border-bottom: 1px solid #999!important; border: none; padding-left: 30px;' required maxlength='10' minlength='10' name='Mobile' required="true"/></td><td style='width:35%;'></td></tr>
              <tr><td  style='word-break: break-word;text-align:left;font-size:15px;font-family:Verdana;width:30%;'>City<span style='color:#222;'>*</span></td><td style='width:40%;'><select class="form-control" style='width:100%;box-sizing:border-box; border-bottom: 1px solid #999!important; border: none; box-shadow: none; text-transform: capitalize'  maxlength='255' name='LEADCF4' required="true"><option value="">Select City</option><option value="Delhi">Delhi</option><option value="Gurgaon">Gurgaon</option><option value="Noida">Noida</option><option value="Faridabad">Faridabad</option><option value="Ghaziabad">Ghaziabad</option><option value="Mumbai">Mumbai</option><option value="Bangalore">Bangalore</option><option value="Hyderabad">Hyderabad</option><option value="Others">Others</option></select></td>
                  <td style='width:30%;'></td></tr><tr style="display: none;"><td style='word-break: break-word;text-align:left;font-size:15px;font-family:Arial;width:30%'>Treatment</td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='255' name='LEADCF1' value='Piles'></input></td><td style='width:30%;'></td></tr><tr style='display:none;' ><td style='word-break: break-word;text-align:left;font-size:15px;font-family:Arial;width:30%'>Source</td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='255' name='LEADCF3' value='Google'></input></td><td style='width:30%;'></td></tr><tr style='display:none;' ><td style='word-break: break-word;text-align:left;font-size:15px;font-family:Arial;width:30%'>Ad Type</td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='255' name='LEADCF2' value='Landing&#x20;page'></input></td><td style='width:30%;'></td></tr><tr style='display:none;' ><td style='word-break: break-word;text-align:left;font-size:15px;font-family:Arial;width:30%'>Lead Status</td><td style='width:40%;'>
                      <select style='width:100%;box-sizing:border-box;' name='Lead Status'>
                          <option value='-None-'>-None-</option>
                      <option selected value='New&#x20;Lead'>New Lead</option>
                          <option value='Cold&#x20;Lead'>Cold Lead</option>
                          <option value='Hot&#x20;Lead'>Hot Lead</option>
                          <option value='OPD&#x20;Scheduled'>OPD Scheduled</option>
                          <option value='Surgery&#x20;Scheduled'>Surgery Scheduled</option>
                          <option value='DNP&#x20;Exhausted'>DNP Exhausted</option>
                          <option value='DNP'>DNP</option>
                          <option value='Surgery&#x20;Done'>Surgery Done</option>
                          <option value='JUNK&#x20;Leads'>JUNK Leads</option>
                          <option value='Not&#x20;Int&#x20;&#x2f;&#x20;Closed'>Not Int &#x2f; Closed</option>
                          <option value='Cross&#x20;BD'>Cross BD</option>
                          <option value='Covid'>Covid</option>
                      </select></td><td style='width:30%;'></td></tr>
              
                  <tr><td colspan='4' style='text-align:center; padding-top:15px;font-size:15px;'>
                      <input style='margin-right: 5px;cursor: pointer;font-size:15px;' id='formsubmit' class="btn btn-primary" type='submit' value='Submit' ></input> </td></tr></table>
                      <script>
                          var mndFileds=new Array('Last Name','Mobile','LEADCF4');
                          var fldLangVal=new Array('Name','Phone','City'); 
                           var name='';
                           var email='';
                   
                          function checkMandatory110084000002090181() {
                           for(i=0;i<mndFileds.length;i++) {
                             var fieldObj=document.forms['WebToLeads110084000002090181'][mndFileds[i]];
                             if(fieldObj) {
                               if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
                                if(fieldObj.type =='file')
                                   { 
                                    alert('Please select a file to upload.'); 
                                    fieldObj.focus(); 
                                    return false;
                                   } 
                               alert(fldLangVal[i] +' cannot be empty.'); 
                                         fieldObj.focus();
                                         return false;
                               }  else if(fieldObj.nodeName=='SELECT') {
                                        if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
                                   alert(fldLangVal[i] +' cannot be none.'); 
                                   fieldObj.focus();
                                   return false;
                                  }
                               } else if(fieldObj.type =='checkbox'){
                                   if(fieldObj.checked == false){
                                   alert('Please accept  '+fldLangVal[i]);
                                   fieldObj.focus();
                                   return false;
                                  } 
                                } 
                                try {
                                    if(fieldObj.name == 'Last Name') {
                                   name = fieldObj.value;
                                      }
                               } catch (e) {}
                               }
                           }
                       }
                   
                   function tooltipShow(el){
                       var tooltip = el.nextElementSibling;
                       var tooltipDisplay = tooltip.style.display;
                       if(tooltipDisplay == 'none'){
                           var allTooltip = document.getElementsByClassName('zcwf_tooltip_over');
                           for(i=0; i<allTooltip.length; i++){
                               allTooltip[i].style.display='none';
                           }
                           tooltip.style.display = 'block';
                       }else{
                           tooltip.style.display='none';
                       }
                   }
                   </script>
                       <!-- Do not remove this --- Analytics Tracking code starts --><script id='wf_anal' src='https://crm.zohopublic.in/crm/WebFormAnalyticsServeServlet?rid=16076923e650cb768373cb673d8a208cbff4a16a5549950b99bafb636c3eff59gidb43efcd5d07598c5a2dec7cbbd9f0a4a786812c2b0d51f01c98e1840ea0d0c3agid534cb20477b1d28b5f45f7cc241888c5gid4ee3a7e9ace6ab1be7c541b329164307'></script><!-- Do not remove this --- Analytics Tracking code ends. --></form>
                   </div>
                      </div>
                </div>
              </div>
              <!-- Modal Footer -->
            </div>
            <!-- Modal Content: ends -->
          </div>    
      <!--City Modal-->
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myHugeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-body">
              <div class="row">
                  <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12">
                  <div>
                        <ul>
                            <li class="card city-box">
                                <img src="{{asset('assets/frontend/images/delhi.png')}}">
                                <span class="">Delhi</span>
                            </li>
                            <li class="card  city-box">
                                <img src="{{asset('assets/frontend/images/bangalore.png')}}">
                                <span class="">Bangalore</span>
                            </li>
                            <li class="card  city-box">
                                <img src="{{asset('assets/frontend/images/hyderabad.png')}}">
                                <span class="">Hyderabad</span>
                            </li>
                            <li class="card city-box">
                                <img src="{{asset('assets/frontend/images/mumbai.png')}}">
                                <span class="">Mumbai</span>
                            </li>
                        </ul>
                  </div>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('script')
@endsection