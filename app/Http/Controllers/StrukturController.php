<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class StrukturController extends Controller
{
    public function index(Request $request)
    {
        $categoryName = $request->query('category');

        if ($categoryName) {
            $category = Category::where('name', $categoryName)->with('members')->first();
        } else {
            $category = null;
        }

        return view('struktur', compact('category'));
    }
}

