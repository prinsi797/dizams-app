@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="card-title">Abouts</h4>
            <a href="{{ route('abouts.create') }}" class="btn btn-primary">Add</a>
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
                    <th>Key</th>
                    <th>Value</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about)
                    <tr>
                        <td>{{ $about->id }}</td>
                        <td>{{ $about->keyword }}</td>
                        <td>{{ $about->value }}</td>
                        <td>
                            <a href="{{ route('abouts.edit', $about) }}" class="btn btn-secondary btn-sm">Edit</a>
                            <form action="{{ route('abouts.destroy', $about) }}" method="POST" class="delete-form"
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
