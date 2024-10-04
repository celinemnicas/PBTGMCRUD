@extends('layouts.app')

@section('content')
<h1 class="mb-4">Products</h1>
<a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Create Product</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->prodname }}</td>
                <td>{{ $product->category->catname }}</td>
                <td>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
