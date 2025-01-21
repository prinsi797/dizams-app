@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('abouts.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="keyword" class="form-label">Key</label>
                                <input type="text" class="form-control" id="keyword" name="keyword" required>
                            </div>
                            <div class="mb-3">
                                <label for="value" class="form-label">Value</label>
                                <textarea class="form-control" id="value" name="value" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('abouts.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
