<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{

    public function tanulas(): View
    {
        return view('categories.tanulas', [
            'articles' => Article::where('category', 'tanulas')->orderBy('id', 'desc')->get()
        ]);
    }

    public function penz(): View
    {
        return view('categories.penz', [
            'articles' => Article::where('category', 'penz')->orderBy('id', 'desc')->get()
        ]);
    }

    public function kollegium(): View
    {
        return view('categories.kollegium', [
            'articles' => Article::where('category', 'kollegium')->orderBy('id', 'desc')->get()
        ]);
    }

}
