



@extends('layout')

@section('content')



    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="col-md-12">
                    <h2 class="pull-right">Create Product</h2>
                    <a href="{{route('product.index')}}" class="btn btn-success float-end">List Products</a>
                </div>

            </div>
            <div class="card-body">
                <form action="{{route('product.update', $product->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12 input-list">
                            <div class="form-group">
                                <strong>Name</strong>
                                <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="product name">
                            </div>
                            <div class="form-group form-color">
                                <strong>Color</strong>
                                <input type="color" name="color" value="{{$product->color}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <div class="row group2">
                                    <div class="col-md-6 form-group2">
                                        <div class="form-group">
                                            <strong>Weight</strong>
                                            <input type="text" name="weight" value="{{$product->weight}}" class="form-control" placeholder="product weight">
                                        </div>
                                    </div>

                                    <div class="col-md-6 form-group2">
                                        <div class="form-group">
                                            <strong>Price</strong>
                                            <input type="text" name="price" value="{{$product->price}}" class="form-control" placeholder="product price">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <strong>Description</strong>
                                <textarea type="text" name="description" class="form-control" placeholder="product description" >{{$product->description}}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Update</button>
                </form>

            </div>
        </div>
    </div>

@endsection
