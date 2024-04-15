<?php

namespace App\Http\Controllers;

use App\Models\DataAB;
use App\Models\Waktu;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class DataABController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $DataAB = DataAB::all(); // "SELECT * FROM DataAB"

        return view('data_ab.index', compact('DataAB'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wilayahs = Wilayah::all();
        $waktus = Waktu::all();
        return view('data_ab.create', compact('wilayahs', 'waktus'));
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
        unset($data['_token']);

        DataAB::insert($data);

        session()->flash('message', 'Data Tinggi muka air berhasil ditambah!');
        return redirect()->route('data_ab.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataAB $DataAB)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $DataAB = DataAB::find($id);

        $wilayahs = Wilayah::all();
        $waktus = Waktu::all();
        return view('data_ab.edit', compact('DataAB', 'wilayahs', 'waktus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'nama' => 'required',
        ]);

        $DataAB = DataAB::find($id);

        $data = $request->all();

        if ($request->has('foto')) {
            $foto = $request->file('foto');
            $nama_foto = time() . rand(1, 9) . '.' . $foto->getClientOriginalExtension();
            $foto->move('uploads', $nama_foto);
            $data['foto'] = $nama_foto;
        }
        $DataAB->update($data);

        session()->flash('message', 'Data Tinggi muka air berhasil diedit!');
        return redirect()->route('data_ab.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $DataAB = DataAB::find($id);
        $DataAB->delete();

        session()->flash('message', 'Data Tinggi muka air berhasil dihapus!');
        return redirect()->route('data_ab.index');
    }
}
