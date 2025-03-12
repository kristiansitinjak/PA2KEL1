<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinancialRecord;

class FinancialController extends Controller
{
    public function index()
    {
        $records = FinancialRecord::orderBy('tanggal', 'desc')->get();
        return view('admin.financial.index', compact('records'));
    }

    public function userIndex()
    {
    $records = FinancialRecord::orderBy('tanggal', 'desc')->get();

    // Hitung total pemasukan dan pengeluaran
    $totalPemasukan = FinancialRecord::whereRaw('LOWER(jenis) = ?', ['pemasukan'])->sum('jumlah');
    $totalPengeluaran = FinancialRecord::whereRaw('LOWER(jenis) = ?', ['pengeluaran'])->sum('jumlah');
    $saldoAkhir = $totalPemasukan - $totalPengeluaran;

    return view('transparansi', compact('records', 'totalPemasukan', 'totalPengeluaran', 'saldoAkhir'));
}

    public function create()
    {
        return view('admin.financial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'keterangan' => 'required',
            'jenis' => 'required|in:Pemasukan,Pengeluaran',
            'jumlah' => 'required|numeric'
        ]);

        FinancialRecord::create($request->all());

        return redirect()->route('admin.financial.index')->with('success', 'Data berhasil ditambahkan.');
    }
}
