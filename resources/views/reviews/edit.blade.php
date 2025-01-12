@extends('layouts.app')

@section('content')
    <div class="container-fluid px-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
            <div class="col-md-12 form_page">
                <form action="{{ route('reviews.update', $review) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-body">
                            <div class="row form_sec">
                                <div class="col-12">
                                    <h5>Review Details</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="listings" class="form-label">Listings</label>
                                                <input type="text" name="listings" class="form-control" id="listings"
                                                    value="{{ $review->listings }}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="categories" class="form-label">Categories</label>
                                                <input type="text" name="categories" class="form-control" id="categories"
                                                    value="{{ $review->categories }}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="visitors" class="form-label">Visitors</label>
                                                <input type="text" name="visitors" class="form-control" id="visitors"
                                                    value="{{ $review->visitors }}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="happy_client" class="form-label">Happy Client</label>
                                                <input type="text" name="happy_client" class="form-control"
                                                    id="happy_client" value="{{ $review->happy_client }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="card">
                        <div class="card-body">
                            <div class="row form_sec">
                                <div class="col-12">
                                    <h5>Basic Details</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control" id="name"
                                                    value="{{ $review->name }}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="location" class="form-label">Location</label>
                                                <input type="text" name="location" class="form-control" id="location"
                                                    value="{{ $review->location }}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <div class="form-group">
                                                <label for="rating" class="form-label">Rating</label>
                                                <input type="text" name="rating" class="form-control" min="1"
                                                    max="5" id="rating" value="{{ $review->rating }}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <div class="form-group">
                                                <label for="image" class="form-label">Upload New Image:</label>
                                                <input type="file" class="form-control" name="image" id="image">
                                            </div>
                                            <div class="mt-3">
                                                @if ($review->image)
                                                    <div>
                                                        <img src="{{ asset('storage/' . $review->image) }}"
                                                            alt="Post Image" width="100">
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-12 mt-3">
                                            <div class="form-group">
                                                <label for="description" class="form-label">Content</label>
                                                <textarea name="description" class="form-control" id="description" rows="4" required>{{ $review->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary add_site">
                                Update
                            </button>
                            <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Back</a>
                        </div>
                    </div><br>
                </form>
            </div>
        </div>
    </div>
@endsection
