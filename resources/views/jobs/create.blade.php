@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Details</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('jobs.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location" required>
                            </div>
                            <div class="mb-3">
                                <label for="job_type" class="form-label">Job Type</label>
                                <select class="form-control" id="job_type" name="job_type" required>
                                    <option value="">-- Select Job Type --</option>
                                    <option value="Full-time">Full-time</option>
                                    <option value="Contract">Contract</option>
                                    <option value="C2H">C2H</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <input type="text" class="form-control" id="category" name="category">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="requirements" class="form-label">Requirements</label>
                                <textarea class="form-control" id="requirements" name="requirements"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="benefits" class="form-label">Benefits</label>
                                <textarea class="form-control" id="benefits" name="benefits"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="company_name" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="company_name" name="company_name">
                            </div>
                            <div class="mb-3">
                                <label for="responsibilities" class="form-label">Responsibilities</label>
                                <textarea class="form-control" id="responsibilities" name="responsibilities"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('jobs.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
