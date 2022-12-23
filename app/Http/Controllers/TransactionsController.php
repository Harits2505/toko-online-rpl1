<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transactions;
use App\Models\Users;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 20;
        $trans = transactions::when($request->search, function($query) use ($request){
            $query->where('id', 'LIKE', "%{$request->search}%");
        })->orderBy('id', 'desc')->paginate($pagination);

        $trans->appends($request->only('search'));

        return view('transactions', [
            'trans' => $trans,
        ])->with('i',($request->input('page', 1)-1) * $pagination);

        // return view('transactions', [
        //     'trans' => transactions::all()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('detailtransaksi', [
        'datatrans' => transactions::where('id', $id)->first()
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
        return view('edittransaksi', [
            'datatransaksi' =>transactions::where('id', $id)->first(),
            'user' =>Users::all()
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
            'status'            => $request->status
        ];
        transactions::where('id', $id)->update($ubahdata);
        return redirect('/transaction')->with('success', 'Data transaksi berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        transactions::where('id', $id)->delete();
        return redirect('/transaction')->with('success', 'Data transaksi berhasil dihapus!');
    }
}
