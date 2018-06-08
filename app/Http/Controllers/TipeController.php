<?php

namespace App\Http\Controllers;

use App\Tipe;
use App\Merk;
use Illuminate\Http\Request;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipes = Tipe::all();
        return view('tipe.index',compact('tipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipes = Merk::all();
        return view('tipe.create',compact('tipes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'merk_id' => 'required',

        ]);

         $tipes = new Tipe;
         $tipes->nama = $request->nama;
         $tipes->merk_id = $request->merk_id;
         $tipes->save();
        return redirect()->route('tipe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipes = Tipe::findOrFail($id);
        return view('tipe.show',compact('tipes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipes = Tipe::findOrFail($id);
        $merks = Merk::all();
        $selectedTP = Tipe::findOrFail($id)->merk_id;
        return view('tipe.edit',compact('tipes','merks','selectedTP'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'merk_id' => 'required',

        ]);

         $tipes = Tipe::findOrFail($id);
         $tipes->nama = $request->nama;
         $tipes->merk_id = $request->merk_id;
         $tipes->save();
        return redirect()->route('tipe.index');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipe  $tipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipe $tipe)
    {
        $tipes = Tipe::findOrFail($id);
        $tipes->delete();
        return redirect()->route('tipe.index');
    }
}
