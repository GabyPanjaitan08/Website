<?php

namespace App\Http\Controllers;

use App\Models\DataY;
use App\Models\Waktu;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class DataYController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $DataY = DataY::all(); // "SELECT * FROM DataY"

        return view('data_y.index', compact('DataY'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wilayahs = Wilayah::all();
        $waktus = Waktu::all();
        return view('data_y.create', compact('wilayahs', 'waktus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $data = $request->all();

        $foto = $request->file('foto');
        $nama_foto = time() . rand(1, 9) . '.' . $foto->getClientOriginalExtension();
        $foto->move('uploads', $nama_foto);
        $data['foto'] = $nama_foto;

        DataY::create($data);

        session()->flash('message', 'Data Curah Hujan berhasil ditambah!');
        return redirect()->route('data_y.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataY $DataY)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataY $DataY)
    {
        $wilayahs = Wilayah::all();
        $waktus = Waktu::all();
        return view('data_y.edit', compact('DataY', 'wilayahs', 'waktus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataY $DataY)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nama_foto = time() . rand(1, 9) . '.' . $foto->getClientOriginalExtension();
            $foto->move('uploads', $nama_foto);
            $data['foto'] = $nama_foto;
        }

        $DataY->update($data);

        session()->flash('message', 'Data Curah Hujan berhasil diedit!');
        return redirect()->route('data_y.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataY $DataY)
    {
        $DataY->delete();

        session()->flash('message', 'Data Curah Hujan berhasil dihapus!');
        return redirect()->route('data_y.index');
    }
}
