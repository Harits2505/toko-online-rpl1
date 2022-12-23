<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsermemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 20;
        $user = Users::when($request->search, function($query) use ($request){
            $query->where('name', 'LIKE', "%{$request->search}%");
        })->orderBy('id', 'desc')->paginate($pagination);

        $user->appends($request->only('search'));

        return view('usermember', [
            'usrs' => $user,
        ])->with('i',($request->input('page', 1)-1) * $pagination);

        // return view('usermember', [
        //     'usrs' => Users::all()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adduser');
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
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'alamat'    => $request->alamat,
            'password'  => bcrypt($request->password),
            'role'      => $request->role
        ];
        Users::create($isidatanya);
        return redirect('/usermember')->with('success', 'Data user berhasil ditambahkan!');
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
        return view('edituser',
        [
        'datauser' => Users::where('id', $id)->first()
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
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'alamat'    => $request->alamat,
            'role'      => $request->role
        ];
        Users::where('id', $id)->update($ubahdata);
        return redirect('/usermember')->with('success', 'Data user berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Users::where('id', $id)->delete();
        return redirect('/usermember')->with('success', 'Data user berhasil dihapus!');
    }
}
