<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinancialRecord;
use App\Models\Detail;

class FinancialController extends Controller
{
    // Menampilkan daftar transaksi keuangan untuk admin
    public function index()
    {
        $records = FinancialRecord::with('details')->orderBy('tanggal', 'desc')->get();
        return view('admin.financial.index', compact('records'));
    }

    // Menampilkan transparansi keuangan untuk pengguna
    public function userIndex()
    {
        $records = FinancialRecord::with('details')->orderBy('tanggal', 'desc')->get();

        $totalPemasukan = FinancialRecord::where('jenis', 'Pemasukan')->sum('jumlah');
        $totalPengeluaran = FinancialRecord::where('jenis', 'Pengeluaran')->sum('jumlah');
        $saldoAkhir = $totalPemasukan - $totalPengeluaran;

        return view('transparansi', compact('records', 'totalPemasukan', 'totalPengeluaran', 'saldoAkhir'));
    }

    // Menampilkan form tambah data keuangan
    public function create()
    {
        return view('admin.financial.create');
    }

    // Menyimpan data keuangan baru
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'keterangan' => 'required',
            'jenis' => 'required|in:Pemasukan,Pengeluaran',
            'jumlah' => 'required|numeric',
            'detail_keterangan.*' => 'nullable|string',
            'detail_jumlah.*' => 'nullable|numeric'
        ]);

        // Simpan data keuangan utama
        $financial = FinancialRecord::create($request->only(['tanggal', 'keterangan', 'jenis', 'jumlah']));

        // Simpan detail transaksi
        if ($request->detail_keterangan) {
            foreach ($request->detail_keterangan as $index => $keterangan) {
                if (!empty($keterangan) && isset($request->detail_jumlah[$index])) {
                    Detail::create([
                        'financial_id' => $financial->id,
                        'keterangan' => $keterangan,
                        'jumlah' => $request->detail_jumlah[$index],
                    ]);
                }
            }
        }

        return redirect()->route('admin.financial.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menampilkan form edit data keuangan
    public function edit($id)
    {
        $record = FinancialRecord::with('details')->findOrFail($id);
        return view('admin.financial.edit', compact('record'));
    }

    // Memperbarui data keuangan beserta detailnya
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'keterangan' => 'required|string',
            'jenis' => 'required|in:Pemasukan,Pengeluaran',
            'jumlah' => 'required|numeric',
            'detail_keterangan.*' => 'nullable|string',
            'detail_jumlah.*' => 'nullable|numeric'
        ]);

        // Update data utama
        $record = FinancialRecord::findOrFail($id);
        $record->update($request->only(['tanggal', 'keterangan', 'jenis', 'jumlah']));

        // Hapus detail lama
        $record->details()->delete();

        // Tambahkan detail baru
        if ($request->detail_keterangan) {
            foreach ($request->detail_keterangan as $index => $keterangan) {
                if (!empty($keterangan) && isset($request->detail_jumlah[$index])) {
                    Detail::create([
                        'financial_id' => $record->id,
                        'keterangan' => $keterangan,
                        'jumlah' => $request->detail_jumlah[$index]
                    ]);
                }
            }
        }

        return redirect()->route('admin.financial.index')->with('success', 'Data berhasil diperbarui.');
    }

    // Menghapus data keuangan dan detailnya
    public function destroy($id)
    {
        $record = FinancialRecord::findOrFail($id);
        $record->details()->delete(); // Hapus detail
        $record->delete(); // Hapus utama

        return redirect()->route('admin.financial.index')->with('success', 'Data berhasil dihapus.');
    }
}
