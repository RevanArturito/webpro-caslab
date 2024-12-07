<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TP;

class DataController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'sub_judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'tanggal_post' => 'required|string|max:255',
            'deadline_tp' => 'required|string|max:255',
            'deskripsi_tp' => 'required|string|max:255'
        ]);

        TP::create($validated);
        return redirect()->route('data')->with('success', 'Data berhasil ditambahkan!');
    }

    public function index()
    {
        $tps = TP::all(); 
        return view('data', ['tps' => $tps]);
    }

    public function destroy($id)
    {
        $tps = TP::findOrFail($id);
        $tps->delete();
        return redirect()->route('data')->with('success', 'Data berhasil dihapus!');
    }

    public function edit($id)
    {
        $tps = TP::findOrFail($id);
        return view('edit', compact('tps'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'sub_judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'tanggal_post' => 'required|string|max:255',
            'deadline_tp' => 'required|string|max:255',
            'deskripsi_tp' => 'required|string|max:255'
        ]);

        $tps = TP::findOrFail($id);
        $tps->update($validated);
        
        return redirect()->route('data')->with('success', 'Data berhasil diupdate!');
    }
}