<?php

namespace App\Http\Controllers;

use App\santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $santri = santri::all();
        return view('santri.index', compact('santri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('santri.create');
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
            'nama' => 'required',
            'divisi' => 'required',
            'alamat' => 'required'
        ]);

        $santri = new Santri;
        $santri->nama = $request->nama;
        $santri->divisi = $request->divisi;
        $santri->alamat = $request->alamat;
        $santri->save();
        
        return redirect()->route('index-santri');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function show(santri $id)
    {
        $santri = santri::find($id)->first();
        return view('santri.show', compact('santri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function edit(santri $id)
    {
        $santri = santri::find($id)->first();
        return view('santri.edit', compact('santri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,santri $id)
    {
        // dd($request);
        $request->validate([
            'nama' => 'required',
            'divisi' => 'required',
            'alamat' => 'required'
        ]);
        
        $santri = santri::find($id->id);
        $santri->nama = $request->nama;
        $santri->divisi = $request->divisi;
        $santri->alamat = $request->alamat;
        $santri->save();
        return redirect()->route('index-santri');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        santri::destroy($id);
        // dd($id);
        // $santri = santri::find($id);
        // $santri->delete();
        return redirect()->route('index-santri');
    }
}
