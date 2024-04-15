<?php

namespace App\Http\Controllers;

use App\Models\Waktu;
use Illuminate\Http\Request;

class WaktuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Waktus = Waktu::all(); // "SELECT * FROM Waktus"

        return view('Waktus.index', compact('Waktus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Waktus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Waktu::create($request->all()); // "INSERT INTO Waktus VALUES(......."

        session()->flash('message', 'Data Waktu berhasil ditambah!');
        return redirect()->route('waktus.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Waktu $Waktu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Waktu $Waktu)
    {
        return view('Waktus.edit', compact('Waktu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Waktu $Waktu)
    {
        $request->validate([
            'nama' => 'required',
        ]);

       $Waktu->update($request->all()); // "UPDATE Waktus SET ...."

        session()->flash('message', 'Data Waktu berhasil diedit!');
        return redirect()->route('waktus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Waktu $Waktu)
    {
        $Waktu->delete();

        session()->flash('message', 'Data Waktu berhasil dihapus!');
        return redirect()->route('waktus.index');
    }
}
