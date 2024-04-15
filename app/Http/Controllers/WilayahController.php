<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wilayahs = Wilayah::all(); // "SELECT * FROM wilayahs"

        return view('wilayahs.index', compact('wilayahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wilayahs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Wilayah::create($request->all()); // "INSERT INTO wilayahs VALUES(......."

        session()->flash('message', 'Data wilayah berhasil ditambah!');
        return redirect()->route('wilayahs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wilayah $Wilayah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wilayah $Wilayah)
    {
        return view('wilayahs.edit', compact('Wilayah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wilayah $Wilayah)
    {
        $request->validate([
            'nama' => 'required',
        ]);

       $Wilayah->update($request->all()); // "UPDATE wilayahs SET ...."

        session()->flash('message', 'Data wilayah berhasil diedit!');
        return redirect()->route('wilayahs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wilayah $Wilayah)
    {
        $Wilayah->delete();

        session()->flash('message', 'Data wilayah berhasil dihapus!');
        return redirect()->route('wilayahs.index');
    }
}
