@extends('layout')


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="col-md-12">
                    <h2 class="pull-right">Product List</h2>
                    <a href="/create" class="btn btn-success float-right">Create New</a>
                </div>

            </div>
            <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                    <tr>

                        <th>Create At</th>
                        <th>Name</th>
                        <th>Weight</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($products as $product)
                            <tr>

                                <td>{{$product->created_at}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->weight}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                        <a href="{{route('product.edit', $product->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('product.show', $product->id)}}" class="btn btn-primary">Show</a>
                                        <form action="{{route('product.destroy', $product->id)}}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                             @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="d-flex">
                {!! $products->links() !!}
            </div>
        </div>

    </div>

@endsection
