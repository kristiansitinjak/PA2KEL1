<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    // Menampilkan halaman pendaftaran untuk event tertentu (User)
    public function showForm($eventId)
    {
        $event = Event::findOrFail($eventId);
        return view('pendaftaran', compact('event'));
    }

    // Menangani pengiriman form pendaftaran (User)
    public function store(Request $request, $eventId)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20',
            'angkatan' => 'required|string|max:4',
            'email' => 'required|email',
        ]);

        Pendaftar::create([
            'event_id' => $eventId,
            'nama' => $request->nama,
            'nim' => $request->nim,
            'angkatan' => $request->angkatan,
            'email' => $request->email,
        ]);

        return redirect()->route('pendaftaran', $eventId)->with('success', 'Pendaftaran berhasil!');
    }

    // Menampilkan semua pendaftar (Admin)
    public function adminIndex()
    {
        $pendaftars = Pendaftar::with('event')->get();
        return view('admin.pendaftaran.index', compact('pendaftars'));
    }

    // Update kehadiran pendaftar (Admin)
    public function updateHadir(Request $request, Pendaftar $pendaftar)
    {
        $pendaftar->update([
            'hadir' => $request->has('hadir'),
        ]);

        return back()->with('success', 'Status kehadiran diperbarui.');
    }
}
