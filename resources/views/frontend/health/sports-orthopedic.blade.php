@extends('layouts.frontend.app')

@section('title')
<title>Advanced Painless Orthopaedics Treatment | Glamyo Health</title>
@endsection

@section('css')
@endsection

@section('content')
<div id="home">
      <div class="row mt-100">
        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
          <div class="main-title">
            <h2 class="product-title">Advanced Painless Orthopaedics Treatment</h2>
              <p>
              At Glamyo Health, our expert doctors will take care of orthopaedic injuries in a painless minimally invasive procedure.
              </p>
              <a href="#" data-toggle="modal" data-target=".bs-example-modal-new" class="btn btn-primary" tabindex="-1">Book Appointment</a>
          </div>
          <ul class="features-list">  
              <li>
                  <i class="ilmosys-microscope"></i>
                  <h5>USFDA <br>Approved</h5>
              </li>

              <li>
                  <i class="ilmosys-x-ray"></i>
                  <h5>Advanced Treatment</h5>
              </li>

              <li>
                  <i class="ilmosys-clinic"></i>
                  <h5>30 min <br>procedure</h5>
              </li>

              <li>
                  <i class="ilmosys-ambulance"></i>
                  <h5>1 day <br>discharge</h5>
              </li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
        <div  class="intro intro1" style="background-image: url('{{asset('assets/frontend/images/sports.jpg')}}')"></div>
        </div>  
      </div>
    <div id="stats2" class="bg-light">
          <div class="container">
              <div class="row">
                  <div class="col-md-3 col-sm-3">
                      <div class="stats2-info">
                          <i class="ilmosys-business-manwoman"></i>
                          <p>12,500+</p>
                          
                          <h3>Happy Patients</h3>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-3">
                      <div class="stats2-info">
                          <i class="ilmosys-doctor"></i>
                          <p>200+</p>
                          <h3>Doctors</h3>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-3">
                      <div class="stats2-info">
                          <i class="ilmosys-ambulance"></i>
                          <p>100+</p>
                          <h3>Hospitals</h3>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-3">
                      <div class="stats2-info">
                         <i class="ilmosys-hospital-2"></i>
                          <p>9+</p>
                          <h3>Cities</h3>
                      </div>
                  </div>
              </div>
          </div>
    </div>
   <!-- Info and symptoms starts -->  
    <div id="reviews" style="padding-bottom: 100px">
            <div class="container">
                <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-left">
            <div class="text-left">
                 <h2 style="color: #0F74B2; font-weight: 600;">Sports Orthopaedic </h2>
                </div>
                <div class="testimonials-white">
                    
                        <div class="text-left">
                            <div class="quote2">
                                <div>
                               <p style="margin-top: 10px; margin-bottom: 40px;">The actual surgery time is usually about 30 minutes. If extensive work is needed, the procedure may last up to 45 minutes. Most people “go to sleep completely” during surgery with a general anesthetic. Some have surgery with a spinal anesthetic.
                            <br><br>
                            Three or four small incisions are made to allow special instruments, including a fiber-optic camera, to be placed into your knee. Sterile saline (salt water) is brought into the knee joint continuously with tubing to provide a clear view for the surgeon. Torn parts of the meniscus and/or damaged cartilage on the bone surfaces are carefully removed with special arthroscopic instruments. The end result is a knee lined with smooth and stable tissues rather than rough edges.
                            </p>
                                     
                                </div>

                                <div>
                                 
                                   
                                </div>
                            </section>
                           
                               
                            
                        </div>
                    </div>
                </div></div>

                <div class="col-md-2 media-col-md-2">
                    <img src="{{asset('assets/frontend/images/ortho1.png')}}">
                    <h5 class="ortho-text">Pelvic Acetabular Trauma</h5>
                </div>
                <div class="col-md-2 media-col-md-2">
                <img src="{{asset('assets/frontend/images/ortho2.png')}}">
                    <h5 class="ortho-text">Arthroscopy</h5>
                </div>
                <div class="col-md-2 media-col-md-2">
                <img src="{{asset('assets/frontend/images/ortho3.png')}}">
                    <h5 class="ortho-text">Joint replacement surgery</h5>
                </div>
                <div class="col-md-2 media-col-md-2">
                <img src="{{asset('assets/frontend/images/ortho4.png')}}">
                    <h5 class="ortho-text">Ligament Reconstruction</h5>
                </div>
                <div class="col-md-2 media-col-md-2">
                <img src="{{asset('assets/frontend/images/ortho5.png')}}">
                    <h5 class="ortho-text">Shoulder Replacement Surgery</h5>
                </div>
             </div>
