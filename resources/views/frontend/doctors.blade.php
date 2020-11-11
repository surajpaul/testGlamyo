
@extends('layouts.frontend.app')

@section('title')
<title>Our Doctors</title>
@endsection

@section('css')
<style>
.sub-header{
    margin-top: 100px; 
}
</style>
@endsection

@section('content')
    <!-- Sub header -->
    <section class="space sub-header">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="alt-header_content" style="text-align: center; color: #fff;">
                        <p>Glamyo Health</p>
                        <h1>Our Doctors</h1>
                        <span style="font-size: 14px; color: #eee; position: relative; left: 20%;">Book appointment directly with our expert doctors</span>
                        <div class="sub-header_main" style="float: right">
                        <h2>expert care</h2>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--//End Sub header -->
    <!--//End Header -->



    <!--//End Header -->
    <!--==================== About Section ====================-->
    <section class="about-section">
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-12">
       
                    <ul class="booking-form" style="margin: -100px 0 0">
                    <li>
                            <select class="custom-select form-control" id='LEADCF1' name='LEADCF1'>
                           
                                <option>Select City</option>
                                <option value="Delhi NCR">Delhi NCR</option><option value="Gurugram">Gurugram</option><option value="Noida">Noida</option><option value="Bengaluru">Bengaluru</option><option value="Mumbai">Mumbai</option><option value="Hyderabad">Hyderabad</option></select>
                        </li>  
                    <li style="width: 50%"><input type="text" class="form-control" name='doctor' placeholder="Search Doctors, Disease & Treatments" /><i
                                class="fas fa-search"></i></li>
                       
                      <li class="form-btn">
                            <input type='submit' value="Submit" title='Submit' id='formsubmit'  class="btn btn-success"/>
                        </li>
                       
                    </ul>
                </div>
            </div></div></section>


    <!--==================== Doctors Section ====================-->
    <section class="doctor-section">
        <div class="container container-custom" style="margin: 100px auto">
        <div class="card">
            <div class="row">
               
                    <div class="col-lg-3 col-md-3">
                        <div class="img-block">
                            <img src="{{asset('assets/frontend/images/doc2.png')}}">
                        </div>
                    </div> 
                    <div class="col-lg-5 col-md-5">
                    <div class="doc-info-cont">
                                        <h4 class="doc-name">Dr. Gaurav Bansal</h4>
                                        <p class="doc-department">MBBS, MS - General Surgeon</p>
                                        <span class="doc-exp" style="color: #666">9+ Years of experience overall</span><b></b>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(35)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> New Delhi, India</p>
                                            
                                        </div>
                                        
                                    </div>
                    </div> 
                  <div class="col-lg-4 col-md-4">
                    <div class="doc-speciality">
                    <h4 class="doc-name">Speciality</h4>
                        <ul class="pl-0">
                         <li> <span>General Speciality</span></li> 
                          <li> <span>Laser Surgeon</span></li> 
                            <li><span>Laproscopic Surgeon</span></li> 
                              <li> <span>Orthopedics</span></li>
                        </ul>
                    </div>
                    <div class="clinic-booking">
                        <a href="http://www.glamyohealth.in/request-call-back/" class="apt-btn">Book Appointment</a>
                    </div>
                    </div> 
                </div>
                </div>
                <div class="card mt-4">
            <div class="row">
               
                    <div class="col-lg-3 col-md-3">
                        <div class="img-block">
                            <img src="{{asset('assets/frontend/images/doc2.png')}}">
                        </div>
                    </div> 
                    <div class="col-lg-5 col-md-5">
                    <div class="doc-info-cont">
                                        <h4 class="doc-name">Dr. Gaurav Bansal</h4>
                                        <p class="doc-department">MBBS, MS - General Surgeon</p>
                                        <span class="doc-exp" style="color: #666">9+ Years of experience overall</span><b></b>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(35)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> New Delhi, India</p>
                                            
                                        </div>
                                        
                                    </div>
                    </div> 
                  <div class="col-lg-4 col-md-4">
                    <div class="doc-speciality">
                    <h4 class="doc-name">Speciality</h4>
                        <ul class="pl-0">
                         <li> <span>General Speciality</span></li> 
                          <li> <span>Laser Surgeon</span></li> 
                            <li><span>Laproscopic Surgeon</span></li> 
                              <li> <span>Orthopedics</span></li>
                        </ul>
                    </div>
                    <div class="clinic-booking">
                        <a href="http://www.glamyohealth.in/request-call-back/" class="apt-btn">Book Appointment</a>
                    </div>
                    </div> 
                </div>
                </div>
                <div class="card mt-4">
            <div class="row">
               
                    <div class="col-lg-3 col-md-3">
                        <div class="img-block">
                            <img src="{{asset('assets/frontend/images/doc2.png')}}">
                        </div>
                    </div> 
                    <div class="col-lg-5 col-md-5">
                    <div class="doc-info-cont">
                                        <h4 class="doc-name">Dr. Gaurav Bansal</h4>
                                        <p class="doc-department">MBBS, MS - General Surgeon</p>
                                        <span class="doc-exp" style="color: #666">9+ Years of experience overall</span><b></b>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(35)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> New Delhi, India</p>
                                            
                                        </div>
                                        
                                    </div>
                    </div> 
                  <div class="col-lg-4 col-md-4">
                    <div class="doc-speciality">
                    <h4 class="doc-name">Speciality</h4>
                        <ul class="pl-0">
                         <li> <span>General Speciality</span></li> 
                          <li> <span>Laser Surgeon</span></li> 
                            <li><span>Laproscopic Surgeon</span></li> 
                              <li> <span>Orthopedics</span></li>
                        </ul>
                    </div>
                    <div class="clinic-booking">
                        <a href="http://www.glamyohealth.in/request-call-back/" class="apt-btn">Book Appointment</a>
                    </div>
                    </div> 
                </div>
                </div>
                <div class="card mt-4">
            <div class="row">
               
                    <div class="col-lg-3 col-md-3">
                        <div class="img-block">
                            <img src="{{asset('assets/frontend/images/doc2.png')}}">
                        </div>
                    </div> 
                    <div class="col-lg-5 col-md-5">
                    <div class="doc-info-cont">
                                        <h4 class="doc-name">Dr. Gaurav Bansal</h4>
                                        <p class="doc-department">MBBS, MS - General Surgeon</p>
                                        <span class="doc-exp" style="color: #666">9+ Years of experience overall</span><b></b>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(35)</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> New Delhi, India</p>
                                            
                                        </div>
                                        
                                    </div>
                    </div> 
                  <div class="col-lg-4 col-md-4">
                    <div class="doc-speciality">
                    <h4 class="doc-name">Speciality</h4>
                        <ul class="pl-0">
                         <li> <span>General Speciality</span></li> 
                          <li> <span>Laser Surgeon</span></li> 
                            <li><span>Laproscopic Surgeon</span></li> 
                              <li> <span>Orthopedics</span></li>
                        </ul>
                    </div>
                    <div class="clinic-booking">
                        <a href="http://www.glamyohealth.in/request-call-back/" class="apt-btn">Book Appointment</a>
                    </div>
                    </div> 
                </div>
                </div>

            </div>
            </div>
    </section> 
@endsection

@section('script')
@endsection