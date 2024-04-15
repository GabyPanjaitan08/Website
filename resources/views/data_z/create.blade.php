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
                        <form action="{{route('data_z.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Penjaga Pos</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Waktu</label>
                                <select name="waktu_id" id="" class="form-control">
                                    @foreach ($waktus as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Wilayah</label>
                                <select name="wilayah_id" id="" class="form-control">
                                    @foreach ($wilayahs as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">thermometer max</label>
                                <input type="text" class="form-control" name="thermometer_max"
                                    placeholder="thermometer max">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_1" required>
                            </div>
                            <div class="form-group">
                                <label for="">thermometer min</label>
                                <input type="text" class="form-control" name="thermometer_min"
                                    placeholder="thermometer min">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_2" required>
                            </div>
                            <div class="form-group">
                                <label for="">pcsychrometer standar bola kering</label>
                                <input type="text" class="form-control" name="pcsychrometer_standar_bola_kering"
                                    placeholder="pcsychrometer standar bola kering">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_3" required>
                            </div>
                            <div class="form-group">
                                <label for="">pcsychrometer standar bola basah</label>
                                <input type="text" class="form-control" name="pcsychrometer_standar_bola_basah"
                                    placeholder="pcsychrometer standar bola basah">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_4" required>
                            </div>
                            <div class="form-group">
                                <label for="">thermometer apung max</label>
                                <input type="text" class="form-control" name="thermometer_apung_max"
                                    placeholder="thermometer apung max">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_5" required>
                            </div>
                            <div class="form-group">
                                <label for="">thermometer min</label>
                                <input type="text" class="form-control" name="thermometer_min_tanpa_gambar"
                                    placeholder="thermometer min">
                            </div>
                            <div class="form-group">
                                <label for="">penguapan ditambah</label>
                                <input type="text" class="form-control" name="penguapan_ditambah"
                                    placeholder="penguapan ditambah">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_6" required>
                            </div>
                            <div class="form-group">
                                <label for="">penguapan dibuang</label>
                                <input type="text" class="form-control" name="penguapan_dibuang"
                                    placeholder="penguapan dibuang">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_7" required>
                            </div>
                            <div class="form-group">
                                <label for="">penguapan</label>
                                <input type="text" class="form-control" name="penguapan" placeholder="penguapan">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_8" required>
                            </div>
                            <div class="form-group">
                                <label for="">anemometer angin</label>
                                <input type="text" class="form-control" name="anemometer_angin"
                                    placeholder="anemometer angin">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_9" required>
                            </div>
                            <div class="form-group">
                                <label for="">hujan manual</label>
                                <input type="text" class="form-control" name="hujan_manual" placeholder="hujan manual">
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="foto_10" required>
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
