<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\categori_barang;
use App\Models\gambarbarang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 20;
        $produk = barang::when($request->search, function($query) use ($request){
            $query->where('name_product', 'LIKE', "%{$request->search}%");
        })->orderBy('name_product', 'desc')->paginate($pagination);

        $produk->appends($request->only('search'));

        return view('product', [
            'barang' => $produk,
        ])->with('i',($request->input('page', 1)-1) * $pagination);

        // return view('product', [
        //     'barang' => barang::all()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addbarang', [
            'datacategory' => categori_barang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isidatanya = $request->validate([
            'name_product' => 'required',
            'harga'        => 'required',
            'description'  => 'required',
            'stock'        => 'required',
            'kategori_id' => 'required'
        ]);
        barang::create($isidatanya);
        return redirect('/product')->with('success', 'Data produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('detailproduk', [
            'dataproduct'   => barang::where('id', $id)->first(),
            'datapictures'  => gambarbarang::where('product_id', $id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('editbarang', [
            'databarang' =>barang::where('id', $id)->first(),
            'kategori' =>categori_barang::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubahdata = [
            'name_product'      => $request->name_product,
            'harga'             => $request->harga,
            'description'       => $request->description,
            'stock'             => $request->stock,
            'kategori_id'      => $request->kategori_id
        ];
        barang::where('id', $id)->update($ubahdata);
        return redirect('/product')->with('success', 'Data produk berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        barang::where('id', $id)->delete();
        return redirect('/product')->with('success', 'Data produk berhasil dihapus!');
    }
}
