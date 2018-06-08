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
              <form class="form-horizontal form-label-left" action="{{ route('tipe.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Tipe</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="nama" class="form-control"  required>
                          @if ($errors->has('nama'))
                            <span class="help-block">
                              <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


                      <div class="form-group {{ $errors->has('merk_id') ? ' has-error' : '' }}">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Daftar Merk</label>
                      <div class="col-md-9 col-sm-9 col-xs-9">
                        <select name="merk_id" class="form-control">
                          @foreach($tipes as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                           @endforeach
                        </select>
                          @if ($errors->has('merk_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('merk_id') }}</strong>
                            </span>
                        @endif
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