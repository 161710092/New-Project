@extends('layouts.layout')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Merk Mobil</h4>
                <div class="panel-title pull-right">
							    <a href="{{route('merk.create')}}">Tambah</a>
						    </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Nomer</th>
                      <th>Logo</th>
                      <th>Nama</th>
                      <th>Deskrpsi</th>
                      <th>Tipe Tersedia</th>
                      <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                                <?php $nomor = 1; ?>
                        @php $no = 1; @endphp
                        @foreach($merks as $data)
                                <tr>
                                  <td>{{ $no++ }}</td>
                                  <td><img src="{{asset('/img/'.$data->gambar.'')}} " width="70" height="70"></td>
                                  <td>{{ $data->nama }}</td>
                                  <td>{{ $data->deskripsi }}</td>
                                  <td>@foreach($data->Tipe as $jd)<li>{{ $jd->nama }}@endforeach</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('merk.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('merk.destroy',$data->id) }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">

                        <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                      
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
@endsection
