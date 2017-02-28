<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Http\Request\UpdateRequest;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function beranda()
    {
        $mahasiswa = Mahasiswa::all();
        return view('beranda', compact('mahasiswa'));
    }

    public function input()
    {
        return view('input');
    }

    public function v_edit()
    {
        return view('edit');
    }

    public function form_add()
    {
        return view::make('input');
    }

    public function add_action(Request $request)
    {
        $mahasiswa                   = new Mahasiswa;
        $mahasiswa->nama             =$request->nama;
        $mahasiswa->jenis_kelamin    =$request->jenis_kelamin;
        $mahasiswa->alamat           =$request->alamat;
        $mahasiswa->nim              =$request->nim;
        $mahasiswa->save();

        return redirect('beranda');    
        
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
        $mahasiswa = Mahasiswa::find($id);
        return view('edit', compact('mahasiswa'));
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
        $mahasiswa                   = Mahasiswa::find($id);
        $mahasiswa->nama             =$request->nama;
        $mahasiswa->jenis_kelamin    =$request->jenis_kelamin;
        $mahasiswa->alamat           =$request->alamat;
        $mahasiswa->nim              =$request->nim;
        $mahasiswa->save();

        return redirect('beranda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> delete();
        return redirect('beranda');
    }
}
