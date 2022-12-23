<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\gambarbarang;

class DetailProdukController extends Controller
{
    public function detail($id)
    {
        return view('detailbarang', [
            'info' => barang::where('id', $id)->first(),
            'gambar' => gambarbarang::where('product_id', $id)->get()
        ]);
    }
}
