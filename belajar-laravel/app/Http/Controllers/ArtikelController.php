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

        return redirect('/artikel');
    }
}
