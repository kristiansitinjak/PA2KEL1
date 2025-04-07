<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;

class ProposalController extends Controller
{
    public function index()
    {
        $proposals = Proposal::all();
        return view('admin.proposals.index', compact('proposals'));
    }

    public function create()
    {
        return view('admin.proposals.create'); 
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'file' => 'required|mimes:pdf|max:2048',
    ]);

    $filePath = $request->file('file')->store('proposals', 'public');

    Proposal::create([
        'title' => $request->title,
        'file_path' => $filePath,
        'status' => 'pending',
        'uploaded_by' => 1, // ID statis, misalnya ID admin 1
    ]);

    return redirect()->route('admin.proposals.index')->with('success', 'Proposal uploaded successfully.');
}

    public function show(Proposal $proposal)
    {
        return view('admin.proposals.show', compact('proposal'));
    }

    public function approve(Proposal $proposal)
    {
        $proposal->update(['status' => 'approved']);
        return redirect()->route('admin.proposals.index')->with('success', 'Proposal approved.');
    }

    public function reject(Proposal $proposal)
    {
        $proposal->update(['status' => 'rejected']);
        return redirect()->route('admin.proposals.index')->with('success', 'Proposal rejected.');
    }

    public function download(Proposal $proposal)
{
    // Memastikan bahwa file proposal ada di direktori yang benar
    $filePath = storage_path('app/public/' . $proposal->file_path);

    // Mengecek apakah file ada
    if (file_exists($filePath)) {
        return response()->download($filePath);
    }

    // Jika file tidak ditemukan
    return redirect()->route('admin.proposals.index')->with('error', 'File not found.');
}

}
