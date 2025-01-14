@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Order Prices</h3>
            <a href="{{ route('orderprices.create') }}" class="btn btn-primary"> <b>+</b></a>
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
                    <th>Amount</th>
                    <th>Discount</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderPrices as $orderPrice)
                    <tr>
                        <td>{{ $orderPrice->id }}</td>
                        <td>{{ $orderPrice->name }}</td>
                        <td>${{ $orderPrice->amount }}</td>
                        <td>{{ $orderPrice->discount }}%</td>
                        <td>
                            <a href="{{ route('orderprices.edit', $orderPrice->id) }}"
                                class="btn btn-secondary btn-sm">Edit</a>
                            <form action="{{ route('orderprices.destroy', $orderPrice->id) }}" method="POST"
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
@endsection
