<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categori_barang;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 20;
        $category = categori_barang::when($request->search, function($query) use ($request){
            $query->where('nama_kategori', 'LIKE', "%{$request->search}%");
        })->orderBy('nama_kategori', 'desc')->paginate($pagination);

        $category->appends($request->only('search'));

        return view('category', [
            'datacategori' => $category,
        ])->with('i',($request->input('page', 1)-1) * $pagination);
        // return view('category', [
        //         'categoribarang' => categori_barang::all()
        //     ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addkategoriproduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isidatanya = [
            'nama_kategori' => $request->nama_categori
        ];
        categori_barang::create($isidatanya);
        return redirect('/category')->with('success', 'Data kategori berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('editkategoriproduk',
        [
        'datacategori' => categori_barang::where('id', $id)->first()
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
            'nama_kategori' => $request->datacategori
        ];
        categori_barang::where('id', $id)->update($ubahdata);
        return redirect('/category')->with('success', 'Data ketegori berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        categori_barang::where('id', $id)->delete();
        return redirect('/category')->with('success', 'Data kategori berhasil dihapus!');
    }
}
