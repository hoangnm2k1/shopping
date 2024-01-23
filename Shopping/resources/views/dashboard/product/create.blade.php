@extends('dashboard.layout.layout')
@section('main-content')
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
    <div class="container row">
        <form class="col-8 offset-2" method="POST" action="{{ route('product.saveProduct') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2">
                <label class="form-label">Name: </label>
                <input value="{{ old('name') }}" name="name" class="form-control" type="text"
                    placeholder="Enter name"  id="name"/>

                @error('name')
                    <div class="validation-error"> {{ $message }} </div>
                @enderror


            </div>
            <div class="form-group mb-2">
                <label class="form-label">Price: </label>
                <input value="{{ old('price') }}" name="price" class="form-control" type="number"
                    placeholder="Enter price"  id="price"/>
                @error('price')
                    <div class="validation-error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label class="form-label">Image: </label>
                {{-- <input value="{{ old('image') }}" name="image" class="form-control" type="text"
                    placeholder="Enter image"  id="image"/> --}}
                <input value="{{ old('image') }}" name="image" class="form-control" type="file"
                    placeholder="Enter image"  id = "image"/>

                @error('image')
                    <div class="validation-error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label class="form-label">Category: </label>
                <select name="category_id" class="form-control"  id="category_id">
                    @foreach ($categories as $cate)
                        <option {{ old('category_id') == $cate->id ? 'selected' : '' }}
                            value="{{ $cate->id }}">{{ $cate->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="validation-error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <a href="/product/list" style="text-decoration: none">
                    <button class="btn btn-primary">Create</button>
                </a>
                <div class="btn btn-dark" >Cancel</div>
            </div>
        </form>
    </div>
    <script>
        document.querySelector('.btn-dark').addEventListener('click', function() {
            document.getElementById('name').value = '';
            document.getElementById('price').value = '';
            document.getElementById('image').value = '';
            document.getElementById('category_id').value = '1';
        });
    </script>

@endsection
