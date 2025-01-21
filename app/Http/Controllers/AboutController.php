<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller {
    public function index() {
        $abouts = About::all();
        return view('abouts.index', compact('abouts'));
    }

    public function create() {
        return view('abouts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'keyword' => 'required|unique:abouts',
            'value' => 'required'
        ]);

        About::create($request->all());
        return redirect()->route('abouts.index')
            ->with('success', 'Abouts created successfully.');
    }

    public function edit(About $about) {
        return view('abouts.edit', compact('about'));
    }

    public function update(Request $request, About $about) {
        $request->validate([
            'keyword' => 'required|unique:abouts,keyword,' . $about->id,
            'value' => 'required'
        ]);

        $about->update($request->all());
        return redirect()->route('abouts.index')
            ->with('success', 'Abouts updated successfully.');
    }

    public function destroy(About $about) {
        $about->delete();
        return redirect()->route('abouts.index')
            ->with('success', value: 'Abouts deleted successfully.');
    }
}