<style>
    .media-col-md-2{
        flex: 0 0 20% !important;
max-width: 20% !important;
    }
    .ortho-text{
        padding-top: 20px;
        text-align: center;
        font-size: 16px;
        color: #0F74B2;
        font-weight: 600;
    }
</style>
            </div></div>
                 <!-- Info and symptoms ends -->    
                 
                   <!-- Why Glamyo -->
                   <div id="services" class="saas-services-area  pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Our Services</span>
                    <h2>Why Choose Glamyo Health</h2>
                    <p>Hassle-free experience for all elective surgeries & cosmetic procedures with personalized care.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="saas-service-card">
                            <div class="icon bg-1">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h3>Quick Discharge</h3>
                            <p>Single-day discharge using the latest cutting-edge equipment, expert doctors.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="saas-service-card">
                            <div class="icon bg-2">
                                <i class="fas fa-calendar-check-o"></i>
                            </div>
                            <h3>Unlimited Follow-Ups</h3>
                            <p>With Glamyo, you have access to our doctors and can follow up as many times as you like.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="saas-service-card">
                            <div class="icon bg-3">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <h3>Advanced Yet Affordable</h3>
                            <p>Get high-end treatments at value prices which are affordable than many of the corporate hospitals.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="saas-service-card">
                            <div class="icon bg-4">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <h3>Insurance Covered</h3>
                            <p>Our team does all the running around to ensure a hassle-free experience for you.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="saas-service-card">
                            <div class="icon bg-5">
                                <i class="fas fa-stethoscope"></i>
                            </div>
                            <h3>Painless Procedures</h3>
                            <p>No cuts, no stitches, no wounds, just happiness. Painless procedures with Glamyo.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="saas-service-card">
                            <div class="icon bg-6">
                                <i class="fas fa-taxi"></i>
                            </div>
                            <h3>Free Pick & Drop Facility</h3>
                            <p>We provide cabs for patients, as a gesture of choosing Glamyo Health.</p>
                        </div>
                    </div>
                </div>

                
            </div>
    </div>
    <!-- Worried About Price -->
    <section class="parallax-content parallax1 text-center" data-stellar-background-ratio="0.4">
          <div class="overlay"></div>
          <div class="container">
              <div class="row">
                  <div class="col-md-6 col-lg-6">
                      <h4>Worried about price?  </h4>
                        <p>Glamyo has made the latest, laser treatment for piles affordable and accessible to all.</p> 
                        <div class="quote2">
                          <div>
                             
                              <ul style="margin-top: 20px; margin-bottom: 20px; text-align: left; color: #fff" class="symptoms-list">
                            
                                      <li>Interest-Free EMI Facility</li>
                                          <li>Free Followup Consultation</li>
                                          <li>Free Pickup & Drop For Surgery</li>
                              </ul>
                          </div>

                          <div>
                          </div>
                        </div>
                  </div>
                  <div class="col-lg-6 col-md-6 show-desktop hide-mobile">
                  
                    <img src="{{asset('assets/frontend/images/ill.png')}}" width="300" style="margin-bottom: 60px">
                    <div class="row">
                    <div class="col-md-6 col-lg-6">
                          <a onclick="return gtag_report_conversion('tel:9711144230')" href="tel: 9711144230" id="callToAction" class="btn btn-light"><i data-feather="phone"></i>Call Piles Expert Now</a></div>
                          <div class="col-md-6 col-lg-6">
                              <a href="#" data-toggle="modal" data-target=".bs-example-modal-new" class="btn btn-light"><i data-feather="calendar"></i>Book Consultation </a></div>
                  </div></div>
                  <div class="show-mobile hide-desktop">
                      <div class="col-md-6 col-lg-6">
                          <a onclick="return gtag_report_conversion('tel:9711144230')" href="tel: 9711144230" id="callToAction" class="btn btn-lg btn-light"><i data-feather="phone"></i>Call Piles Expert Now</a></div>
                          <div class="col-md-6 col-lg-6">
                              <a  href="#" data-toggle="modal" data-target=".bs-example-modal-new" class="btn btn-lg btn-light"><i data-feather="calendar"></i>Book Consultation </a></div>
                  </div>
              </div>
          </div>
    </section>
 
    <!-- Features panel -->
    <div id="stats2" class="space-stats">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="stats2-info">
                            <i data-feather="shield" class="icon"></i>
                          <h2>Money Back Guarantee</h2>
                          <span>If you’re not satisfied with your consultation,
                            we’ll reimburse you in full!</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="stats2-info">
                            <i data-feather="lock"  class="icon"></i>
                            <h2>Risk-Free Cancellation</h2>
                            <span>Cancel up to 24 hours,
                                completely risk-free</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="stats2-info">
                           <i data-feather="clock" class="icon"></i>
                            <h2>No Waiting</h2>
                            <span>We will ensure all paperwork is ready before you get there!</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="stats2-info">
                            <i style="color: #fff;">₹</i>
                           <h2>Save Money</h2>
                           <span>Save upto Rs. 500 on consultation charges</span    >
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- City Tabs -->
    <section class=city-section>
      	<div class="tabs">
          <input type="radio" id="tab1" name="tab-control" checked>
          <input type="radio" id="tab2" name="tab-control">
          <input type="radio" id="tab3" name="tab-control">  
          <input type="radio" id="tab4" name="tab-control">
          <ul>
            <li title="Delhi"><label for="tab1" role="button"><img src="{{asset('assets/frontend/images/delhi.png')}}" class="city"><br><span>Delhi NCR</span></label></li>
            <li title="Bangalore"><label for="tab2" role="button"><img src="{{asset('assets/frontend/images/bangalore.png')}}" class="city"><br><span>Bangalore</span></label></li>
            <li title="Mumbai"><label for="tab3" role="button"><img src="{{asset('assets/frontend/images/mumbai.png')}}" class="city"><br><span>Mumbai</span></label></li>    
            <li title="Hyderabad"><label for="tab4" role="button"><img src="{{asset('assets/frontend/images/hyderabad.png')}}" class="city"><br> <span>Hyderabad</span></label></li>
          </ul>
          <div class="slider"><div class="indicator"></div></div>
          <div class="content">
            <section>
              <h2>Delhi NCR</h2>
              <div class="places">
                  <ul>
                      <li><div class="locate">
                          <img src="{{asset('assets/frontend/images/location1.png')}}">
                          <p>Greater Kailash</p>
                      </div></li>

                      <li><div class="locate">
                          <img src="{{asset('assets/frontend/images/location1.png')}}">
                          <p>Paschim Vihar</p>
                      </div></li>

                      <li><div class="locate">
                          <img src="{{asset('assets/frontend/images/location1.png')}}">
                          <p>Punjabi Bagh</p>
                      </div></li>

                      <li><div class="locate">
                          <img src="{{asset('assets/frontend/images/location1.png')}}">
                          <p>Gurgaon</p>
                      </div></li>
                      <li><div class="locate">
                          <img src="{{asset('assets/frontend/images/location1.png')}}">
                          <p>Dwarka</p>
                      </div></li>
                      <li><div class="locate">
                          <img src="{{asset('assets/frontend/images/location1.png')}}">
                          <p>Noida</p>
                      </div></li>
                      <li><div class="locate">
                          <img src="{{asset('assets/frontend/images/location1.png')}}">
                          <p>Rohini</p>
                      </div></li>
                  </ul>
              </div>
          	</section>
            <section>
                  <h2>Bangalore</h2>
                  <div class="places">
                      <ul>
                          <li><div class="locate">
                              <img src="{{asset('assets/frontend/images/location1.png')}}">
                              <p>HSR Layout</p>
                          </div></li>

                          <li><div class="locate">
                              <img src="{{asset('assets/frontend/images/location1.png')}}">
                              <p>Whitefield</p>
                          </div></li>

                          <li><div class="locate">
                              <img src="{{asset('assets/frontend/images/location1.png')}}">
                              <p>Indiranagar</p>
                          </div></li>

                          <li><div class="locate">
                              <img src="{{asset('assets/frontend/images/location1.png')}}">
                              <p>Electronic City</p>
                          </div></li>

                      </ul>
                  </div>
            </section>
            <section>
                  <h2>Mumbai</h2>
                  <div class="places">
                      <ul>
                          <li><div class="locate">
                              <img src="{{asset('assets/frontend/images/location1.png')}}">
                              <p>Powai</p>
                          </div></li>


                          <li><div class="locate">
                              <img src="{{asset('assets/frontend/images/location1.png')}}">
                              <p>Chembur</p>
                          </div></li>

                          <li><div class="locate">
                              <img src="{{asset('assets/frontend/images/location1.png')}}">
                              <p>Andheri West</p>
                          </div></li>

                      </ul>
                  </div>
            </section>
            <section>
                  <h2>Hyderabad</h2>
                  <div class="places">
                      <ul>
                          <li><div class="locate">
                              <img src="{{asset('assets/frontend/images/location1.png')}}">
                              <p>Hitech City</p>
                          </div></li>

                          <li><div class="locate">
                              <img src="{{asset('assets/frontend/images/location1.png')}}">
                              <p>Banjara Hills</p>
                          </div></li>

                          <li><div class="locate">
                              <img src="{{asset('assets/frontend/images/location1.png')}}">
                              <p>Jubilee Hills</p>
                          </div></li>



                      </ul>
                  </div></section>
          </div>
        </div>
    </section>
    <!-- Doctors slider -->
    <section class="our-team gradient-bg">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="sub-title_center">
                        <h2 style="color: #fff;">Our Doctors</h2>
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
                                        <a href="#"><i class="fab fa-youtube"></i></a>
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
                                        <a href="#"><i class="fab fa-youtube"></i></a>
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
                                        <a href="#"><i class="fab fa-youtube"></i></a>
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
                                        <a href="#"><i class="fab fa-youtube"></i></a>
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
                                        <a href="#"><i class="fab fa-youtube"></i></a>
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
                    <!-- <div class="text-center mt-5">
                    <a href="our-doctors.php" class="btn btn-primary">View More</a></div> -->
                </div>
            </div>
        </div>
    </section>
    <section class="space background-bg4">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="appointment-form_wrap">
                    <img src="{{asset('assets/frontend/images/5-01.png')}}" class="img-responsive" width="500">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="why-choose_block">
                        <div class="heading-style1 mb-0">
                            <h2>FAQs</h2>
                          
                            <hr>
                        </div>
                        <div class="faq" id="accordion">
                                      <div class="card">
                                          <div class="card-header" id="faqHeading-1">
                                              <div class="mb-0">
                                                  <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                                      <span class="badge">1</span>Which doctor should I consult for Piles?
                                                  </h5>
                                              </div>
                                          </div>
                                          <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                              <div class="card-body">
                                                  <p>Either a general surgeon or a proctologist is the most appropriate doctor for you to consult.</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header" id="faqHeading-2">
                                              <div class="mb-0">
                                                  <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                                      <span class="badge">2</span>How do you get rid of piles?
                                                  </h5>
                                              </div>
                                          </div>
                                          <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                              <div class="card-body">
                                                  <p>“Eat high-fiber foods. Eat more fruits, vegetables and whole grains. …<br>Use topical treatments. Apply an over-the-counter hemorrhoid cream or suppository containing hydrocortisone, or use pads containing witch hazel or a numbing agent.<br>Soak regularly in a warm bath or sitz bath. …<br>Take oral pain relievers.”</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header" id="faqHeading-3">
                                              <div class="mb-0">
                                                  <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                                      <span class="badge">3</span>How can I permanently cure piles?
                                                  </h5>
                                              </div>
                                          </div>
                                          <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                              <div class="card-body">
                                                  <p>The permanent cure to piles is laser surgery for piles and post op diatary changes.</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header" id="faqHeading-4">
                                              <div class="mb-0">
                                                  <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                                      <span class="badge">4</span> I, quite frequently, have to sit long on the toilet while passing stools ? Am I at a risk for piles?
                                                  </h5>
                                              </div>
                                          </div>
                                          <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                              <div class="card-body">
                                                  <p>Straining during the bowel movements can lead to piles. If you are having pain and blood while passing the blood or if you get a feeling of fullness even after passing a stool, you should consult a general surgeon</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header" id="faqHeading-5">
                                              <div class="mb-0">
                                                  <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                                      <span class="badge">5</span>What are various grades of piles ?
                                                  </h5>
                                              </div>
                                          </div>
                                          <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                              <div class="card-body">
                                                  <ul>
                                                      <li>First-degree hemorrhoids – these piles do not prolapse.</li>
                                                      <li>Second-degree hemorrhoids – these piles prolapse on straining.</li>
                                                      <li>Third-degree hemorrhoids – these piles prolapse on straining.</li>
                                                      <li>Fourth-degree hemorrhoids – these type of piles get permanently prolapsed.</li>
                                                      </ul>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header" id="faqHeading-6">
                                              <div class="mb-0">
                                                  <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                                      <span class="badge">6</span>What can be the complications associated with Piles?
                                                  </h5>
                                              </div>
                                          </div>
                                          <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                              <div class="card-body">
                                                  <p>Some of the patients feel too embarrassed to seek medical help for piles. Untreated piles can result in serious medical complications.
                                                      <br>
                                                      Some of the patients feel too embarrassed to seek medical help for piles. Untreated piles can result in serious medical complications·&nbsp; Infection·&nbsp; Anal fistula·&nbsp; Anaemia due to prolonged blood loss.
                                                      <br>
                                                      Consult our Glamyo expert doctors who will help you with painless laser treatment.
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                    </div>
                </div>
            </div>
        </div>
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
                  <td style='width:30%;'></td></tr><tr style="display: none;"><td style='word-break: break-word;text-align:left;font-size:15px;font-family:Arial;width:30%'>Treatment</td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='255' name='LEADCF1' value='Sports Ortho'></input></td><td style='width:30%;'></td></tr><tr style='display:none;' ><td style='word-break: break-word;text-align:left;font-size:15px;font-family:Arial;width:30%'>Source</td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='255' name='LEADCF3' value='Google'></input></td><td style='width:30%;'></td></tr><tr style='display:none;' ><td style='word-break: break-word;text-align:left;font-size:15px;font-family:Arial;width:30%'>Ad Type</td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='255' name='LEADCF2' value='Website'></input></td><td style='width:30%;'></td></tr><tr style='display:none;' ><td style='word-break: break-word;text-align:left;font-size:15px;font-family:Arial;width:30%'>Lead Status</td><td style='width:40%;'>
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