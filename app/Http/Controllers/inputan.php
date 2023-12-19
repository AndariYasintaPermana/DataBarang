<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\input;

class inputan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ("inputan");
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
        $NoBarang = $request->input("NoBarang");
        $NamaBarang = $request->input("NamaBarang");
        $Varian = $request->input("Varian");
        $TanggalKadaluarsa = $request->input("TanggalKadaluarsa");
        $TanggalProduksi = $request->input("TanggalProduksi");
        $HargaBeli = $request->input("HargaBeli");

        echo"INPUT DATA <br>";
        echo"No Barang: ".$NoBarang."<br>";
        echo"Nama Barang: ".$NamaBarang."<br>";
        echo"Varian: ".$Varian."<br>";
        echo"Tanggal Kadaluarsa: ".$TanggalKadaluarsa."<br>";
        echo"Tanggal Produksi: ".$TanggalProduksi."<br>";
        echo"Harga Beli: ".$HargaBeli."<br>";

        input::create([
            'NoBarang' => $request->NoBarang,
            'NamaBarang' => $request->NamaBarang,
            'Varian' => $request->Varian,
            'TanggalKadaluarsa' => $request->TanggalKadaluarsa,
            'TanggalProduksi' => $request->TanggalProduksi,
            'HargaBeli' => $request->HargaBeli
        ]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
