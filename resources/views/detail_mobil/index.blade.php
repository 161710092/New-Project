@extends('layouts.layout')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Merk Mobil</h4>
                <div class="panel-title pull-right">
                  <a href="{{route('tipe.create')}}">Tambah</a>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Nomer</th>
                      <th>Nama Mobil</th>
                      <th>Warna</th>
                      <th>Transmisi</th>
                      <th>Varian</th>
                      <th>Cakupan Mesin</th>
                      <th>Penumpang</th>
                      <th>Kilometer</th>
                      <th>Tahun Keluar</th>
                      <th>Harga</th>
                      <th>Deskripsi</th>
                      <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                                <?php $nomor = 1; ?>
                        @php $no = 1; @endphp
                        @foreach($a as $data)
                                <tr>
                                  <td>{{ $no++ }}</td>
                                  <td>{{ $data->nama }}</td>
                                  <td>{{ $data->warna }}</td>
                                  <td>{{ $data->transmisi }}</td>
                                  <td>{{ $data->varian }}</td>
                                  <td>{{ $data->cakupan_mesin }} cc</td>
                                  <td>max : {{ $data->penumpang }} orang</td>
                                  <td>{{ $data->kilometer }} Km/jam</td>
                                  <td>{{ $data->tahun_keluar }}</td>
                                  <td><?php echo 'Rp.'. number_format($data->harga)?></td>
                                  <td>{!! $data->penumpang !!}</td>
                                  <td>
                            <a class="btn btn-success" href="{{ route('merk.show',$data->id) }}">Show</a>
                        </td>
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
