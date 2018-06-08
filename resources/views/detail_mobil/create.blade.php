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


              <div class="form-group {{ $errors->has('mobil_id') ? ' has-error' : '' }}">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Mobil</label>
                      <div class="col-md-9 col-sm-9 col-xs-9">
                        <select name="mobil_id" class="form-control">
                          @foreach($a as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                           @endforeach
                        </select>
                          @if ($errors->has('mobil_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobil_id') }}</strong>
                            </span>
                        @endif
                    </div>
                  </div>



<div class="form-group {{ $errors->has('warna') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">warna</label>
                        <div class="col-md-9 pr-1">
                          <input type="color" name="warna" class="form-control"  required>
                          @if ($errors->has('warna'))
                            <span class="help-block">
                              <strong>{{ $errors->first('warna') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>



                <div class="form-group {{ $errors->has('transmisi') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3"></label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="transmisi" class="form-control"  required>
                          @if ($errors->has('transmisi'))
                            <span class="help-block">
                              <strong>{{ $errors->first('transmisi') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


                      <div class="form-group {{ $errors->has('varian') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3"></label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="varian" class="form-control"  required>
                          @if ($errors->has('varian'))
                            <span class="help-block">
                              <strong>{{ $errors->first('varian') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


<div class="form-group {{ $errors->has('cakupan_mesin') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3"></label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="cakupan_mesin" class="form-control"  required>
                          @if ($errors->has('cakupan_mesin'))
                            <span class="help-block">
                              <strong>{{ $errors->first('cakupan_mesin') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


<div class="form-group {{ $errors->has('penumpang') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3"></label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="penumpang" class="form-control"  required>
                          @if ($errors->has('penumpang'))
                            <span class="help-block">
                              <strong>{{ $errors->first('penumpang') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


                      <div class="form-group {{ $errors->has('') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3"></label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="" class="form-control"  required>
                          @if ($errors->has(''))
                            <span class="help-block">
                              <strong>{{ $errors->first('') }}</strong>
                            </span>
                        @endif
                        </div>
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
