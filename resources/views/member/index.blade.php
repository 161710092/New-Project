@extends('layouts.layout')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Member Mobil</h4>
          <div class="panel-title pull-right">
							<a href="{{route('member.create')}}">Tambah</a>
						</div>
        </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Nomer</th>
                      <th>Foto</th>
                      <th>Nama</th>
                      <th>email</th>
                      <th>Jenis Kelamin</th>
                      <th>No Hp</th>
                      <th>Lokasi</th>
                      <th>Alamat</th>
                      <th>Mobil</th>
                      <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                                <?php $nomor = 1; ?>
                        @php $no = 1; @endphp
                        @foreach($members as $data)
                                <tr>
                                  <td>{{ $no++ }}</td>
                                  <td><img src="{{asset('/img/'.$data->foto.'')}} " width="70" height="70"></td>
                                  <td>{{ $data->nama }}</td>
                                  <td>{{ $data->email }}</td>
                                  <td>{{ $data->jenis_kelamin }}</td>
                                  <td>{{ $data->no_hp }}</td>
                                  <td>{{ $data->lokasi }}</td>
                                  <td>{{ $data->alamat }}</td>
                                  <td>@foreach($data->Mobil as $jd)<li>{{ $jd->nama }}@endforeach</td>

                                  <td>
                            <a class="btn btn-success" href="{{ route('member.show',$data->id) }}">Show</a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('member.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('member.destroy',$data->id) }}">
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
