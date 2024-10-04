@extends('layouts.app')

@section('content')
<h1>Edit Product</h1>
<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="prodname">Product Name</label>
        <input type="text" name="prodname" class="form-control" value="{{ $product->prodname }}" required>
    </div>
    <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" class="form-control" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->catname }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection
