<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikels;
use Auth;

class ArtikelApiController extends Controller
{
    public function index()
    {
        // echo 'index';
        $data = Artikels::all();
        // dd($data);
        return response()->json(compact('data'), 200);
    }

    public function show(Artikels $id)
    {
        
        return response()->json($id, 200);
    }

    public function store(Request $request)
    {
        Artikels::create($request->all());
        return response()->json($request, 200);
    }

    public function update(Request $request, Artikels $id)
    {
        $id->update(['judul' => $request->judul, 
                    'subject' => $request->subject]);
        return response()->json($id, 200);
    }
    
    public function delete(Artikels $id)
    {
        $id->delete();
        return response()->json($id, 200);
    }

    public function test()
    {
        $data = "Welcome " . Auth::user()->name;
        return response()->json($data, 200);
    }
}
