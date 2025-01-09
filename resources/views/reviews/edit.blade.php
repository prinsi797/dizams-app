@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Reviews</h1>
        <form action="{{ route('reviews.update', $review) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $review->name }}" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" name="location" class="form-control" id="location" value="{{ $review->location }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="text" name="rating" class="form-control" min="1" max="5" id="rating"
                    value="{{ $review->rating }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Content</label>
                <textarea name="description" class="form-control" id="description" rows="5" required>{{ $review->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Upload New Image:</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>

            @if ($review->image)
                <div>
                    <img src="{{ asset('storage/' . $review->image) }}" alt="Post Image" width="300">
                </div>
            @endif
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
