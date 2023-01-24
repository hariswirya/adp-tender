@extends('layouts.induk')
@section('title', 'ADP - User')
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
      <h6 class="m-0 font-weight-bold text-primary">Tabel User</h6>
    </div>
    <div class="card-body">

      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambah">
        <i class="fa fa-plus"></i>
      </button> -->


      <table>
        <div class="table-responsive">
          <div class="row">
            <div class="col-sm-12">
              <table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                <thead>
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 162px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Nama</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">User ID</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">Email</th>
                </thead>

                <tbody>
                  @foreach($user as $u)
                  <tr role="row" class="odd">
                    <td>{{$u->name}}</td>
                    <td>{{$u->username}}</td>
                    <td>{{$u->email}}</td>
                  </tr>

                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          @endsection