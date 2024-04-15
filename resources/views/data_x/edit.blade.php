@extends('layout.app')

@section('title', 'Tambah Data Kerusakan')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Tambah Data X</h1>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kerusakan</h6>
                <a href="{{route('data_x.index')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>
                    Kembali</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="{{route('data_x.update', $DataX->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Nama Penjaga Pos</label>
                                <input type="text" class="form-control" name="nama" value="{{$DataX->nama}}"
                                    placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Waktu</label>
                                <select name="waktu_id" id="" class="form-control">
                                    @foreach ($waktus as $item)
                                    <option {{$DataX->waktu_id == $item->id ? 'selected' : ''}}
                                        value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Wilayah</label>
                                <select name="wilayah_id" id="" class="form-control">
                                    @foreach ($wilayahs as $item)
                                    <option {{$DataX->wilayah_id == $item->id ? 'selected' : ''}}
                                        value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" value="{{$DataX->keterangan}}"
                                    placeholder="Keterangan" required>
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
