@extends('layouts.induk')
@section('konten')


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      @if(count($errors) > 0)
      <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{ $error }} <br />
        @endforeach
      </div>
      @endif
    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Informasi Tender</h6>
    </div>
    <div class="card-body">
      <div class="container mt-4">
        <!-- <a href="/tender/export-pdf" class="btn btn-success mb-4">Export PDF</a> -->
        <a href="/tender/export-excel" class="btn btn-success mb-4">Export Excel</a>
        <table>
          <div class="table-responsive">
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                  <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 162px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Kode Tender</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 248px;" aria-label="Position: activate to sort column ascending">Kode RUP</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">PAGU</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">HPS</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">Satuan Kerja</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">Tahapan</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">Peserta</th>
                  </thead>

                  <tbody>
                    @foreach($informasitender as $it)
                    <tr role="row" class="odd">
                      <td>{{$it->kode_tender}}</td>
                      <td>{{$it->kode_rup}}</td>
                      <td>{{$it->pagu}}</td>
                      <td>{{$it->hps}}</td>
                      <td>{{$it->satuan_kerja}}</td>
                      <td>{{$it->tahap}}</td>
                      <td>{{$it->peserta}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>


            @endsection