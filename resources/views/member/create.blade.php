@extends('layouts.layout')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Tambah Data</h5>
              </div>
              <div class="card-body">
              <form class="form-horizontal form-label-left" action="{{ route('member.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Foto</label>
                          <div class="col-md-9 pr-1">
                          <input type="file" name="foto" class="form-control" required="" style="background-color: #0000">
                            @if ($errors->has('foto'))
                              <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                              </span>
                          @endif
                          </div>
                        </div>


              <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Lengkap</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="nama" class="form-control"  required>
                          @if ($errors->has('nama'))
                            <span class="help-block">
                              <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


              <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Email</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="email" class="form-control"  required>
                          @if ($errors->has('email'))
                            <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


              <div class="form-group {{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                        <label class="control-label">Jenis Kelamin</label>
                          <br>
                        <label class="radio-inline">
                            <input type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-Laki">Laki-Laki
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan">Perempuan
                        </label>
                          @if ($errors->has('jenis_kelamin'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                            </span>
                          @endif
            </div>




              <div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nomer Hp</label>
                        <div class="col-md-9 pr-1">
                          <input type="number" name="no_hp" class="form-control"  required>
                          @if ($errors->has('no_hp'))
                            <span class="help-block">
                              <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>




                      <div class="form-group {{ $errors->has('lokasi') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Lokasi</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <textarea name="lokasi" class="text" required="">
                          @if ($errors->has('lokasi'))
                            <span class="help-block">
                              <strong>{{ $errors->first('lokasi') }}</strong>
                            </span>
                        @endif
                        </textarea>
                        </div>
                      </div>


                      <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Alamat</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <textarea name="alamat" class="text" required="">
                          @if ($errors->has('alamat'))
                            <span class="help-block">
                              <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
                        </textarea>
                        </div>
                      </div>


                   <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

              </div>
            </div>
          </div>
        </div>
      </div>

@endsection