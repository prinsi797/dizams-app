{{-- @foreach ($jobs as $job)
    <div class="job-card">
        <h2>{{ $job->title }}</h2>
        <div class="location">{{ $job->location }}</div>
        <div class="job-type">{{ $job->job_type }}</div>
        <div class="category">{{ $job->category }}</div>

        @if ($job->requirements)
            <div class="requirements">
                {!! nl2br(e($job->requirements)) !!}
            </div>
        @endif

        @if ($job->benefits)
            <div class="benefits">
                {!! nl2br(e($job->benefits)) !!}
            </div>
        @endif

        <a href="{{ route('jobs.show', $job) }}" class="btn">View Details</a>
    </div>
@endforeach --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="card-title">Jobs Opening</h4>
            <a href="{{ route('jobs.create') }}" class="btn btn-primary">Add</a>
            {{-- <a href="{{ route('settings.create') }}" class="btn btn-primary"> <b>+</b></a> --}}
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
                    <th>Title</th>
                    <th>Location</th>
                    <th>Job Type</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                    <tr>
                        <td>{{ $job->id }}</td>
                        <td>{{ $job->title }}</td>
                        <td>{{ $job->location }}</td>
                        <td>{{ $job->job_type }}</td>
                        <td>{{ $job->category }}</td>
                        <td>
                            <a href="{{ route('jobs.edit', $job) }}" class="btn btn-secondary btn-sm">Edit</a>

                            <form action="{{ route('jobs.destroy', $job) }}" method="POST" class="delete-form"
                                style="display:inline;">
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
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            const deleteForms = document.querySelectorAll('.delete-form');

            deleteForms.forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    swal({
                        title: 'Are you sure?',
                        text: 'This review will be permanently deleted!',
                        icon: 'warning',
                        buttons: ['Cancel', 'Yes, delete it!'],
                        dangerMode: true,
                    }).then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection
