@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Post</h1>
        <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" name="location" class="form-control" id="location" required>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" name="rating" min="1" max="5" class="form-control" id="rating"
                    required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" name="description" class="form-control" id="description" required></textarea>
            </div>
            <div>
                <label for="image" class="form-label">Upload Image:</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
