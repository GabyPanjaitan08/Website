@extends('layout.app')

@section('title', 'Tambah Data Klimatologi')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Tambah Data Klimatologi</h1>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Data Klimatologi</h6>
                <a href="{{route('data_z.index')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>
                    Kembali</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="{{route('data_z.update', $DataZ->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Nama Penjaga Pos</label>
                                <input type="text" class="form-control" name="nama" value="{{$DataZ->nama}}"
                                    placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Waktu</label>
                                <select name="waktu_id" id="" class="form-control">
                                    @foreach ($waktus as $item)
                                    <option {{$DataZ->waktu_id == $item->id ? 'selected' : ''}}
                                        value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Wilayah</label>
                                <select name="wilayah_id" id="" class="form-control">
                                    @foreach ($wilayahs as $item)
                                    <option {{$DataZ->wilayah_id == $item->id ? 'selected' : ''}}
                                        value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">thermometer max</label>
                                <input type="text" class="form-control" name="thermometer_max"
                                    value="{{$DataZ->thermometer_max}}" placeholder="thermometer_max">
                            </div>
                            <div class="form-group">
                                <img src="/uploads/{{$DataZ->foto_1}}" alt="" class="img-fluid">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_1">
                            </div>
                            <div class="form-group">
                                <label for="">thermometer min</label>
                                <input type="text" class="form-control" name="thermometer_min"
                                    value="{{$DataZ->thermometer_min}}" placeholder="thermometer_min">
                            </div>
                            <div class="form-group">
                                <img src="/uploads/{{$DataZ->foto_2}}" alt="" class="img-fluid">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_2">
                            </div>
                            <div class="form-group">
                                <label for="">pcsychrometer standar bola kering</label>
                                <input type="text" class="form-control" name="pcsychrometer_standar_bola_kering"
                                    value="{{$DataZ->pcsychrometer_standar_bola_kering}}"
                                    placeholder="pcsychrometer_standar_bola_kering">
                            </div>
                            <div class="form-group">
                                <img src="/uploads/{{$DataZ->foto_3}}" alt="" class="img-fluid">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_3">
                            </div>
                            <div class="form-group">
                                <label for="">pcsychrometer standar bola basah</label>
                                <input type="text" class="form-control" name="pcsychrometer_standar_bola_basah"
                                    value="{{$DataZ->pcsychrometer_standar_bola_basah}}"
                                    placeholder="pcsychrometer_standar_bola_basah">
                            </div>
                            <div class="form-group">
                                <img src="/uploads/{{$DataZ->foto_4}}" alt="" class="img-fluid">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_4">
                            </div>
                            <div class="form-group">
                                <label for="">thermometer apung max</label>
                                <input type="text" class="form-control" name="thermometer_apung_max"
                                    value="{{$DataZ->thermometer_apung_max}}" placeholder="thermometer_apung_max">
                            </div>
                            <div class="form-group">
                                <img src="/uploads/{{$DataZ->foto_5}}" alt="" class="img-fluid">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_5">
                            </div>
                            <div class="form-group">
                                <label for="">thermometer min</label>
                                <input type="text" class="form-control" name="thermometer_min_tanpa_gambar"
                                    value="{{$DataZ->thermometer_min_tanpa_gambar}}"
                                    placeholder="thermometer_min">
                            </div>
                            <div class="form-group">
                                <label for="">penguapan ditambah</label>
                                <input type="text" class="form-control" name="penguapan_ditambah"
                                    value="{{$DataZ->penguapan_ditambah}}" placeholder="penguapan_ditambah">
                            </div>
                            <div class="form-group">
                                <img src="/uploads/{{$DataZ->foto_6}}" alt="" class="img-fluid">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_6">
                            </div>
                            <div class="form-group">
                                <label for="">penguapan dibuang</label>
                                <input type="text" class="form-control" name="penguapan_dibuang"
                                    value="{{$DataZ->penguapan_dibuang}}" placeholder="penguapan_dibuang">
                            </div>
                            <div class="form-group">
                                <img src="/uploads/{{$DataZ->foto_7}}" alt="" class="img-fluid">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_7">
                            </div>
                            <div class="form-group">
                                <label for="">penguapan</label>
                                <input type="text" class="form-control" name="penguapan" value="{{$DataZ->penguapan}}"
                                    placeholder="penguapan">
                            </div>
                            <div class="form-group">
                                <img src="/uploads/{{$DataZ->foto_8}}" alt="" class="img-fluid">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_8">
                            </div>
                            <div class="form-group">
                                <label for="">anemometer angin</label>
                                <input type="text" class="form-control" name="anemometer_angin"
                                    value="{{$DataZ->anemometer_angin}}" placeholder="anemometer_angin">
                            </div>
                            <div class="form-group">
                                <img src="/uploads/{{$DataZ->foto_9}}" alt="" class="img-fluid">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_9">
                            </div>
                            <div class="form-group">
                                <label for="">hujan manual</label>
                                <input type="text" class="form-control" name="hujan_manual"
                                    value="{{$DataZ->hujan_manual}}" placeholder="hujan_manual">
                            </div>
                            <div class="form-group">
                                <img src="/uploads/{{$DataZ->foto_10}}" alt="" class="img-fluid">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_10">
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
