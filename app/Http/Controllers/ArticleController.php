<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{

    public function index(): View
    {
        return view('articles.index', [
            'articles' => Article::all(),
        ]);
    }

    public function create(): View
    {
        return view('articles.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $article = Article::create($request->all());

        return redirect()->route("articles.public_show", $article->slug);
    }

    public function publicShow(string $slug): View
    {
        return view()->exists('articles.content.' . $slug)
            ? view('articles.show', [
                'content' => view('articles.content.' . $slug),
                'article' => Article::firstWhere('slug', $slug),
            ])
            : view('jobb-jegyek');
    }

    public function show(Article $article): View
    {
        return view('articles.show', [
            'article' => $article,
        ]);
    }

    public function edit(Article $article): View
    {
        return view('articles.edit', [
            'article' => $article,
        ]);
    }

    public function update(Request $request, Article $article): RedirectResponse
    {
        $article->update($request->all());

        return redirect()->route("articles.public_show", $article->slug);
    }

    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();

        return redirect()->route("articles.index");
    }

}
