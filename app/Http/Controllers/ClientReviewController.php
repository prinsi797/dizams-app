<?php

namespace App\Http\Controllers;

use App\Models\ClientReview;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ClientReviewController extends Controller {
    public function index() {
        $reviews = ClientReview::all();
        return view('reviews.index', compact(var_name: 'reviews'));
    }

    public function create() {

        return view(view: 'reviews.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Post::create($request->all());
        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('posts', 'public'); // Store image in storage/app/public/posts
        }

        ClientReview::create($data);
        return redirect()->route(route: 'reviews.index')->with('success', 'Review created successfully.');
    }

    public function show(ClientReview $review) {
        return view('reviews.show', compact(var_name: 'review'));
    }

    public function edit(ClientReview $review) {

        return view('reviews.edit', compact('review'));
    }

    public function update(Request $request, ClientReview $review) {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($review->image && Storage::exists('public/' . $review->image)) {
                Storage::delete('public/' . $review->image);
            }

            // Save new image
            $data['image'] = $request->file('image')->store('posts', options: 'public');
        }

        // Update post details
        $review->update($data);
        // $post->update($request->all());
        return redirect()->route('reviews.index')->with('success', value: 'Review updated successfully.');
    }

    public function destroy(ClientReview $review) {
        $review->delete();
        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
    }
}
