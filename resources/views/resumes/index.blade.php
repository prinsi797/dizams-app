@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Resumes</h3>
            <a href="{{ route('resumes.export') }}" class="btn btn-success">Export</a>
        </div>

        <!-- Search Form -->
        <form action="{{ route('resumes.index') }}" method="GET" class="mb-4">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" name="search_name" class="form-control" placeholder="Search by Name"
                            value="{{ request('search_name') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="email" name="search_email" class="form-control" placeholder="Search by Email"
                            value="{{ request('search_email') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" name="search_phone" class="form-control" placeholder="Search by Phone"
                            value="{{ request('search_phone') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a href="{{ route('resumes.index') }}" class="btn btn-secondary">Reset</a>
                </div>
            </div>
        </form>

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
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Linkedin</th>
                    <th>education</th>
                    <th>Job Details</th>
                    <th>Resume</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($resumes as $resume)
                    <tr>
                        <td>{{ $resume->id }}</td>
                        <td>{{ $resume->name }}</td>
                        <td>{{ $resume->email }}</td>
                        <td>{{ $resume->phone }}</td>
                        <td>
                            @if ($resume->linkedin)
                                <a href="{{ strpos($resume->linkedin, 'http') === 0 ? $resume->linkedin : 'https://' . $resume->linkedin }}"
                                    target="_blank" class="btn btn-sm btn-link">
                                    {{ $resume->linkedin }}
                                </a>
                            @else
                                N/A
                            @endif
                        </td>
                        <td>{{ $resume->education }}</td>
                        <td>{{ $resume->job_details }}</td>
                        <td>
                            @if ($resume->resume)
                                <a href="{{ asset('storage/' . $resume->resume) }}" download="{{ $resume->resume }}"
                                    class="btn btn-sm btn-primary">
                                    Download Resume
                                </a>
                            @else
                                N/A
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">No records found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-end">
            {{ $resumes->appends(request()->query())->links() }}
        </div>
    </div>
@endsection
