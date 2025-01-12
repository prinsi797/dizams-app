@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Reviews</h3>
            @if ($rating)
                <a href="{{ route('ratings.edit', $rating->id) }}" class="btn btn-primary"> <b>Ratings</b></a>
            @else
                <button class="btn btn-primary" disabled>Ratings</button>
            @endif

            <a href="{{ route('reviews.create') }}" class="btn btn-primary"> <b>+</b></a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>location</th>
                    <th>rating</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $review)
                    <tr>
                        <td>{{ $review->id }}</td>
                        <td>{{ $review->name }}</td>
                        <td>{{ $review->location }}</td>
                        {{-- <td>{{ $post->description }}</td> --}}
                        <td>{{ $review->rating }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $review->image) }}" alt="Review Image" width="50">
                        </td>
                        <td>
                            {{-- <a href="{{ route('reviews.show', $review) }}" class="btn btn-info btn-sm">View</a> --}}
                            <a href="{{ route('reviews.edit', $review) }}" class="btn btn-secondary btn-sm">Edit</a>
                            <form action="{{ route('reviews.destroy', $review) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
