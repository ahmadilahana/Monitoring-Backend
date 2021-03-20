<?php

namespace App\Http\Controllers;

use App\Models\Artikels;
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
        return view("artikel.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subject' => 'required'
        ]);
        // dd($request);
        $artikel = new Artikels;
        $artikel->judul = $request->title;
        $artikel->subject = $request->subject;
        $artikel->save();

        return redirect('/artikel/daftar');
    }

    public function edit(Artikels $id)
    {
        $data = $id;
        return view("artikel.edit", compact('data') );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'subject' => 'required'
            ]);
            
            // dd($request);
        $santri = Artikels::find($id);
        $santri->judul = $request->title;
        $santri->subject = $request->subject;
        $santri->update();
        return redirect('/artikel/daftar');   
    }

    public function delete($id)
    {
        Artikels::destroy($id);
        
        return redirect("/artikel/daftar");
    }
}
