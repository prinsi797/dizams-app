<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ArticleController extends Controller {
    public function index() {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create() {

        return view('articles.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'details' => 'required|string',
            'posted_date' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $data = $request->all();
        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('articles', 'public');
        }
        Article::create($data);
        return redirect()->route('articles.index')->with('success', 'Articles created successfully.');
    }

    public function edit(Article $article) {

        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article) {
        $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'details' => 'required|string',
            'posted_date' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($article->image && Storage::exists('public/' . $article->image)) {
                Storage::delete('public/' . $article->image);
            }
            $data['image'] = $request->file('image')->store('articles', 'public');
        }
        $article->update($data);
        return redirect()->route('articles.index')->with('success', 'Articles updated successfully.');
    }

    public function destroy(Article $article) {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }
}
