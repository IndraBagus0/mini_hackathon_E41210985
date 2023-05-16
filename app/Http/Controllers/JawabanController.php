<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function store(Request $request, $id)
    {
        // Validasi inputan jika diperlukan
        $request->validate([
            'isi' => 'required',
        ]);

        // Simpan jawaban ke dalam database dengan menyimpan id pertanyaan terkait
        Answer::create([
            'pertanyaan_id' => $id,
            'isi' => $request->isi,
        ]);

        return redirect()->route('pertanyaan.show', $id)->with('success', 'Jawaban berhasil ditambahkan.');
    }
}
