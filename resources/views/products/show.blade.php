@extends('layouts.app')

@section('content')
    <h2>Product Details</h2>

    <table style="width: 100%; margin-top: 20px;">
        <tr>
            <th style="width: 150px;">ID:</th>
            <td>{{ $product->id }}</td>
        </tr>
        <tr>
            <th>Name:</th>
            <td>{{ $product->name }}</td>
        </tr>
        <tr>
            <th>Description:</th>
            <td>{{ $product->description ?? 'No description provided' }}</td>
        </tr>
        <tr>
            <th>Price:</th>
            <td>${{ number_format($product->price, 2) }}</td>
        </tr>
        <tr>
            <th>Quantity:</th>
            <td>{{ $product->quantity }}</td>
        </tr>
        <tr>
            <th>Created At:</th>
            <td>{{ $product->created_at->format('Y-m-d H:i:s') }}</td>
        </tr>
        <tr>
            <th>Last Updated:</th>
            <td>{{ $product->updated_at->format('Y-m-d H:i:s') }}</td>
        </tr>
    </table>

    <div style="margin-top: 20px;">
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection