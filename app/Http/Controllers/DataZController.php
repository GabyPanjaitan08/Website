<?php

namespace App\Http\Controllers;

use App\Models\DataZ;
use App\Models\Waktu;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class DataZController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $DataZ = DataZ::all(); // "SELECT * FROM DataZ"

        return view('data_z.index', compact('DataZ'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wilayahs = Wilayah::all();
        $waktus = Waktu::all();
        return view('data_z.create', compact('wilayahs', 'waktus'));
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

        $foto_1 = $request->file('foto_1');
        $nama_foto_1 = time() . rand(1, 9) . '.' . $foto_1->getClientOriginalExtension();
        $foto_1->move('uploads', $nama_foto_1);
        $data['foto_1'] = $nama_foto_1;

        $foto_2 = $request->file('foto_2');
        $nama_foto_2 = time() . rand(1, 9) . '.' . $foto_2->getClientOriginalExtension();
        $foto_2->move('uploads', $nama_foto_2);
        $data['foto_2'] = $nama_foto_2;

        $foto_3 = $request->file('foto_3');
        $nama_foto_3 = time() . rand(1, 9) . '.' . $foto_3->getClientOriginalExtension();
        $foto_3->move('uploads', $nama_foto_3);
        $data['foto_3'] = $nama_foto_3;

        $foto_4 = $request->file('foto_4');
        $nama_foto_4 = time() . rand(1, 9) . '.' . $foto_4->getClientOriginalExtension();
        $foto_4->move('uploads', $nama_foto_4);
        $data['foto_4'] = $nama_foto_4;

        $foto_5 = $request->file('foto_5');
        $nama_foto_5 = time() . rand(1, 9) . '.' . $foto_5->getClientOriginalExtension();
        $foto_5->move('uploads', $nama_foto_5);
        $data['foto_5'] = $nama_foto_5;

        $foto_6 = $request->file('foto_6');
        $nama_foto_6 = time() . rand(1, 9) . '.' . $foto_6->getClientOriginalExtension();
        $foto_6->move('uploads', $nama_foto_6);
        $data['foto_6'] = $nama_foto_6;

        $foto_7 = $request->file('foto_7');
        $nama_foto_7 = time() . rand(1, 9) . '.' . $foto_7->getClientOriginalExtension();
        $foto_7->move('uploads', $nama_foto_7);
        $data['foto_7'] = $nama_foto_7;

        $foto_8 = $request->file('foto_8');
        $nama_foto_8 = time() . rand(1, 9) . '.' . $foto_8->getClientOriginalExtension();
        $foto_8->move('uploads', $nama_foto_8);
        $data['foto_8'] = $nama_foto_8;

        $foto_9 = $request->file('foto_9');
        $nama_foto_9 = time() . rand(1, 9) . '.' . $foto_9->getClientOriginalExtension();
        $foto_9->move('uploads', $nama_foto_9);
        $data['foto_9'] = $nama_foto_9;

        $foto_10 = $request->file('foto_10');
        $nama_foto_10 = time() . rand(1, 9) . '.' . $foto_10->getClientOriginalExtension();
        $foto_10->move('uploads', $nama_foto_10);
        $data['foto_10'] = $nama_foto_10;

        DataZ::create($data);

        session()->flash('message', 'Data Klimatologi berhasil ditambah!');
        return redirect()->route('data_z.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataZ $DataZ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataZ $DataZ)
    {
        $wilayahs = Wilayah::all();
        $waktus = Waktu::all();
        return view('data_z.edit', compact('DataZ', 'wilayahs', 'waktus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataZ $DataZ)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $data = $request->all();

        if ($request->has('foto_1')) {
            $foto_1 = $request->file('foto_1');
            $nama_foto_1 = time() . rand(1, 9) . '.' . $foto_1->getClientOriginalExtension();
            $foto_1->move('uploads', $nama_foto_1);
            $data['foto_1'] = $nama_foto_1;
        }

        if ($request->has('foto_2')) {
            $foto_2 = $request->file('foto_2');
            $nama_foto_2 = time() . rand(1, 9) . '.' . $foto_2->getClientOriginalExtension();
            $foto_2->move('uploads', $nama_foto_2);
            $data['foto_2'] = $nama_foto_2;
        }

        if ($request->has('foto_3')) {
            $foto_3 = $request->file('foto_3');
            $nama_foto_3 = time() . rand(1, 9) . '.' . $foto_3->getClientOriginalExtension();
            $foto_3->move('uploads', $nama_foto_3);
            $data['foto_3'] = $nama_foto_3;
        }

        if ($request->has('foto_4')) {
            $foto_4 = $request->file('foto_4');
            $nama_foto_4 = time() . rand(1, 9) . '.' . $foto_4->getClientOriginalExtension();
            $foto_4->move('uploads', $nama_foto_4);
            $data['foto_4'] = $nama_foto_4;
        }

        if ($request->has('foto_5')) {
            $foto_5 = $request->file('foto_5');
            $nama_foto_5 = time() . rand(1, 9) . '.' . $foto_5->getClientOriginalExtension();
            $foto_5->move('uploads', $nama_foto_5);
            $data['foto_5'] = $nama_foto_5;
        }

        if ($request->has('foto_6')) {
            $foto_6 = $request->file('foto_6');
            $nama_foto_6 = time() . rand(1, 9) . '.' . $foto_6->getClientOriginalExtension();
            $foto_6->move('uploads', $nama_foto_6);
            $data['foto_6'] = $nama_foto_6;
        }

        if ($request->has('foto_7')) {
            $foto_7 = $request->file('foto_7');
            $nama_foto_7 = time() . rand(1, 9) . '.' . $foto_7->getClientOriginalExtension();
            $foto_7->move('uploads', $nama_foto_7);
            $data['foto_7'] = $nama_foto_7;
        }

        if ($request->has('foto_8')) {
            $foto_8 = $request->file('foto_8');
            $nama_foto_8 = time() . rand(1, 9) . '.' . $foto_8->getClientOriginalExtension();
            $foto_8->move('uploads', $nama_foto_8);
            $data['foto_8'] = $nama_foto_8;
        }

        if ($request->has('foto_9')) {
            $foto_9 = $request->file('foto_9');
            $nama_foto_9 = time() . rand(1, 9) . '.' . $foto_9->getClientOriginalExtension();
            $foto_9->move('uploads', $nama_foto_9);
            $data['foto_9'] = $nama_foto_9;
        }

        if ($request->has('foto_10')) {
            $foto_10 = $request->file('foto_10');
            $nama_foto_10 = time() . rand(1, 9) . '.' . $foto_10->getClientOriginalExtension();
            $foto_10->move('uploads', $nama_foto_10);
            $data['foto_10'] = $nama_foto_10;
        }

        $DataZ->update($data);

        session()->flash('message', 'Data Klimatologi berhasil diedit!');
        return redirect()->route('data_z.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataZ $DataZ)
    {
        $DataZ->delete();

        session()->flash('message', 'Data Klimatologi berhasil dihapus!');
        return redirect()->route('data_z.index');
    }
}
