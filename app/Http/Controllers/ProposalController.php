<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;

class ProposalController extends Controller
{
    // Tampilkan daftar proposal untuk Admin 1 (BPH)
    public function indexAdmin()
    {
        $proposals = Proposal::all();
        return view('admin.proposals.index', compact('proposals'));
    }

    // Tampilkan daftar proposal untuk Admin 2 (Kaprodi)
    public function indexAdmin2()
    {
        $proposals = Proposal::where('status', 'Pending Approval')->get();
        return view('admin2.proposals.index', compact('proposals'));
    }

    // Form tambah proposal (Hanya untuk Admin 1 - BPH)
    public function create()
    {
        return view('admin.proposals.create');
    }

    // Simpan proposal baru
    public function store(Request $request)
    {
        $request->validate([
            'program_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'document' => 'required|file|mimes:pdf,doc,docx|max:2048'
        ]);

        $documentPath = $request->file('document')->store('documents', 'public');
        Proposal::create([
            'program_id' => $request->program_id,
            'title' => $request->title,
            'document_path' => $documentPath,
            'status' => 'Pending Approval',
            'submitted_by' => auth()->id(), // Atur sebagai NULL
            'submitted_at' => now(),
        ]);
        
        

        return redirect()->route('admin.proposals.index')->with('success', 'Proposal berhasil dikirim.');
    }

    // Tampilkan detail proposal untuk Admin 1
    public function showAdmin($id)
    {
        $proposal = Proposal::findOrFail($id);
        return view('admin.proposals.show', compact('proposal'));
    }

    // Tampilkan detail proposal untuk Admin 2 (Kaprodi)
    public function showAdmin2($id)
    {
        $proposal = Proposal::findOrFail($id);
        return view('admin2.proposals.show', compact('proposal'));
    }

    // Admin 2 menyetujui atau menolak proposal
    public function approve(Request $request, $id)
    {
        $proposal = Proposal::findOrFail($id);

        if ($request->status == 'approved') {
            $proposal->update([
                'status' => $request->status == 'approved' ? 'Approved' : 'Rejected',
                'approved_by' => auth()->id(),
                'approved_at' => now(),
            ]);
            
        } else {
            $proposal->update([
                'status' => 'Rejected'
            ]);
        }

        return redirect()->route('admin2.proposals.index')->with('success', 'Proposal berhasil diperiksa.');
    }

    public function pendingAdmin2()
    {
        $proposals = Proposal::where('status', 'Pending Approval')->get();
        return view('admin2.proposals.pending', compact('proposals'));
    }
    public function approvedAdmin2()
    {
        $proposals = Proposal::where('status', 'Approved')->get();
        return view('admin2.proposals.approved', compact('proposals'));
    }

    public function rejectedAdmin2()
    {
        $proposals = Proposal::where('status', 'Rejected')->get();
        return view('admin2.proposals.rejected', compact('proposals'));
    }



}
