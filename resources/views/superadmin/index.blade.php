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

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambah">
        <i class="fa fa-plus"></i>
      </button>


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
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 116px;" aria-label="Office: activate to sort column ascending">Aksi</th>
                </thead>

                <tbody>
                  @foreach($user as $u)
                  <tr role="row" class="odd">
                    <td>{{$u->name}}</td>
                    <td>{{$u->username}}</td>
                    <td>{{$u->email}}</td>
                    <td>
                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalEdit{{$u->id}}"><i class="fa fa-edit"></i></button>   -->
                      <button type="button" class="btn btn-danger mt-1" data-toggle="modal" data-target="#ModalHapus{{$u->id}}"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>

                  <!--  Modal Delete -->

                  <div class="modal fade" id="ModalHapus{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Anda yakin ingin menghapus?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                          <a href="/user/hapus/{{$u->id}}" class="btn btn-primary">Iya</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  @endforeach

                </tbody>
              </table>
            </div>
          </div>

          <!-- Modal Tambah -->
          <div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="card p-3">
                    <form action="{{ route('user.store') }}" method="post">
                      {{csrf_field()}}
                      <div class="row">
                        <div class="col-md-6">
                          <label>Nama Lengkap</label>
                          <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>
                        <div class="col-md-6">
                          <label>NIK</label>
                          <input type="text" name="nik" class="form-control" value="{{ old('nik') }}">
                        </div>
                      </div>

                      <div class="row mt-2">
                        <div class="col-md-6">
                          <label>NIP</label>
                          <input type="text" name="nip" class="form-control" value="{{ old('nip') }}">
                        </div>
                        <div class="col-md-6">
                          <label>User ID</label>
                          <input type="text" name="username" class="form-control" value="{{ old('username') }}">
                        </div>
                      </div>

                      <div class="row mt-2">
                        <div class="col-md-6">
                          <label>Email</label>
                          <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                        </div>
                        <div class="col-md-6">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control">
                        </div>
                      </div>

                      <div class="row m-3">
                        <input type="submit" value="Tambah" class="btn btn-success">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>


          @endsection