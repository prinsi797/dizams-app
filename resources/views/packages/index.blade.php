{{-- resources/views/admin/resume-packages/index.blade.php --}}

{{-- <div class="card">
    <div class="card-header">
        <h3>Resume Packages</h3>
        <a href="{{ route('resume-packages.create') }}" class="btn btn-primary">Add New Package</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Resume Count</th>
                    <th>Original Price</th>
                    <th>Discounted Price</th>
                    <th>Per Resume Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($packages as $package)
                    <tr>
                        <td>{{ $package->title }}</td>
                        <td>{{ $package->resume_count }}</td>
                        <td>${{ $package->original_price }}</td>
                        <td>${{ $package->discounted_price }}</td>
                        <td>${{ $package->per_resume_price }}</td>
                        <td>
                            <a href="{{ route('resume-packages.edit', $package) }}"
                                class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('resume-packages.destroy', $package) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Order Prices</h3>
            <a href="{{ route('packages.create') }}" class="btn btn-primary"> <b>+</b></a>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Resume Count</th>
                    <th>Original Price</th>
                    <th>Discounted Price</th>
                    <th>Per Resume Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($packages as $package)
                    <tr>
                        <td>{{ $package->id }}</td>
                        <td>{{ $package->title }}</td>
                        <td>{{ $package->resume_count }}</td>
                        <td>{{ $package->original_price }}</td>
                        <td>{{ $package->discounted_price }}</td>
                        <td>{{ $package->per_resume_price }}</td>
                        <td>
                            <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-secondary btn-sm">Edit</a>

                            <form action="{{ route('packages.destroy', $package->id) }}" method="POST" class="delete-form"
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
