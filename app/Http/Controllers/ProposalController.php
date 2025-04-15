<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use App\Models\ProgramKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProposalController extends Controller
{
    public function index() {
        $proposals = Proposal::all();
        return view('admin.proposal.index', compact('proposals'));
    }

    public function create() {
        $proker = ProgramKerja::select('kegiatan')->distinct()->get();
        return view('admin.proposal.create', compact('proker'));
    }

    public function store(Request $request) {
        $request->validate([
            'perihal' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'file' => 'required|mimes:pdf,docx|max:2048',
        ]);

        $path = $request->file('file')->store('proposal_files');

        Proposal::create([
            'perihal' => $request->perihal,
            'deskripsi' => $request->deskripsi,
            'file_path' => $path,
            'user_id' => Auth::id(),
        ]);

        session()->flash('success', 'Proposal berhasil dikirim.');

        // Perbaikan route redirect (gunakan prefix admin)
        return redirect()->route('admin.proposal.index');
    }

    public function show(Proposal $proposal) {
        return view('admin.proposal.show', compact('proposal'));
    }

    public function approve(Proposal $proposal) {
        $proposal->update(['status' => 'Disetujui']);
        return back()->with('success', 'Proposal disetujui.');
    }

    public function reject(Proposal $proposal) {
        $proposal->update(['status' => 'Ditolak']);
        return back()->with('error', 'Proposal ditolak.');
    }
}
