@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Reviews</h1>
        <a href="{{ route('reviews.create') }}" class="btn btn-primary mb-3">+</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>location</th>
                    {{-- <th>description</th> --}}
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
                            <a href="{{ route('reviews.edit', $review) }}" class="btn btn-warning btn-sm">Edit</a>
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
