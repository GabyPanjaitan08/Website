<?php

namespace App\Http\Controllers;

use App\Models\DataX;
use App\Models\Waktu;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class DataXController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $DataX = DataX::all(); // "SELECT * FROM DataX"

        return view('data_x.index', compact('DataX'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wilayahs = Wilayah::all();
        $waktus = Waktu::all();
        return view('data_x.create', compact('wilayahs', 'waktus'));
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

        DataX::create($data); // "INSERT INTO DataX VALUES(......."

        session()->flash('message', 'Data Kerusakan berhasil ditambah!');
        return redirect()->route('data_x.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataX $DataX)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataX $DataX)
    {
        $wilayahs = Wilayah::all();
        $waktus = Waktu::all();
        return view('data_x.edit', compact('DataX', 'wilayahs', 'waktus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataX $DataX)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $data = $request->all();

        $DataX->update($data); // "UPDATE DataX SET ...."

        session()->flash('message', 'Data Kerusakan berhasil diedit!');
        return redirect()->route('data_x.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataX $DataX)
    {
        $DataX->delete();

        session()->flash('message', 'Data Kerusakan berhasil dihapus!');
        return redirect()->route('data_x.index');
    }
}
