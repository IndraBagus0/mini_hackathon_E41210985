<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan = Question::all();
        return view('home', compact('pertanyaan'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
        // Validasi inputan jika diperlukan
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        // Simpan pertanyaan ke dalam database
        Question::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('pertanyaan.index')->with('success', 'Pertanyaan berhasil ditambahkan.');
    }
}
