@extends('dashboard.layout.layout')
@section('main-content')
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            {{-- <h1 class="h3 mb-2 text-gray-800">List</h1> --}}
            <a href="{{route('product.showCreateProduct')}}"><div class="btn btn-success mb-3">Create</div></a>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">List Product Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr class="text-center align-middle">
                                        <th scope="row">{{$product->id}}</th>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price}}</td>
                                        {{-- <td><img src="{{$product->img_url}}" alt=""></td> --}}
                                        <td><img src="{{asset('dashboard/uploads/'.$product->img_url)}}" alt=""></td>
                                        <td>{{$product->category->name}}</td>
                                        <td>
                                            <a href=" {{ route('product.showEditProduct', [$product->id]) }}" style="text-decoration: none">
                                                <button type="button" class="btn btn-warning">Edit</button>
                                            </a>
                                            <a href=" {{ route('product.deleteProduct', [$product->id]) }}"
                                                onclick="return confirm('Bạn có muốn xóa không?')">
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
   </div>
</html>
<style>
    td img {
        width: 240px;
        height: 240px;
    }
</style>
@endsection
