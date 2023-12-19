<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\input;

class hasil extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $form = input::all();
        return view('hasil', compact('form'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $form = input::where('NoBarang',$id)->get();
        return view('edit',compact('form'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=[
            'NoBarang' => $request->NoBarang,
            'NamaBarang' => $request->NamaBarang,
            'Varian' => $request->Varian,
            'TanggalKadaluarsa' => $request->TanggalKadaluarsa,
            'TanggalProduksi' => $request->TanggalProduksi,
            'HargaBeli' => $request->HargaBeli
        ];
            
        
        $proses = input::where('NoBarang',$id)->update($data);
        return redirect('/view')->with('success','Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        input::where('NoBarang', $id)->delete();
        return redirect('/view')->with('success','Data berhasil disimpan');
    }
}
