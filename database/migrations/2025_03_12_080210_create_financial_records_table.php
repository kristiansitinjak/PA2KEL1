<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FinancialController extends Controller
{
    public function index()
    {
        $records = FinancialRecord::all();

        // Hitung total pemasukan dan pengeluaran
        $totalPemasukan = FinancialRecord::where('jenis', 'Pemasukan')->sum('jumlah');
        $totalPengeluaran = FinancialRecord::where('jenis', 'Pengeluaran')->sum('jumlah');

        // Hitung saldo akhir
        $saldoAkhir = $totalPemasukan - $totalPengeluaran;

        return view('transparansi.index', compact('records', 'totalPemasukan', 'totalPengeluaran', 'saldoAkhir'));
    }
}
