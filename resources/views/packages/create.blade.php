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
                <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row form_sec">
                                <div class="col-12">
                                    <h5>orderPrice Details</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" name="title" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="resume_count" class="form-label">Resume Count</label>
                                                <input type="number" name="resume_count" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="original_price" class="form-label">Original Price</label>
                                                <input type="number" name="original_price" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="discounted_price" class="form-label">Discounted
                                                    Price</label>
                                                <input type="number" name="discounted_price" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="per_resume_price" class="form-label">Per Resume
                                                    Price</label>
                                                <input type="number" name="per_resume_price" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="modal_type" class="form-label">modal_type</label>
                                                <input type="text" name="modal_type" class="form-control" required>
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
                                Save
                            </button>
                            <a href="{{ route('packages.index') }}" class="btn btn-secondary">Back</a>
                        </div>
                    </div><br>
                </form>
            </div>
        </div>
    </div>
@endsection
