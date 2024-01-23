@extends('dashboard.layout.layout')
@section('main-content')
<div class="col-9 row offset-2">
    <form class="col-6" method="post" action="{{ route('product.updateProduct', ['id' => $product->id]) }}"
        enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-2">
            <label class="form-label">Name: </label>
            <input value="{{$product->name}}" name="name" class="form-control" type="text"
                placeholder="Enter name"/>
            @error('name')
                <div class="validation-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-2">
            <label class="form-label">Price: </label>
            <input value="{{$product->price}}" name="price" class="form-control" type="number"
                placeholder="Enter price" />
            @error('price')
                <div class="validation-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-2">
            <label class="form-label">Image: </label>
            <input value="{{$product->img_url}}" name="image" class="form-file" type="file"
                placeholder="Enter image" />
            @error('image')
                <div class="validation-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-2">
            <label class="form-label">Category: </label>
            <select name="category_id" class="form-select">
                @foreach ($categories as $cate)
                    <option {{ $product->category_id == $cate->id ? 'selected' : '' }}
                        value="{{ $cate->id }}">{{ $cate->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="validation-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-2">
            <button class="btn btn-primary">Save</button>
            <a href="{{ route('product.listProducts') }}">
                <div class="btn btn-dark">Cancel</div>
            </a>
        </div>
    </form>
</div>
<style>
    .nav-item a {
        color: black !important;
    }

    .sidebar img {
        max-width: 100%;
    }

    .validation-error {
        color: red;
    }
    td img {
        width: 240px;
        height: 240px;
    }
</style>
@endsection
