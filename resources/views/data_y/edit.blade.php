@extends('layout.app')

@section('title', 'Tambah Data Curah Hujan')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Tambah Data Curah Hujan</h1>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Curah Hujan</h6>
                <a href="{{route('data_y.index')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>
                    Kembali</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="{{route('data_y.update', $DataY->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Nama Penjaga Pos</label>
                                <input type="text" class="form-control" name="nama" value="{{$DataY->nama}}"
                                    placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Waktu</label>
                                <select name="waktu_id" id="" class="form-control">
                                    @foreach ($waktus as $item)
                                    <option {{$DataY->waktu_id == $item->id ? 'selected' : ''}}
                                        value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Wilayah</label>
                                <select name="wilayah_id" id="" class="form-control">
                                    @foreach ($wilayahs as $item)
                                    <option {{$DataY->wilayah_id == $item->id ? 'selected' : ''}}
                                        value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Data</label>
                                <input type="text" class="form-control" name="masukan_data" value="{{$DataY->masukan_data}}"
                                    placeholder="masukan_data" required>
                            </div>
                            <div class="form-group">
                                <img src="/uploads/{{$DataY->foto}}" alt="" class="img-fluid">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-submit btn-block btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
@endsection
