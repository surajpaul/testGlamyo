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
                  <div class="subheader">Active Appointments</div>
                  <div class="ml-auto lh-1"> 
                    <div class="dropdown">
                      <a class=" text-muted">
                        <!-- Last Month -->
                      </a>
                    </div>
                  </div>
                </div>              
                <div class="h3  mb-1 mt-2"> OPD : <a class="text-success" href="{{route('admin.opd.index')}}">{{$opd_active->count()}} opds</a></div>
                  <div class="h3 mb-3"> IPD : <a class="text-success" href="{{route('admin.ipd.index')}}">{{$ipd_active->count()}} ipds</a></div>
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
                  <div class="subheader">Completed Appointments</div>
                  <div class="ml-auto lh-1"> 
                    <div class="dropdown">
                      <a class=" text-muted">
                        <!-- Last Month -->
                      </a>
                    </div>
                  </div>
                </div>                                        
                <div class="h3 mb-1 mt-2">  OPD : <a class="text-success" href="{{route('admin.opd.index')}}">{{$opd_complete->count()}} opds </a></div>
                <div class="h3 mb-3"> IPD : <a class="text-success" href="{{route('admin.ipd.index')}}">{{$ipd_complete->count()}} ipds </a></div>
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
                  <div class="subheader">Cancelled Appointments</div>
                  <div class="ml-auto lh-1"> 
                    <div class="dropdown">
                      <a class=" text-muted">
                        <!-- Last Month -->
                      </a>
                    </div>
                  </div>
                </div>                                        
                <div class="h3  mb-1 mt-2"> OPD : <a class="text-success" href="{{route('admin.opd.index')}}">{{$opd_cancel->count()}} opds</a></div>
                <div class="h3 mb-3"> IPD : <a class="text-success" href="{{route('admin.ipd.index')}}">{{$ipd_cancel->count()}} ipds</a></div>               
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
                <div class="h3  mb-1 mt-2">Total Users : <a href="{{route('admin.user.index')}}" class="text-success">{{$users->count()}} Users</a></div>
                <div class="h3 mb-1">Total Doctors : <a href="{{route('admin.doctor.index')}}" class="text-success">{{$doctors->count()}} Doctors</a></div>
                <div class="h3 mb-1">Total Hospitals : <a href="{{route('admin.hospital.index')}}" class="text-success">{{$hospitals->count()}} Hospitals</a></div>
              </div>
            </div>
          </div>
        

          <!-- underwork -->
          <div class="col-md-12 col-12 d-block" align="right">
            <select class="select">
              <option value="overall">Overall</option>
              <option value="month">This Month</option>
            </select>
          </div>
          <div class="col-dm-12 col-12">
            <div class="card">
              <div class="table-responsive">
                <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
                  <thead>
                    <tr>
                      <th class="text-center w-1"><i class="icon-people"></i></th>
                      <th>Users</th>
                      <th>IPD</th>
                      <th>OPD</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    <tr class="box overall">
                      <td class="text-center">
                        <div class="avatar d-block" style="background-image: url('{{asset('assets/backend/img/static/admin-avatar.png')}}')">
                          <span class="avatar-status bg-green"></span>
                        </div>
                      </td>
                      <td>
                        <div>{{$user->name}}</div>
                        <div class="small text-muted">
                          {{$user->email}}
                        </div>
                      </td>
                      <td>
                        <div class="clearfix">
                          <div class="float-left">
                            <strong>
                              <?php
                              echo $ipd->where('user_id', $user->id)->count();

                              $ipdPercentage = ((($ipd->where('user_id', $user->id)->count())*100)/$ipd->count());
                              $opdPercentage = ((($opd->where('user_id', $user->id)->count())*100)/$opd->count());
                              ?>
                            </strong>
                          </div>
                          <div class="float-right">
                            <small class="text-muted">Overall</small>
                          </div>
                        </div>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-green" role="progressbar" style="width:<?php echo $ipdPercentage?>%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td style="border-right: 1px solid #ccc;">
                        <div class="clearfix">
                          <div class="float-left">
                            <strong>
                              <?php
                              echo $opd->where('user_id', $user->id)->count();
                              ?>
                            </strong>
                          </div>
                          <div class="float-right">
                            <small class="text-muted">Overall</small>
                          </div>
                        </div>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-blue" role="progressbar" style="width:<?php echo $opdPercentage?>%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                    </tr>
                    @endforeach

                    @foreach($users as $user)
                    <tr class="box month">
                      <td class="text-center">
                        <div class="avatar d-block" style="background-image: url('{{asset('assets/backend/img/static/admin-avatar.png')}}')">
                          <span class="avatar-status bg-green"></span>
                        </div>
                      </td>
                      <td>
                        <div>{{$user->name}}</div>
                        <div class="small text-muted">
                          {{$user->email}}
                        </div>
                      </td>
                      <td>
                        <div class="clearfix">
                          <div class="float-left">
                            <strong>
                              <?php
                              echo $ipdThisMonth->where('user_id', $user->id)->count();

                              $ipdThisMonthPercentage = ((($ipdThisMonth->where('user_id', $user->id)->count())*100)/$ipdThisMonth->count());
                              $opdThisMonthPercentage = ((($opdThisMonth->where('user_id', $user->id)->count())*100)/$opdThisMonth->count());
                              ?>
                            </strong>
                          </div>
                          <div class="float-right">
                            <small class="text-muted">This Month</small>
                          </div>
                        </div>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-green" role="progressbar" style="width:<?php echo $ipdThisMonthPercentage?>%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td style="border-right: 1px solid #ccc;">
                        <div class="clearfix">
                          <div class="float-left">
                            <strong>
                              <?php
                              echo $opdThisMonth->where('user_id', $user->id)->count();
                              ?>
                            </strong>
                          </div>
                          <div class="float-right">
                            <small class="text-muted">This Month</small>
                          </div>
                        </div>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-blue" role="progressbar" style="width:<?php echo $opdThisMonthPercentage?>%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-xl-8 col-12">
            <div class="card">
              <div class="card-body">
                <div id="chart-temperature"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xl-4 col-md-4 col-12">
            <div class="card">
              <div class="card-body">
                <div id="chart-total-sales"></div>
              </div>
            </div>
          </div>
          <!-- underwork end -->
        </div>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-temperature'), {
      chart: {
        type: "line",
        fontFamily: 'inherit',
        height: 240,
        parentHeightOffset: 0,
        toolbar: {
          show: false,
        },
        animations: {
          enabled: false
        },
      },
      fill: {
        opacity: 1,
      },
      stroke: {
        width: 2,
        lineCap: "round",
        curve: "smooth",
      },
      series: [{
        name: "Tokyo",
        data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
      },{
        name: "London",
        data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
      }],
      grid: {
        padding: {
          top: -20,
          right: 0,
          left: -4,
          bottom: -4
        },
        strokeDashArray: 4,
      },
      dataLabels: {
        enabled: true,
      },
      xaxis: {
        labels: {
          padding: 0
        },
        tooltip: {
          enabled: false
        },
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      },
      yaxis: {
        labels: {
          padding: 4
        },
      },
      colors: ["#206bc4", "#5eba00"],
      legend: {
        show: false,
      },
      markers: {
        size: 2
      },
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-total-sales'), {
      chart: {
        type: "donut",
        fontFamily: 'inherit',
        height: 240,
        sparkline: {
          enabled: true
        },
        animations: {
          enabled: false
        },
      },
      fill: {
        opacity: 1,
      },
      series: [44, 55, 12, 2],
      labels: ["Direct", "Affilliate", "E-mail", "Other"],
      grid: {
        strokeDashArray: 4,
      },
      colors: ["#206bc4", "#79a6dc", "#bfe399", "#e9ecf1"],
      legend: {
        show: false,
      },
      tooltip: {
        fillSeriesColor: false
      },
    })).render();
  });
  // @formatter:on
</script>

    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('.box').hide();
    $('.overall').show();
});
$('.select').change(function() {
    $('.box').hide();
    $('.' + $(this).val()).show();
});
</script>
@endsection