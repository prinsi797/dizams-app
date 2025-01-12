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
                <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
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
                                                    value="{{ $article->name }}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="author" class="form-label">Author</label>
                                                <input type="text" name="author" class="form-control" id="author"
                                                    value="{{ $article->author }}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="details" class="form-label">Details</label>
                                                <input type="text" name="details" class="form-control" id="details"
                                                    value="{{ $article->details }}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="posted_date" class="form-label">Posted Date</label>
                                                <input type="date" name="posted_date" class="form-control"
                                                    id="posted_date" value="{{ $article->posted_date }}" required>
                                            </div>
                                        </div>


                                        <div class="col-md-6 mt-3">
                                            <div class="form-group">
                                                <label for="image" class="form-label">Upload New Image:</label>
                                                <input type="file" class="form-control" name="image" id="image">
                                            </div>
                                            <div class="mt-3">
                                                @if ($article->image)
                                                    <div>
                                                        <img src="{{ asset('storage/' . $article->image) }}"
                                                            alt="Article Image" width="100">
                                                    </div>
                                                @endif
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
                            <a href="{{ route('articles.index') }}" class="btn btn-secondary">Back</a>
                        </div>
                    </div><br>
                </form>
            </div>
        </div>
    </div>
@endsection
