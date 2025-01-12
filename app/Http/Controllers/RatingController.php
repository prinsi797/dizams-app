<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller {
    public function edit(Rating $rating) {
        return view('ratings.edit', ['ratings' => $rating]);
    }
    public function update(Request $request, Rating $rating) {
        $request->validate([
            'listings' => 'required|string|max:255',
            'categories' => 'required|string|max:255',
            'visitors' => 'required|numeric',
            'happy_client' => 'required|numeric',
        ]);

        $rating->update($request->all());
        return redirect()->back()->with('success', 'Rating updated successfully!');
    }
}
