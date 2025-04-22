<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\ProgramKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        $programKerjaList = ProgramKerja::all();
        return view('admin.events.create', compact('programKerjaList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'program_kerja_id' => 'required|exists:program_kerjas,kegiatan',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'lokasi' => 'required',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $judul = $request->program_kerja_id;
        $photoPath = $request->file('photo') ? $request->file('photo')->store('events', 'public') : null;

        Event::create([
            'judul' => $judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'photo' => $photoPath,
            'program_kerja_id' => $judul,
        ]);

        return redirect()->route('events.index')->with('success', 'Event berhasil ditambahkan');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $programKerjaList = ProgramKerja::all();
        return view('admin.events.edit', compact('event', 'programKerjaList'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'program_kerja_id' => 'required|exists:program_kerjas,kegiatan',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'lokasi' => 'required',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $judul = $request->program_kerja_id;

        if ($request->hasFile('photo')) {
            if ($event->photo && Storage::disk('public')->exists($event->photo)) {
                Storage::disk('public')->delete($event->photo);
            }
            $event->photo = $request->file('photo')->store('events', 'public');
        }

        $event->update([
            'judul' => $judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'photo' => $event->photo,
            'program_kerja_id' => $judul,
        ]);

        return redirect()->route('events.index')->with('success', 'Event berhasil diperbarui');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        if ($event->photo && Storage::disk('public')->exists($event->photo)) {
            Storage::disk('public')->delete($event->photo);
        }
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event berhasil dihapus');
    }

    // Tambahan: Menampilkan data event di halaman publik
    public function publicPage()
    {
        $programkerjas = ProgramKerja::all();
        $events = Event::latest()->get();
    
        return view('events', compact('programkerjas', 'events'));
    }
    public function register(Request $request, $id)
{
    $event = Event::findOrFail($id);

    // Validasi data pendaftar
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ]);

    // Simpan pendaftaran (pastikan ada table pendaftarannya)
    $event->pendaftar()->create($validated);

    return back()->with('success', 'Pendaftaran berhasil!');
}

}
