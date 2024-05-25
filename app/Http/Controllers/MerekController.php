<?php

namespace App\Http\Controllers;

use App\Models\merek;
use Illuminate\Http\Request;

class MerekController extends Controller
{

    public function index()
    {
        $merek = merek::latest()->paginate(10);
        // $merek = merek::all()->paginate(10);
        return view('merek.index', compact('merek'));
    }

    public function create()
    {
        return view('merek.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama_merek' => 'required|min:5',
        ]);

        $merek = new merek();
        $merek->nama_merek = $request->nama_merek;
        $merek->save();
        return redirect()->route('merek.index');
    }

    public function show($id)
    {
        $merek = merek::findOrFail($id);
        return view('merek.show', compact('merek'));
    }

    public function edit($id)
    {
        $merek = merek::findOrFail($id);
        return view('merek.edit', compact('merek'));
    }

    public function update(Request $request, $id)
    {
        //validate form
        $this->validate($request, [
            'nama_merek' => 'required|min:5',
        ]);

        $merek = merek::findOrFail($id);
        $merek->nama_merek = $request->nama_merek;
        $merek->save();
        return redirect()->route('merek.index');

    }

    public function destroy($id)
    {
        $merek = merek::findOrFail($id);
        $merek->delete();
        return redirect()->route('merek.index');

    }
}
