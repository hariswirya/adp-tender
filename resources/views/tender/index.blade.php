@extends('layouts.induk')
@section('konten')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- Tender Belum Berjalan Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Tender Belum Berjalan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$blmtender}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-cog fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tender Sedang Berjalan Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tender Sedang Berjalan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$sdgtender}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-hourglass-start fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tender Telah Selesai Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tender Telah Selesai</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$sdhtender}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tender Gagal Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Tender Gagal</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$ggltender}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-times fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Total Tender Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Tender</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_tender}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clone fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
<div class="row">
<div class="col-xl-12 p-3">

<!-- Resources -->
<script src="{{ asset('amChart/core.js') }}"></script>
<script src="{{ asset('amChart/chart.js') }}"></script>
<script src="{{ asset('amChart/animated.js') }}"></script>

<!-- Chart code -->

<!-- HTML -->
<div id="chartdiv"></div>
</div>
</div>
        </div>
        <!-- /.container-fluid -->
    @endsection