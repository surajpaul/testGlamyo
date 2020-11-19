<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Dashboard - Glamyo</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <meta name="msapplication-TileColor" content="#206bc4"/>
    <meta name="theme-color" content="#206bc4"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="robots" content="noindex,nofollow,noarchive"/>
    <link rel="shortcut icon" href="{{asset('assets/frontend/images/favicon.png')}}">
    <!-- CSS files -->
    <link href="{{asset('assets/backend/libs/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/backend/css/tabler.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/backend/css/demo.min.css')}}" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css"/>
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.semanticui.min.css"/>
    <link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.semanticui.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.0/bootstrap-table.min.css">

    @yield('css')
    <style>
      .paginate_button{
        border: 1px solid #1175b3;
        padding: 0px 7px;
        border-radius: 6px;
        margin: 0px 2px;
      }
      .dataTables_paginate .pagination{
        display: none;
      }
      .pagination{
        margin-top: -9%;
      }
      .dataTables_length{
        display: none;
      }
      .select{
        border: 1px solid #ccc;
        padding: 1px 3px;
        font-family: system-ui;
        outline: none;
        cursor: pointer;
      }
    </style>
</head>
<body class="antialiased">
    <div class="page">
        @include('layouts.backend.partial.header')
        @include('layouts.backend.partial.menu')
        <!-- content -->
        <div class="content">
              @if(session()->has('success'))
              <div class="container" style="flex: 0;">
                <div class="alert alert-success">
                  {{ session()->get('success') }}
                </div>
              </div>
              @endif
            @yield('content')
            @include('layouts.backend.partial.footer')
        </div>
    </div>
    
    <!-- Libs JS -->
    <script src="{{asset('assets/backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/jquery/dist/jquery.slim.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('assets/backend/libs/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('assets/backend/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/backend/vendor/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.semanticui.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.semanticui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="{{asset('assets/backend/vendor/form-elements.js')}}"></script>
    <script>
      jQuery(document).ready(function() {
        Main.init();
        FormElements.init();
      });
      $('.datepicker').datepicker({
        format: 'd-M-yyyy',
        startDate: '-7d'
      });
    </script>
    <script type="text/javascript">
      $('#timepicker1').timepicker();
    </script>
    <!-- Tabler Core -->
    <script src="{{asset('assets/backend/js/tabler.min.js')}}"></script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-revenue-bg'), {
          chart: {
            type: "area",
            fontFamily: 'inherit',
            height: 40.0,
            sparkline: {
              enabled: true
            },
            animations: {
              enabled: false
            },
          },
          dataLabels: {
            enabled: false,
          },
          fill: {
            opacity: .16,
            type: 'solid'
          },
          stroke: {
            width: 2,
            lineCap: "round",
            curve: "smooth",
          },
          series: [{
            name: "Profits",
            data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
          }],
          grid: {
            strokeDashArray: 4,
          },
          xaxis: {
            labels: {
              padding: 0
            },
            tooltip: {
              enabled: false
            },
            axisBorder: {
              show: false,
            },
            type: 'datetime',
          },
          yaxis: {
            labels: {
              padding: 4
            },
          },
          labels: [
            '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
          ],
          colors: ["#206bc4"],
          legend: {
            show: false,
          },
        })).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-new-clients'), {
          chart: {
            type: "line",
            fontFamily: 'inherit',
            height: 40.0,
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
          stroke: {
            width: [2, 1],
            dashArray: [0, 3],
            lineCap: "round",
            curve: "smooth",
          },
          series: [{
            name: "May",
            data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 4, 46, 39, 62, 51, 35, 41, 67]
          },{
            name: "April",
            data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61, 27, 39, 35, 41, 27, 35, 51, 46, 62, 37, 44, 53, 41, 65, 39, 37]
          }],
          grid: {
            strokeDashArray: 4,
          },
          xaxis: {
            labels: {
              padding: 0
            },
            tooltip: {
              enabled: false
            },
            type: 'datetime',
          },
          yaxis: {
            labels: {
              padding: 4
            },
          },
          labels: [
            '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
          ],
          colors: ["#206bc4", "#a8aeb7"],
          legend: {
            show: false,
          },
        })).render();
      });
      // @formatter:on
    </script>
    <script>
      feather.replace()
    </script>
    <script>
      $(document).ready(function() {
          var table = $('#appointment').DataTable( {
              lengthChange: true,
              buttons: ['excel', 'pdf' ]
        } );
        $('div.dataTables_filter').addClass('float-right');
        $('div.dataTables_length').addClass('float-left');
        $('div.dataTables_filter label').addClass('d-inline-flex text-muted');
        $('div.dataTables_filter input').addClass('form-control form-control-sm');
        $('div.dataTables_length label').addClass('d-inline-flex text-muted');
        $('div.dataTables_length select').addClass('form-control form-control-sm');
      });
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-active-users'), {
          chart: {
            type: "bar",
            fontFamily: 'inherit',
            height: 40.0,
            sparkline: {
              enabled: true
            },
            animations: {
              enabled: false
            },
          },
          plotOptions: {
            bar: {
              columnWidth: '50%',
            }
          },
          dataLabels: {
            enabled: false,
          },
          fill: {
            opacity: 1,
          },
          series: [{
            name: "Profits",
            data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
          }],
          grid: {
            strokeDashArray: 4,
          },
          xaxis: {
            labels: {
              padding: 0
            },
            tooltip: {
              enabled: false
            },
            axisBorder: {
              show: false,
            },
            type: 'datetime',
          },
          yaxis: {
            labels: {
              padding: 4
            },
          },
          labels: [
            '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
          ],
          colors: ["#206bc4"],
          legend: {
            show: false,
          },
        })).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-mentions'), {
          chart: {
            type: "bar",
            fontFamily: 'inherit',
            height: 240,
            parentHeightOffset: 0,
            toolbar: {
              show: false,
            },
            animations: {
              enabled: false
            },
            stacked: true,
          },
          plotOptions: {
            bar: {
              columnWidth: '50%',
            }
          },
          dataLabels: {
            enabled: false,
          },
          fill: {
            opacity: 1,
          },
          series: [{
            name: "Web",
            data: [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 12, 5, 8, 22, 6, 8, 6, 4, 1, 8, 24, 29, 51, 40, 47, 23, 26, 50, 26, 41, 22, 46, 47, 81, 46, 6]
          },{
            name: "Social",
            data: [2, 5, 4, 3, 3, 1, 4, 7, 5, 1, 2, 5, 3, 2, 6, 7, 7, 1, 5, 5, 2, 12, 4, 6, 18, 3, 5, 2, 13, 15, 20, 47, 18, 15, 11, 10, 0]
          },{
            name: "Other",
            data: [2, 9, 1, 7, 8, 3, 6, 5, 5, 4, 6, 4, 1, 9, 3, 6, 7, 5, 2, 8, 4, 9, 1, 2, 6, 7, 5, 1, 8, 3, 2, 3, 4, 9, 7, 1, 6]
          }],
          grid: {
            padding: {
              top: -20,
              right: 0,
              left: -4,
              bottom: -4
            },
            strokeDashArray: 4,
            xaxis: {
              lines: {
                show: true
              }
            },
          },
          xaxis: {
            labels: {
              padding: 0
            },
            tooltip: {
              enabled: false
            },
            axisBorder: {
              show: false,
            },
            type: 'datetime',
          },
          yaxis: {
            labels: {
              padding: 4
            },
          },
          labels: [
            '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19', '2020-07-20', '2020-07-21', '2020-07-22', '2020-07-23', '2020-07-24', '2020-07-25', '2020-07-26'
          ],
          colors: ["#206bc4", "#79a6dc", "#bfe399"],
          legend: {
            show: true,
            position: 'bottom',
            height: 32,
            offsetY: 8,
            markers: {
              width: 8,
              height: 8,
              radius: 100,
            },
            itemMargin: {
              horizontal: 8,
            },
          },
        })).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:on
      document.addEventListener("DOMContentLoaded", function() {
        $('#map-world').vectorMap({
          map: 'world_en',
          backgroundColor: 'transparent',
          color: 'rgba(120, 130, 140, .1)',
          borderColor: 'transparent',
          scaleColors: ["#d2e1f3", "#206bc4"],
          normalizeFunction: 'polynomial',
          values: (chart_data = {"af":16, "al":11, "dz":158, "ao":85, "ag":1, "ar":351, "am":8, "au":1219, "at":366, "az":52, "bs":7, "bh":21, "bd":105, "bb":3, "by":52, "be":461, "bz":1, "bj":6, "bt":1, "bo":19, "ba":16, "bw":12, "br":2023, "bn":11, "bg":44, "bf":8, "bi":1, "kh":11, "cm":21, "ca":1563, "cv":1, "cf":2, "td":7, "cl":199, "cn":5745, "co":283, "km":0, "cd":12, "cg":11, "cr":35, "ci":22, "hr":59, "cy":22, "cz":195, "dk":304, "dj":1, "dm":0, "do":50, "ec":61, "eg":216, "sv":21, "gq":14, "er":2, "ee":19, "et":30, "fj":3, "fi":231, "fr":2555, "ga":12, "gm":1, "ge":11, "de":3305, "gh":18, "gr":305, "gd":0, "gt":40, "gn":4, "gw":0, "gy":2, "ht":6, "hn":15, "hk":226, "hu":132, "is":12, "in":1430, "id":695, "ir":337, "iq":84, "ie":204, "il":201, "it":2036, "jm":13, "jp":5390, "jo":27, "kz":129, "ke":32, "ki":0, "kr":986, "undefined":5, "kw":117, "kg":4, "la":6, "lv":23, "lb":39, "ls":1, "lr":0, "ly":77, "lt":35, "lu":52, "mk":9, "mg":8, "mw":5, "my":218, "mv":1, "ml":9, "mt":7, "mr":3, "mu":9, "mx":1004, "md":5, "mn":5, "me":3, "ma":91, "mz":10, "mm":35, "na":11, "np":15, "nl":770, "nz":138, "ni":6, "ne":5, "ng":206, "no":413, "om":53, "pk":174, "pa":27, "pg":8, "py":17, "pe":153, "ph":189, "pl":438, "pt":223, "qa":126, "ro":158, "ru":1476, "rw":5, "ws":0, "st":0, "sa":434, "sn":12, "rs":38, "sc":0, "sl":1, "sg":217, "sk":86, "si":46, "sb":0, "za":354, "es":1374, "lk":48, "kn":0, "lc":1, "vc":0, "sd":65, "sr":3, "sz":3, "se":444, "ch":522, "sy":59, "tw":426, "tj":5, "tz":22, "th":312, "tl":0, "tg":3, "to":0, "tt":21, "tn":43, "tr":729, "tm":0, "ug":17, "ua":136, "ae":239, "gb":2258, "us":4624, "uy":40, "uz":37, "vu":0, "ve":285, "vn":101, "ye":30, "zm":15, "zw":5}),
          onLabelShow: function (event, label, code) {
            if (chart_data[code] > 0) {
              label.append(': <strong>' + chart_data[code] + '</strong>');
            }
          },
        });
      });
      // @formatter:off
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-development-activity'), {
          chart: {
            type: "area",
            fontFamily: 'inherit',
            height: 160,
            sparkline: {
              enabled: true
            },
            animations: {
              enabled: false
            },
          },
          dataLabels: {
            enabled: false,
          },
          fill: {
            opacity: .16,
            type: 'solid'
          },
          title: {
            text: "Development Activity",
            margin: 0,
            floating: true,
            offsetX: 10,
            style: {
              fontSize: '18px',
            },
          },
          stroke: {
            width: 2,
            lineCap: "round",
            curve: "smooth",
          },
          series: [{
            name: "Purchases",
            data: [3, 5, 4, 6, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 8, 4, 14, 30, 17, 19, 15, 14, 25, 32, 40, 55, 60, 48, 52, 70]
          }],
          grid: {
            strokeDashArray: 4,
          },
          xaxis: {
            labels: {
              padding: 0
            },
            tooltip: {
              enabled: false
            },
            axisBorder: {
              show: false,
            },
            type: 'datetime',
          },
          yaxis: {
            labels: {
              padding: 4
            },
          },
          labels: [
            '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
          ],
          colors: ["#206bc4"],
          legend: {
            show: false,
          },
          point: {
            show: false
          },
        })).render();
      });
      // @formatter:on
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        $().peity && $('#sparkline-7').text("56/100").peity("pie", {
          width: 40,
          height: 40,
          stroke: "#cd201f",
          strokeWidth: 2,
          fill: ["#cd201f", "rgba(110, 117, 130, 0.2)"],
          padding: .2,
          innerRadius: 17,
        });
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        $().peity && $('#sparkline-8').text("22/100").peity("pie", {
          width: 40,
          height: 40,
          stroke: "#fab005",
          strokeWidth: 2,
          fill: ["#fab005", "rgba(110, 117, 130, 0.2)"],
          padding: .2,
          innerRadius: 17,
        });
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        $().peity && $('#sparkline-9').text("17, 24, 20, 10, 5, 1, 4, 18, 13").peity("line", {
          width: 64,
          height: 40,
          stroke: "#206bc4",
          strokeWidth: 2,
          fill: ["#d2e1f3"],
          padding: .2,
        });
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        $().peity && $('#sparkline-10').text("13, 11, 19, 22, 12, 7, 14, 3, 21").peity("line", {
          width: 64,
          height: 40,
          stroke: "#206bc4",
          strokeWidth: 2,
          fill: ["#d2e1f3"],
          padding: .2,
        });
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        $().peity && $('#sparkline-11').text("10, 13, 10, 4, 17, 3, 23, 22, 19").peity("line", {
          width: 64,
          height: 40,
          stroke: "#206bc4",
          strokeWidth: 2,
          fill: ["#d2e1f3"],
          padding: .2,
        });
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        $().peity && $('#sparkline-12').text("9, 6, 14, 11, 8, 24, 2, 16, 15").peity("line", {
          width: 64,
          height: 40,
          stroke: "#206bc4",
          strokeWidth: 2,
          fill: ["#d2e1f3"],
          padding: .2,
        });
      });
    </script>
    <script>
      document.body.style.display = "block"
    </script>
  
    <script type="text/javascript">
      function valid()
      {
       if(document.adddoc.npass.value!= document.adddoc.cfpass.value)
      {
      alert("Passwords do not match!");
      document.adddoc.cfpass.focus();
      return false;
      }
      return true;
      }
    </script>

    <script type="text/javascript">
      function valid()
      {
       if(document.registration.password.value!= document.registration.password_again.value)
      {
      alert("Password and Confirm Password Field do not match  !!");
      document.registration.password_again.focus();
      return false;
      }
      return true;
      }
    </script>

    @yield('script')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $.getJSON("http://localhost:81/test/public/api/users", function(data){
      var employee_data = '';
      $.each(data, function(key, value){
        employee_data += '<tr>';
        employee_data += '<td>'+value.id+'</td>';
        employee_data += '<td>'+value.patient+'</td>';
        employee_data += '<td>'+value.phone+'</td>';
        employee_data += '<td>'+value.user.name+'</td>';
        employee_data += '<td>'+value.doctor.name+'</td>';
        employee_data += '<td>'+value.hospital.name+'</td>';
        employee_data += '<td>'+value.room.name+'</td>';
        employee_data += '<td>'+value.test+'</td>';
        employee_data += '<td>'+value.aadhar+'</td>';
        employee_data += '<td>'+value.insurance+'</td>';
        employee_data += '<td>'+value.payment.name+'</td>';
        employee_data += '<td>'+value.on_admission+'</td>';
        employee_data += '<td>'+value.on_discharge+'</td>';
        employee_data += '<td>'+value.billed_amt+'</td>';
        employee_data += '<td>'+value.settled_amt+'</td>';
        employee_data += '<td>'+value.hospital_share+'</td>';
        employee_data += '<td>'+value.glamyo_share+'</td>';
        employee_data += '<td>'+value.doctor_share+'</td>';
        employee_data += '<td>'+value.status+'</td>';
        employee_data += '</tr>';
      });
      $('#ipd').append(employee_data);
    });
  });
</script> -->

</body>
</html>