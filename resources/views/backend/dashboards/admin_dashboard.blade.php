@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">NFM 3 Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

      <div class="row">
        <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$states ?? '0'}}</h3>

                <p>State</p>
              </div>
              <div class="icon">
                <i class="ion ion-map"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$lgas ?? '0'}}<sup style="font-size: 20px"></sup></h3>

                <p>LGA</p>
              </div>
              <div class="icon">
                <i class="ion ion-map"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$wards ?? '0'}}</h3>

                <p>Ward</p>
              </div>
              <div class="icon">
                <i class="ion ion-map"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$health_facilities ?? '0'}}</h3>

                <p>Health Facilities</p>
              </div>
              <div class="icon">
                <i class="ion ion-medkit"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$spos ?? '0'}}</h3>

                <p>SPOs</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$cbos ?? '0'}}<sup style="font-size: 20px"></sup></h3>

                <p>CBOs</p>
              </div>
              <div class="icon">
                <i class="fa fa-building"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
       </div>
      </div>

    <div class="row">          
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{$cats ?? '0'}}</h3>

                <p>CATs</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{$client_exits ?? '0'}}</h3>

                <p>CEI Conducted</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{$remedial ?? '0'}}</h3>

                <p>Remedial Feedback</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>0</h3>

                <p>Entry FGD</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>0</h3>

                <p>Exit FGD</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>0</h3>

                <p>KII</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
  </div>
        <!-- /.row -->

       <legend>CEI Extracts</legend>

    <div class="row">
        
        <div class="col-md-3 col-sm-6 col-xs-12">
        
         
          <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$llin_recipients ?? '0'}}</h3>

                <p>LLIN Recipients</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
            </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-2 col-sm-6 col-xs-12">
        <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$act_recipients ?? '0'}}</h3>

                <p>ACT Recipients</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
            </div>
         
        </div>
        <!-- /.col -->
        <div class="col-md-2 col-sm-6 col-xs-12">
        <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$ipt_recipients ?? '0'}}</h3>

                <p>IPT Recipients</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
            </div>
         
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-2 col-sm-6 col-xs-12">
        <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$sp_recepients ?? '0'}}</h3>

                <p>SP Recipients</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
            </div>
         
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$sp_recepients ?? '0'}}</h3>

                <p>SMC Recipients</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
            </div>
          
        </div>
        <!-- /.col -->

        <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$pregnant_women ?? '0'}}</h3>

                <p>Pregnant Women Tested For Malaria</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
            </div>
         
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$pregnant_women ?? '0'}}</h3>

                <p>Pregnant Women Who Tested +ve</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
            </div>
         
        </div>
       
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="small-box bg-success">
              <div class="inner">
                <h3>0</h3>

                <p>Total Malaria Test Conducted</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
            </div>
         
       </div>
       

      </div>
  <!-- Main row -->
  <legend>Remedial Feedback Extracts</legend>
      <div class="row">
       
        <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="small-box bg-secondary">
              <div class="inner">
                <h3>0</h3>

                <p>Total Issues Identified</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
            </div>
         
       </div>
       <div class="col-md-4 col-sm-6 col-xs-12">
       <div class="small-box bg-secondary">
              <div class="inner">
                <h3>0</h3>

                <p>Total Issues Resolved</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
            </div>
         
       </div>
       <div class="col-md-4 col-sm-6 col-xs-12">
       <div class="small-box bg-secondary">
              <div class="inner">
                <h3>0</h3>

                <p>Unresolved Issues</p>
              </div>
              <div class="icon">
                <i class="fa fa-file"></i>
              </div>
            </div>
         
       </div>
       
     
      
      </div>
        <!-- /.row (main row) -->
       <legend>Other Activities</legend>
      <div class="row">
       
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Entry FGD Conducted</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
       </div>
       <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Exit FGD Conducted</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
       </div>
       <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Community KII Conducted</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
       </div>

       <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-hospital"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Facility KII Conducted</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
       </div>
      
      </div> 
        <div class="row">
          <div class="col-md-6">
            <!-- AREA CHART -->


            <!-- DONUT CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Malaria Cases</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- PIE CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Issues Identified Vs Resolved Issues</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Area Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col (LEFT) -->
          <div class="col-md-6">
            <!-- LINE CHART -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- BAR CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Total Malaria Cases Vs Positive Cases</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- STACKED BAR CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Total Malaria Cases Vs Positive Cases</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col (RIGHT) -->
        </div>
      </div><!-- /.container-fluid -->
    
    
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('js')
<script>
    $(function () {
      /* ChartJS
       * -------
       * Here we will create a few charts using ChartJS
       */

      //--------------
      //- AREA CHART -
      //--------------

      // Get context with jQuery - using jQuery's .get() method.
      var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

      var areaChartData = {
        labels  : ['Ogun', 'Osun', 'Gombe', 'Kano'],
        datasets: [
          {
            label               : 'Satisfied',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [{{$tested_malaria ?? '0'}}]
          },
          {
            label               : 'Dissatisfied',
            backgroundColor     : 'rgba(210, 214, 222, 1)',
            borderColor         : 'rgba(210, 214, 222, 1)',
            pointRadius         : false,
            pointColor          : 'rgba(210, 214, 222, 1)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [{{$positive_malaria ?? '0'}}]
          },
        ]
      }

      var areaChartOptions = {
        maintainAspectRatio : false,
        responsive : true,
        legend: {
          display: false
        },
        scales: {
          xAxes: [{
            gridLines : {
              display : false,
            }
          }],
          yAxes: [{
            gridLines : {
              display : false,
            }
          }]
        }
      }

      // This will get the first returned node in the jQuery collection.
      var areaChart       = new Chart(areaChartCanvas, {
        type: 'line',
        data: areaChartData,
        options: areaChartOptions
      })

      //-------------
      //- LINE CHART -
      //--------------
      var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
      var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
      var lineChartData = jQuery.extend(true, {}, areaChartData)
      lineChartData.datasets[0].fill = false;
      lineChartData.datasets[1].fill = false;
      lineChartOptions.datasetFill = false

      var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions
      })

      //-------------
      //- DONUT CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
      var donutData        = {
        labels: [
            'Malaria Services',
            'ACT Recipients',
            'Positive Cases',
           
        ],
        datasets: [
          {
            data: [{{$tested_malaria ?? '0'}},{{$act_recipients ?? '0'}},{{$positive_malaria ?? '0'}}],
            backgroundColor : ['#f56954', '#00a65a', '#00004a'],
          }
        ]
      }
      var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })

      //-------------
      //- PIE CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
      var pieData        = {
        labels: [
            'Issues Identified',
            'Issues Resolved',
            
           
        ],
        datasets: [
          {
            data: [{{$tested_malaria ?? '0'}},{{$act_recipients ?? '0'}}],
            backgroundColor : ['#f56954', '#00a65a'],
          }
        ]
      }
      var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var pieChart = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
      })

      //-------------
      //- BAR CHART -
      //-------------
      var barChartCanvas = $('#barChart').get(0).getContext('2d')
      var barChartData = {
        labels  : ['Ogun', 'Osun', 'Gombe', 'Kano'],
        datasets: [
          {
            label               : 'Satisfied',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [{{$tested_malaria ?? '0'}}]
          },
          {
            label               : 'Dissatisfied',
            backgroundColor     : 'rgba(210, 214, 222, 1)',
            borderColor         : 'rgba(210, 214, 222, 1)',
            pointRadius         : false,
            pointColor          : 'rgba(210, 214, 222, 1)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [{{$positive_malaria ?? '0'}}]
          },
        ]
      }
      var temp0 = areaChartData.datasets[0]
      var temp1 = areaChartData.datasets[1]
      barChartData.datasets[0] = temp1
      barChartData.datasets[1] = temp0

      var barChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        datasetFill             : false
      }

      var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
      })

      //---------------------
      //- STACKED BAR CHART -
      //---------------------
      var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
      var stackedBarChartData = {
        labels  : ['Ogun', 'Osun', 'Gombe', 'Kano'],
        datasets: [
          {
            label               : 'Postive Cases',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [{{$tested_malaria ?? '0'}}]
          },
          {
            label               : 'Tested Cases',
            backgroundColor     : '#f56954',
            borderColor         : 'rgba(210, 214, 222, 1)',
            pointRadius         : false,
            pointColor          : 'rgba(210, 214, 222, 1)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [{{$positive_malaria ?? '0'}}]
          },
        ]
      }

      var stackedBarChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        scales: {
          xAxes: [{
            stacked: true,
          }],
          yAxes: [{
            stacked: true
          }]
        }
      }

      var stackedBarChart = new Chart(stackedBarChartCanvas, {
        type: 'bar',
        data: stackedBarChartData,
        options: stackedBarChartOptions
      })
    })
  </script>
@endsection
