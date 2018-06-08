<?php

namespace App\Http\Controllers;

use App\Detail_mobil;
use App\Mobil;
use Illuminate\Http\Request;

class DetailMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = Detail_mobil::with('Mobil')->get();
        return view('detail_mobil.index',compact('a'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $a = DetailMobil::all();
        return view('detail_mobil.create',compact('a'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            'mobil_id' => 'required',
            'warna' => 'required',
            'transmisi' => 'required',
            'varian' => 'required',
            'cakupan_mesin' => 'required',
            'penumpang' => 'required',
            'kilometer' => 'required',
            'tahun_keluar' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',

        ]);


         $detail_mobils = new DetailMobil;
         $detail_mobils->mobil_id = $request->mobil_id;
         $detail_mobils->warna = $request->warna;
         $detail_mobils->transmisi = $request->transmisi;
         $detail_mobils->varian = $request->varian;
         $detail_mobils->cakupan_mesin = $request->cakupan_mesin;
         $detail_mobils->penumpang = $request->penumpang;
         $detail_mobils->kilometer = $request->kilometer;
         $detail_mobils->tahun_keluar = $request->tahun_keluar;
         $detail_mobils->harga = $request->harga;
         $detail_mobils->deskripsi = $request->deskripsi;
         $detail_mobils->save();
         return redirect()->route('detail_mobil.index');
         
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detail_mobil  $detail_mobil
     * @return \Illuminate\Http\Response
     */
    public function show(detail_mobil $detail_mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detail_mobil  $detail_mobil
     * @return \Illuminate\Http\Response
     */
    public function edit(detail_mobil $detail_mobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detail_mobil  $detail_mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detail_mobil $detail_mobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detail_mobil  $detail_mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(detail_mobil $detail_mobil)
    {
        //
    }
}
