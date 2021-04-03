<?php

namespace App\Http\Controllers;

use App\Models\Artikels;
use App\Models\KategoriArtikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikels::paginate(12);
        return view("artikel.artikel", compact('artikels'));
    }

    public function show(Artikels $id)
    {
        // die($id);
        $data = $id;
        return view("artikel.show", compact('data') );
    }

    public function daftar()
    {
        $artikels = Artikels::paginate(12);
        return view("artikel.daftar", compact('artikels'));
    }

    public function create()
    {
        // die($hal);
        $kategori = KategoriArtikel::all();
        return view("artikel.create", compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subject' => 'required',
            'kategori' => 'required'
        ]);
        // dd($request);
        $artikel = new Artikels;
        $artikel->judul = $request->title;
        $artikel->subject = $request->subject;
        $artikel->kat_artikel_id = $request->kategori;
        $artikel->save();

        return redirect('/artikel/daftar')->with("success", "Artikel berhasil ditambahkan");
    }

    public function edit(Artikels $id)
    {
        $data = $id;
        $kategori = KategoriArtikel::all();
        return view("artikel.edit", compact('data', 'kategori') );

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'subject' => 'required',
            'kategori' => 'required'
            ]);
            
            // dd($request);
        $artikel = Artikels::find($id);
        $artikel->judul = $request->title;
        $artikel->subject = $request->subject;
        $artikel->kat_artikel_id = $request->kategori;
        $artikel->update();
        return redirect('/artikel/daftar');   
    }

    public function delete($id)
    {
        Artikels::destroy($id);
        
        return redirect("/artikel/daftar");
    }
}
