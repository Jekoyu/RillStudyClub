<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama_produk' => 'required|string',
            'harga' => 'required|numeric',
            'stok_produk' => 'required|numeric',
            'deskripsi_produk' => 'required',
            'berat_produk' => 'required',
            'kategori_produk' => 'required',
        ]);
        // return $validasi;
        Produk::create($validasi);
        return view('admin.produk.create');
    }


    public function show(Produk $produk)
    {
        //
    }

    public function edit(Produk $produk)
    {
    }


    public function destroy(Produk $produk)
    {
        //
    }
}
