<?php

namespace App\Http\Controllers;

use App\Models\ProgramKerja;
use Illuminate\Http\Request;

class ProgramKerjaController extends Controller
{
    public function index()
    {
        $programkerjas = ProgramKerja::latest()->get();
        return view('admin.programkerja.index', compact('programkerjas'));
    }

    public function create()
    {
        return view('admin.programkerja.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kegiatan' => 'required|unique:program_kerjas,kegiatan',
            'deskripsi' => 'required',
            'tujuan' => 'required',
            'tahap_pelaksanaan' => 'required',
            'waktu_pelaksanaan' => 'required|date',
            'tempat' => 'required',
            'indikator' => 'required',
            'kekuatan' => 'required',
            'kelemahan' => 'required',
            'perkiraan_biaya' => 'required|numeric',
            'sumber_dana' => 'required',
        ]);

        $data = $request->only([
            'kegiatan',
            'deskripsi',
            'tujuan',
            'tahap_pelaksanaan',
            'waktu_pelaksanaan',
            'tempat',
            'indikator',
            'kekuatan',
            'kelemahan',
            'perkiraan_biaya',
            'sumber_dana',
        ]);
        $data['terlaksana'] = $request->has('terlaksana');

        ProgramKerja::create($data);

        return redirect()->route('programkerja.index')->with('success', 'Program Kerja berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $programkerja = ProgramKerja::findOrFail($id);
        return view('admin.programkerja.edit', compact('programkerja'));
    }

    public function update(Request $request, $id)
    {
        $programkerja = ProgramKerja::findOrFail($id);

        $request->validate([
            'kegiatan' => 'required|unique:program_kerjas,kegiatan,' . $id,
            'deskripsi' => 'required',
            'tujuan' => 'required',
            'tahap_pelaksanaan' => 'required',
            'waktu_pelaksanaan' => 'required|date',
            'tempat' => 'required',
            'indikator' => 'required',
            'kekuatan' => 'required',
            'kelemahan' => 'required',
            'perkiraan_biaya' => 'required|numeric',
            'sumber_dana' => 'required',
        ]);

        $data = $request->only([
            'kegiatan',
            'deskripsi',
            'tujuan',
            'tahap_pelaksanaan',
            'waktu_pelaksanaan',
            'tempat',
            'indikator',
            'kekuatan',
            'kelemahan',
            'perkiraan_biaya',
            'sumber_dana',
        ]);
        $data['terlaksana'] = $request->has('terlaksana');

        $programkerja->update($data);

        return redirect()->route('programkerja.index')->with('success', 'Program Kerja berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $programkerja = ProgramKerja::findOrFail($id);
        $programkerja->delete();

        return redirect()->route('programkerja.index')->with('success', 'Program Kerja berhasil dihapus.');
    }

    // ✅ Tambahan untuk halaman publik (events)
    public function publicIndex()
    {
        $programkerjas = ProgramKerja::latest()->get();
        return view('events', compact('programkerjas'));
    }
}
