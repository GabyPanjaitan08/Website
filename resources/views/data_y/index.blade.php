@extends('layout.app')

@section('title', 'Data Data Y')


@section('content')
<h1 class="h3 mb-4 text-gray-800">Daftar Data Pos Curah Hujan</h1>

<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Data Pos Curah Hujan</h6>
        <a href="{{route('data_y.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah
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

            <table class="table table-bordered datatable" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Penjaga Pos</th>
                        <th>Waktu</th>
                        <th>Wilayah</th>
                        <th>Masukan Data</th>
                        <th>Foto</th>
                        <th><i class="fas fa-cogs"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($DataY as $index => $row)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->waktu->nama}}</td>
                        <td>{{$row->wilayah->nama}}</td>
                        <td>{{$row->masukan_data}}</td>
                        <td><img src="/uploads/{{$row->foto}}" alt="" width="150"></td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('data_y.edit', $row->id)}}" class="btn btn-warning mr-2"><i
                                        class="fa fa-edit"></i> Edit</a>
                                <form onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                                    action="{{route('data_y.destroy', $row->id)}}" method="POST">
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
@endsection
