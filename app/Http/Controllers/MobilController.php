<?php

namespace App\Http\Controllers;

use App\Mobil;
use App\Merk;
use App\Member;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobils = Mobil::all();
        return view('mobil.index',compact('mobils'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merks = Merk::all();
        $members = Member::all();
        return view('mobil.create',compact('merks','members'));
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
            'gambar' => 'required',
            'nama' => 'required',
            'merk_id' => 'required',
            'tipe' => 'required',
            'member_id' => 'required',


        ]);

         $mobils = new Mobil;
         $mobils->nama = $request->nama;
         $mobils->merk_id = $request->merk_id;
         $mobils->tipe = $request->tipe;
         $mobils->member_id = $request->member_id;
         
         if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $desinationPath = public_path() .DIRECTORY_SEPARATOR. 'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $mobils->gambar = $filename;
        }
         $mobils->save();
        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobils = Mobil::findOrFail($id);
        $merks = Merk::all();
        $members = Member::all();
        $selectedMK = Mobil::findOrFail($id)->merk_id;
        $selectedMB = Mobil::findOrFail($id)->member_id;
        return view('mobil.edit',compact('mobils','merks','members','selectedMK','selectedMB'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'gambar' => 'required',
            'nama' => 'required',
            'merk_id' => 'required',
            'tipe' => 'required',
            'member_id' => 'required',


        ]);

         $mobils= Mobil::findOrFail($id);
         $mobils->nama = $request->nama;
         $mobils->merk_id = $request->merk_id;
         $mobils->tipe = $request->tipe;
         $mobils->member_id = $request->member_id;
         
         if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $desinationPath = public_path() .DIRECTORY_SEPARATOR. 'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $c->gambar = $filename;
        }
         $mobils->save();
        return redirect()->route('mobil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobils = Mobil::findOrFail($id);
        $mobils->delete();
        return redirect()->route('mobil.index');
    }
}
