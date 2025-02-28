<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller {
    public function index() {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    // Menampilkan berita di halaman publik
    public function indexPublic()
    {
        $news = News::latest()->get(); // Mengambil semua berita terbaru
        return view('news', compact('news')); // Kirim ke tampilan views/news/index.blade.php
    }

    // Menampilkan halaman detail berita
    public function show($id) {
        $news = News::findOrFail($id);
        return view('news_detail', compact('news')); // Kirim ke tampilan views/news/show.blade.php
    }

    public function create() {
        return view('admin.news.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('news_images', 'public');
        }
        
        News::create($data);
        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit(News $news) {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news) {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        if ($request->hasFile('image')) {
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $data['image'] = $request->file('image')->store('news_images', 'public');
        }
        
        $news->update($data);
        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy(News $news) {
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil dihapus');
    }
}
