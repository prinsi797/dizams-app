<?php

namespace App\Http\Controllers;

use App\Models\ClientReview;
use App\Models\Rating;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ClientReviewController extends Controller {
    public function index() {
        $reviews = ClientReview::all();
        $pendingReviews = ClientReview::where('approved', 0)->get();
        $notificationCount = $pendingReviews->count(); // Fetch pending reviews
        // $notificationCount = $pendingReviews->count();
        $rating = Rating::find(1); // Fetch rating or define logic to retrieve it
        return view('reviews.index', compact('reviews', 'rating', 'notificationCount', 'pendingReviews'));
    }

    public function approve($id) {
        $review = ClientReview::find($id);
        if ($review) {
            $review->approved = 1;
            $review->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
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
        $data = $request->all();
        $data['approved'] = $request->has('approved') ? 1 : 0;
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('posts', 'public'); // Store image in storage/app/public/posts
        }
        ClientReview::create($data);
        return redirect()->route(route: 'reviews.index')->with('success', 'Review created successfully.');
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
        $data['approved'] = $request->has('approved') ? 1 : 0;

        if ($request->hasFile('image')) {
            if ($review->image && Storage::exists('public/' . $review->image)) {
                Storage::delete('public/' . $review->image);
            }
            $data['image'] = $request->file('image')->store('posts', options: 'public');
        }

        $review->update($data);
        return redirect()->route('reviews.index')->with('success', value: 'Review updated successfully.');
    }

    public function destroy(ClientReview $review) {
        $review->delete();
        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
    }
}