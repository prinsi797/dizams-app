@extends('layouts.app')
<style>
    .notification-button {
        position: relative;
        padding: 5px 10px;
    }

    .icon-container {
        position: relative;
        display: inline-block;
    }

    .notification-badge {
        position: absolute;
        top: -5px;
        right: -10px;
        background-color: #d9534f;
        /* Bootstrap's 'btn-danger' color */
        color: white;
        border-radius: 50%;
        padding: 2px 5px;
        font-size: 10px;
    }
</style>
@section('content')
    <div class="container">
        <div>
            <!-- Notification Button -->
            <button class="btn btn pull-right" data-bs-toggle="modal" data-bs-target="#notificationModal">
                <div class="icon-container">
                    <i class="fa fa-bell"></i>
                    @if ($notificationCount > 0)
                        <span class="badge notification-badge" style="top:-17px;left:0px;">{{ $notificationCount }}</span>
                    @endif
                </div>
            </button>

            @if ($rating)
                <a href="{{ route('ratings.edit', $rating->id) }}" class="btn btn-primary pull-right ms-3 mb-3"><b>Ratings</b>
                </a>
            @else
                <button class="btn btn-primary pull-right ms-3" disabled>Ratings</button>
            @endif
            <a href="{{ route('reviews.create') }}" class="btn btn-primary pull-right"><b>+</b></a>
        </div>

        <!-- Notification Modal -->
        <div id="notificationModal" class="modal fade" tabindex="-1" aria-labelledby="notificationModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="notificationModalLabel">Pending Reviews</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @foreach ($pendingReviews as $review)
                            <div class="review-item" id="review-{{ $review->id }}">
                                <img src="{{ $review->image ? asset('storage/' . $review->image) : asset('assets/images/avatar.png') }}"
                                    alt="{{ $review->name ?? 'Default Avatar' }}" class="img-thumbnail"
                                    style="width: 50px; height: 50px; margin-right: 10px;">
                                <strong>{{ $review->name }}</strong>
                                <p>{{ $review->description }}</p>
                                <button class="btn btn-success btn-sm approve-btn"
                                    data-id="{{ $review->id }}">Approve</button>
                                <hr>
                            </div>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
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
                    <th>Name</th>
                    <th>location</th>
                    <th>rating</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $review)
                    <tr>
                        <td>{{ $review->id }}</td>
                        <td>{{ $review->name }}</td>
                        <td>{{ $review->location }}</td>
                        {{-- <td>{{ $post->description }}</td> --}}
                        <td>{{ $review->rating }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $review->image) }}" alt="Review Image" width="50">
                        </td>
                        <td>
                            {{-- <a href="{{ route('reviews.show', $review) }}" class="btn btn-info btn-sm">View</a> --}}
                            <a href="{{ route('reviews.edit', $review) }}" class="btn btn-secondary btn-sm">Edit</a>
                            <form action="{{ route('reviews.destroy', $review) }}" method="POST" class="delete-form"
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
    <script>
        $(document).on('click', '.approve-btn', function() {
            var reviewId = $(this).data('id');
            $.ajax({
                url: '/reviews/' + reviewId + '/approve',
                type: 'PATCH',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
                        $('#review-' + reviewId)
                            .remove(); // Optionally remove the approved review from the modal
                        alert('Review approved successfully.');
                    } else {
                        alert('Failed to approve the review.');
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    alert('An error occurred while approving the review.');
                }
            });
        });
    </script>
@endsection
