<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanKeuangan; 

class LaporanKeuanganController extends Controller
{
    public function index()
    {
        $laporans = LaporanKeuangan::paginate(10); // Ambil data dengan paginasi
        return view('admin.keuangan.index', compact('laporans'));    }

    public function create()
    {
        return view('admin.keuangan.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'jenis' => 'required|in:pemasukan,pengeluaran',
        'jumlah' => 'required|numeric',
        'deskripsi' => 'nullable|string',
        'tanggal' => 'required|date',
    ]);

    // Simpan data ke database
    LaporanKeuangan::create([
        'jenis' => $request->jenis,
        'jumlah' => $request->jumlah,
        'deskripsi' => $request->deskripsi,
        'tanggal' => $request->tanggal,
    ]);

    return redirect()->route('keuangan.index')->with('success', 'Laporan berhasil ditambahkan');
}

}
