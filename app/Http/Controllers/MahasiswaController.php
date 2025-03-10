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

    // Menampilkan form tambah mahasiswa
    public function create() {
        return view('admin.mahasiswa.create');
    }

    // Menyimpan mahasiswa baru
    public function store(Request $request) {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|integer|unique:mahasiswas',
            'kelas' => 'required|string|max:50',
            'angkatan' => 'required|integer',
        ]);

        // Simpan mahasiswa tanpa status pembayaran (default false)
        Mahasiswa::create([
            'nama' => $validatedData['nama'],
            'nim' => $validatedData['nim'],
            'kelas' => $validatedData['kelas'],
            'angkatan' => $validatedData['angkatan'],
            'status_pembayaran' => false, // Default belum lunas
            'status_approval' => 'pending', // Menunggu admin 2
        ]);

        return redirect()->route('admin.mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    // Menampilkan halaman edit mahasiswa
    public function edit($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('admin.mahasiswa.edit', compact('mahasiswa'));
    }

    // Mengupdate status pembayaran mahasiswa (ADMIN 1)
    public function updateStatus(Request $request)
    {
        foreach ($request->status_pembayaran as $id => $status) {
            $mahasiswa = Mahasiswa::find($id);
            if ($mahasiswa) {
                $mahasiswa->update(['status_pembayaran' => $status ? true : false]);
            }
        }
    
        return redirect()->route('admin.mahasiswa.index')
            ->with('success', 'Status pembayaran berhasil diperbarui');
    }
        
    // Menghapus mahasiswa
    public function destroy($id) {
        Mahasiswa::findOrFail($id)->delete();
        return redirect()->route('admin.mahasiswa.index')->with('success', 'Mahasiswa dihapus.');
    }

    // Mengirim data ke Admin 2
    public function kirimKeAdmin2($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update(['status_approval' => 'pending']);

        return redirect()->route('admin.mahasiswa.index')->with('success', 'Data dikirim ke Admin 2.');
    }

    // Admin 2: Menyetujui mahasiswa
    public function approve($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update(['status_approval' => 'approved']);

        return redirect()->route('admin2.mahasiswa.verifikasi')->with('success', 'Mahasiswa disetujui.');
    }

    // Admin 2: Menolak mahasiswa
    public function reject($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update(['status_approval' => 'rejected']);

        return redirect()->route('admin2.mahasiswa.verifikasi')->with('success', 'Mahasiswa ditolak.');
    }

    // Admin 2: Menampilkan daftar mahasiswa untuk diverifikasi
    public function verifikasi() {
        $mahasiswas = Mahasiswa::where('status_approval', 'pending')->get();
        return view('admin2.mahasiswa.index', compact('mahasiswas'));
    }
}
