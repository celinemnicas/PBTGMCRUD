@extends('layouts.app')

@section('content')
<h1>Create Product</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="prodname">Product Name</label>
        <input type="text" name="prodname" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" class="form-control" required>
            <option value="">Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->catname }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection
