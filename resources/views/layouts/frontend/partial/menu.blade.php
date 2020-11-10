<nav>
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <!-- Nav menu -->
              <nav class="navbar navbar-expand-lg fixed-top navbar-light">
                  <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/frontend/images/logo.png')}}" width="150" alt=" " /></a>
                  <button class="navbar-toggler nav-custome1" type="button" data-toggle="collapse"
                      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                      aria-expanded="false" aria-label="Toggle
                          navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto nav-sub">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="../../health.php" id="navbarDropdown1"
                                  role="button" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false"><img src="{{asset('assets/frontend/images/1.png')}}" class="nav-icon"> Health <i class="fas fa-chevron-down"></i> </a>
                                  
                                  <ul class="dropdown-menu">
                                      <li class="nav-item">
                                          <a class="dropdown-item" href="{{url('health/sports-orthopedic')}}">Sports Orthopedic</a>
                                      </li>
                                      <li class="dropdown">
                                          <a class="dropdown-item dropdown-toggle" data-toggle="dropdown"
                                              aria-haspopup="true" aria-expanded="false" href="#">Proctology <i class="fas fa-plus"></i></a>
                                          <ul class="dropdown-menu dropdown-menu1">
                                              <li><a class="dropdown-item" href="{{url('health/piles')}}">Piles
                                                      </a></li>
                                              <li><a class="dropdown-item" href="{{url('health/fistula')}}">Fistula
                                                     </a></li>
                                              <li><a class="dropdown-item" href="{{url('health/fissure')}}">Fissure</a></li>
                                                     
                                          </ul>
                                      </li>
                                   
                                      <li class="dropdown">
                                          <a class="dropdown-item dropdown-toggle" data-toggle="dropdown"
                                              aria-haspopup="true" aria-expanded="false" href="#">Laproscopy <i class="fas fa-plus"></i></a>
                                          <ul class="dropdown-menu dropdown-menu1">
                                              <li><a class="dropdown-item" href="{{url('health/hernia')}}">Hernia</a></li>
                                              <li><a class="dropdown-item" href="{{url('health/gallstone')}}">Gallstone</a></li>
                                          </ul>
                                      </li>
                                      <li class="dropdown">
                                          <a class="dropdown-item dropdown-toggle" data-toggle="dropdown"
                                              aria-haspopup="true" aria-expanded="false" href="#">Urology <i class="fas fa-plus"></i></a>
                                          <ul class="dropdown-menu dropdown-menu1">
                                              <li><a class="dropdown-item" href="{{url('health/phimosis')}}">Phimosis</a></li>
                                              <li><a class="dropdown-item" href="{{url('health/kidney-stone')}}">Kidney Stone</a></li>
                                              <li><a class="dropdown-item" href="{{url('health/hydrocele')}}">Hydrocele</a></li>
                                          </ul>
                                      </li>
                                      
                                  </ul>
                          </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="../../beauty.php" id="navbarDropdown1"
                                  role="button" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false"><img src="{{asset('assets/frontend/images/2.png')}}" class="nav-icon"> Beauty <i class="fas fa-chevron-down"></i> </a>
                                  
                                  <ul class="dropdown-menu">
                                      <li class="nav-item">
                                          <a class="dropdown-item" href="{{url('beauty/gynecomastia')}}">Gynecomastia</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="dropdown-item" href="../../beauty/hair-transplant/index.php">Hair Transplant</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="dropdown-item" href="../../beauty/liposuction/index.php">Liposuction</a>
                                      </li>
                                   
                                      
                                  </ul>
                          </li>

                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="../../care.php" id="navbarDropdown1"
                                  role="button" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false"><img src="{{asset('assets/frontend/images/3.png')}}" class="nav-icon"> Care <i class="fas fa-chevron-down"></i> </a>
                                  
                                  <ul class="dropdown-menu">
                                      <li class="nav-item">
                                          <a class="dropdown-item" href="../../care/hair-care/index.php">Hair Care</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="dropdown-item" href="../../care/covid-19/index.php">Covid 19</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="dropdown-item" href="#">Masks & Sanitizers</a>
                                      </li>
                                   
                                      
                                  </ul>
                          </li>
                            <li class="appointment-btn">
                                <a href="tel:+91 97111 44 230" class="btn btn-primary"><i data-feather="phone" class="text-white"></i> +91 97111 44 230</a>
                                <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" class="marker"> <i data-feather="map-pin" class="icon"></i></a>
                            </li>
                          </ul>
                  </div>
              </nav>
              <!--//End Nav menu -->
          </div>
      </div>
  </div>
</nav>