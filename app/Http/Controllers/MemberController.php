<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('member.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.create');
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
            'foto' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'lokasi' => 'required',
            'alamat' => 'required',
        ]);

         $members = new Member;
         $members->nama = $request->nama;
         $members->email = $request->email;
         $members->jenis_kelamin = $request->jenis_kelamin;
         $members->no_hp = $request->no_hp;
         $members->lokasi = $request->lokasi;
         $members->alamat = $request->alamat;
         if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $desinationPath = public_path() .DIRECTORY_SEPARATOR. 'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $members->foto = $filename;
        }
         $members->save();
        return redirect()->route('member.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $members = Member::findOrFail($id);
        return view('member.show',compact('members'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $members = Member::findOrFail($id);
        return view('member.edit',compact('members'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'foto' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'lokasi' => 'required',
            'alamat' => 'required',
        ]);

         $members = Member::findOrFail($id);
         $members->nama = $request->nama;
         $members->email = $request->email;
         $members->jenis_kelamin = $request->jenis_kelamin;
         $members->no_hp = $request->no_hp;
         $members->lokasi = $request->lokasi;
         $members->alamat = $request->alamat;
         if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $desinationPath = public_path() .DIRECTORY_SEPARATOR. 'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $members->foto = $filename;
        }
         $members->save();
        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $members = Member::findOrFail($id);
        $members->delete();
        return redirect()->route('member.index');
    }
}
