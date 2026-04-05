@extends('layouts.app')

@section('content')
    <div class="search-box">
        <form action="{{ route('products.index') }}" method="GET">
            <input type="text" name="search" placeholder="Search by product name..." value="{{ request('search') }}" style="padding: 8px; width: 300px;">
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="{{ route('products.create') }}" class="btn btn-success">Add New Product</a>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price ($)</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description ?? 'N/A' }}</td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align: center;">No products found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection