@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Jobs</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('jobs.update', $job) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $job->title }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location"
                                    value="{{ $job->location }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="job_type" class="form-label">Job Type</label>
                                <select class="form-control" id="job_type" name="job_type" required>
                                    <option value="">-- Select Job Type --</option>
                                    <option value="Full-time" {{ $job->job_type == 'Full-time' ? 'selected' : '' }}>
                                        Full-time</option>
                                    <option value="Contract" {{ $job->job_type == 'Contract' ? 'selected' : '' }}>Contract
                                    </option>
                                    <option value="C2H" {{ $job->job_type == 'C2H' ? 'selected' : '' }}>C2H</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label">category</label>
                                <input type="text" class="form-control" id="category" name="category"
                                    value="{{ $job->category }}">
                            </div>

                            <div class="mb-3">
                                <label for="company_name" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="company_name" name="company_name"
                                    value="{{ $job->company_name }}">
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" required>{{ $job->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="requirements" class="form-label">Requirements</label>
                                <textarea class="form-control" id="requirements" name="requirements" required>{{ $job->requirements }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="benefits" class="form-label">Benefits</label>
                                <textarea class="form-control" id="benefits" name="benefits" required>{{ $job->benefits }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="responsibilities" class="form-label">Responsibilities</label>
                                <textarea class="form-control" id="responsibilities" name="responsibilities" required>{{ $job->responsibilities }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('jobs.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
