@extends('layouts.backend.app')

@section('content')
    <div class="container-xl">
        <div class="page-header">
            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                  Overview
                </div>
                <h2 class="page-title">
                  {{ Auth::user()->role->name }} Dashboard
                </h2>
              </div>
            </div>
        </div>
        <div class="row row-deck row-cards">
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="subheader">Active</div>
                  <div class="ml-auto lh-1"> 
                    <div class="dropdown">
                      <a class=" text-muted">
                        Last Month
                      </a>
                    </div>
                  </div>
                </div>              
                <div class="h3  mb-1 mt-2"> OPD : 8</div>
                  <div class="h3 mb-3"> IPD : 13</div>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-blue" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">75% Complete</span>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="subheader">Completed</div>
                  <div class="ml-auto lh-1"> 
                    <div class="dropdown">
                      <a class=" text-muted">
                        Last Month
                      </a>
                    </div>
                  </div>
                </div>                                        
                <div class="h3 mb-1 mt-2">  OPD : 1</div>
                                    <div class="h3 mb-3"> IPD : 1</div>
             
                <div class="progress progress-sm">
                  <div class="progress-bar bg-blue" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <span class="sr-only">90% Complete</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="subheader">Cancelled</div>
                  <div class="ml-auto lh-1"> 
                    <div class="dropdown">
                      <a class=" text-muted">
                        Last Month
                      </a>
                    </div>
                  </div>
                </div>                                        
                <div class="h3  mb-1 mt-2"> OPD : 1</div>
                <div class="h3 mb-3"> IPD : 13</div>               
                <div class="progress progress-sm">
                  <div class="progress-bar bg-blue" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <span class="sr-only">20% Complete</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="subheader">Active Users</div>
                </div>                                        
                <div class="h3  mb-1 mt-2"> Users : 1</div>
                <div class="h3 mb-1"> Doctors : 30</div>
                <div class="h3 mb-1"> Hospitals : 3</div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection