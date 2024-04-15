@extends('layout.app')

@section('title', 'Data Data Pos Klimatologi')


@section('content')
<h1 class="h3 mb-4 text-gray-800">Daftar Data Pos Klimatologi</h1>

<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Data Pos Klimatologi</h6>
        <a href="{{route('data_z.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah
            Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            @if ($message = Session::get('message'))
            <div class="alert alert-success">
                <strong>Berhasil</strong>
                <p>{{$message}}</p>
            </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered datatable" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Penjaga Pos</th>
                            <th>Waktu</th>
                            <th>Wilayah</th>
                            <th>thermometer max</th>
                            <th>Foto</th>
                            <th>thermometer min</th>
                            <th>Foto</th>
                            <th>pcsychrometer standar bola kering</th>
                            <th>Foto</th>
                            <th>pcsychrometer standar bola basah</th>
                            <th>Foto</th>
                            <th>thermometer apung max</th>
                            <th>Foto</th>
                            <th>thermometer min</th>
                            <th>penguapan ditambah</th>
                            <th>Foto</th>
                            <th>penguapan dibuang</th>
                            <th>Foto</th>
                            <th>penguapan</th>
                            <th>Foto</th>
                            <th>anemometer angin</th>
                            <th>Foto</th>
                            <th>hujan manual</th>
                            <th>Foto</th>
                            <th><i class="fas fa-cogs"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($DataZ as $index => $row)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->waktu->nama}}</td>
                            <td>{{$row->wilayah->nama}}</td>
                           <td>{{$row->thermometer_max}}</td>
                           <td><img src="/uploads/{{$row->foto_1}}" alt="" width="150"></td>
                           <td>{{$row->thermometer_min}}</td>
                           <td><img src="/uploads/{{$row->foto_2}}" alt="" width="150"></td>
                           <td>{{$row->pcsychrometer_standar_bola_kering}}</td>
                           <td><img src="/uploads/{{$row->foto_3}}" alt="" width="150"></td>
                           <td>{{$row->pcsychrometer_standar_bola_basah}}</td>
                           <td><img src="/uploads/{{$row->foto_4}}" alt="" width="150"></td>
                           <td>{{$row->thermometer_apung_max}}</td>
                           <td><img src="/uploads/{{$row->foto_5}}" alt="" width="150"></td>
                           <td>{{$row->thermometer_min_tanpa_gambar}}</td>
                           <td>{{$row->penguapan_ditambah}}</td>
                           <td><img src="/uploads/{{$row->foto_6}}" alt="" width="150"></td>
                           <td>{{$row->penguapan_dibuang}}</td>
                           <td><img src="/uploads/{{$row->foto_7}}" alt="" width="150"></td>
                           <td>{{$row->penguapan}}</td>
                           <td><img src="/uploads/{{$row->foto_8}}" alt="" width="150"></td>
                           <td>{{$row->anemometer_angin}}</td>
                           <td><img src="/uploads/{{$row->foto_9}}" alt="" width="150"></td>
                           <td>{{$row->hujan_manual}}</td>
                           <td><img src="/uploads/{{$row->foto_10}}" alt="" width="150"></td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{route('data_z.edit', $row->id)}}" class="btn btn-warning mr-2"><i
                                            class="fa fa-edit"></i> Edit</a>
                                    <form onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                                        action="{{route('data_z.destroy', $row->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>
                                            Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
