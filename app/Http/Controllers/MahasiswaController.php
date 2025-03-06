<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller {
    // Menampilkan daftar mahasiswa untuk admin 1
    public function index() {
        $mahasiswas = Mahasiswa::all();
        return view('admin.mahasiswa.index', compact('mahasiswas'));
    }

    // Menampilkan form upload banyak mahasiswa
    public function create() {
        return view('admin.mahasiswa.create');
    }

    // Menyimpan banyak mahasiswa sekaligus
    public function store(Request $request) {
        $request->validate([
            'mahasiswas' => 'required|array|min:1',
            'mahasiswas.*.nama' => 'required|string',
            'mahasiswas.*.nim' => 'required|string|unique:mahasiswas,nim',
            'mahasiswas.*.kelas' => 'required|string',
            'mahasiswas.*.angkatan' => 'required|integer',
        ]);

        $dataMahasiswa = [];
        foreach ($request->mahasiswas as $data) {
            $dataMahasiswa[] = [
                'nama' => $data['nama'],
                'nim' => $data['nim'],
                'kelas' => $data['kelas'],
                'angkatan' => $data['angkatan'],
                'status_pembayaran' => false,
                'status_approval' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        Mahasiswa::insert($dataMahasiswa);

        return redirect()->route('admin.mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    // Menampilkan halaman edit
    public function edit($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('admin.mahasiswa.edit', compact('mahasiswa'));
    }

    // Mengupdate data mahasiswa
    public function update(Request $request, $id) {
        $request->validate([
            'status_pembayaran' => 'nullable|boolean',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update([
            'status_pembayaran' => $request->has('status_pembayaran'),
        ]);

        return redirect()->route('admin.mahasiswa.index')->with('success', 'Status pembayaran diperbarui');
    }

    // Menghapus mahasiswa
    public function destroy($id) {
        Mahasiswa::findOrFail($id)->delete();
        return redirect()->route('admin.mahasiswa.index')->with('success', 'Mahasiswa dihapus');
    }

    // Admin 2: Verifikasi data mahasiswa
    public function approve($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update(['status_approval' => 'approved']);

        return redirect()->route('admin2.mahasiswa.index')->with('success', 'Mahasiswa disetujui');
    }

    public function reject($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update(['status_approval' => 'rejected']);

        return redirect()->route('admin2.mahasiswa.index')->with('success', 'Mahasiswa ditolak');
    }

    public function verifikasi() {
        $mahasiswas = Mahasiswa::where('status_approval', 'pending')->get();
        return view('admin2.mahasiswa.index', compact('mahasiswas'));
    }
    
}
