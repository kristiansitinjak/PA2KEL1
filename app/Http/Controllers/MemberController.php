<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Category;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::with('category')->get();
        return view('admin.members.index', compact('members'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.members.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'phone' => 'required|string|max:15|unique:members',
            'email' => 'required|email|max:255|unique:members',
            'category_id' => 'required|exists:categories,id',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Simpan foto jika diunggah
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos/members', 'public');
        }

        Member::create([
            'name' => $request->name,
            'jabatan' => $request->jabatan,
            'phone' => $request->phone,
            'email' => $request->email,
            'category_id' => $request->category_id,
            'photo' => $photoPath,
        ]);

        return redirect()->route('admin.members.index')->with('success', 'Anggota berhasil ditambahkan!');
    }

    public function edit(Member $member)
    {
        $categories = Category::all();
        return view('admin.members.edit', compact('member', 'categories'));
    }

    public function update(Request $request, Member $member)
    {
        $request->validate([
            'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'jabatan' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'phone' => 'required|numeric|digits_between:10,15|unique:members,phone,'.$member->id,
            'email' => 'required|email|max:255|unique:members,email,'.$member->id,
            'category_id' => 'required|exists:categories,id',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);        
    
        if ($request->hasFile('photo')) {
            if ($member->photo) {
                Storage::disk('public')->delete($member->photo);
            }
            $photoPath = $request->file('photo')->store('photos/members', 'public');
            $member->photo = $photoPath;
        }
    
        $member->update([
            'name' => $request->name,
            'jabatan' => $request->jabatan,
            'phone' => $request->phone,
            'email' => $request->email,
            'category_id' => $request->category_id,
            'photo' => $member->photo,
        ]);
    
        return redirect()->route('admin.members.index')->with('success', 'Anggota berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
    
        return redirect()->route('admin.members.index')->with('success', 'Anggota berhasil dihapus');
    }
    

}
