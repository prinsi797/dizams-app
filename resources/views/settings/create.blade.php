@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New Setting</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('settings.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <select class="form-control" id="keyword" name="keyword" required>
                                    <option value="Call Us">Call Us</option>
                                    <option value="Email">Email</option>
                                    <option value="Office">Office</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="value" class="form-label">Value</label>
                                <textarea class="form-control" id="value" name="value" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('settings.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
