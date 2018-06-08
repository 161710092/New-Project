@extends('layouts.layout')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Data</h5>
              </div>
              <div class="card-body">
              <form class="form-horizontal form-label-left" action="{{ route('merk.update',$merks->id) }}" method="post" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
              {{ csrf_field() }}

              <div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Logo</label>
                          <div class="col-md-9 pr-1">
                          <input type="file" name="gambar" class="form-control" value="{{$merks->gambar}}" required="" >
                            @if ($errors->has('gambar'))
                              <span class="help-block">
                                <strong>{{ $errors->first('gambar') }}</strong>
                              </span>
                          @endif
                          </div>
                        </div>

              <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Merk</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="nama" class="form-control" value="{{$merks->nama}}"  required>
                          @if ($errors->has('nama'))
                            <span class="help-block">
                              <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


                      <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Deskripsi</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <textarea name="deskripsi" class="ckeditor" value="{{$merks->deskripsi}}" required="">
                          @if ($errors->has('deskripsi'))
                            <span class="help-block">
                              <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
                        </textarea>
                        </div>
                      </div>

                   <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

              </div>
            </div>
          </div>
        </div>
      </div>

@endsection