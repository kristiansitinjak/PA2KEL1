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
            'name' => 'required',
            'phone' => 'required|unique:members,phone',
            'email' => 'required|email|unique:members,email',
            'category_id' => 'required|exists:categories,id'
        ]);

        Member::create($request->all());
        return redirect()->route('admin.members.index')->with('success', 'Anggota berhasil ditambahkan');
    }

    public function edit(Member $member)
    {
        $categories = Category::all();
        return view('admin.members.edit', compact('member', 'categories'));
    }

    public function update(Request $request, Member $member)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|unique:members,phone,' . $member->id,
            'email' => 'required|email|unique:members,email,' . $member->id,
            'category_id' => 'required|exists:categories,id'
        ]);

        $member->update($request->all());
        return redirect()->route('admin.members.index')->with('success', 'Data anggota diperbarui');
    }

    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('admin.members.index')->with('success', 'Anggota berhasil dihapus');
    }
}
