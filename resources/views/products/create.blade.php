@extends('layouts.app')

@section('content')
    <h2>Add New Product</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        
        <div>
            <label>Product Name:</label><br>
            <input type="text" name="name" value="{{ old('name') }}" style="width: 100%; padding: 8px; margin: 5px 0;" required>
        </div>

        <div>
            <label>Description:</label><br>
            <textarea name="description" style="width: 100%; padding: 8px; margin: 5px 0;" rows="4">{{ old('description') }}</textarea>
        </div>

        <div>
            <label>Price ($):</label><br>
            <input type="number" name="price" step="0.01" value="{{ old('price') }}" style="width: 100%; padding: 8px; margin: 5px 0;" required>
        </div>

        <div>
            <label>Quantity:</label><br>
            <input type="number" name="quantity" value="{{ old('quantity') }}" style="width: 100%; padding: 8px; margin: 5px 0;" required>
        </div>

        <div style="margin-top: 20px;">
            <button type="submit" class="btn btn-primary">Create Product</button>
            <a href="{{ route('products.index') }}" class="btn btn-danger">Cancel</a>
        </div>
    </form>
@endsection