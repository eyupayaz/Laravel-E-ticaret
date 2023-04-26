@extends("layouts.admin")
@section('title','Product List')

@section('content')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="row">
                    <div class="col-12 py-5">
                        <a class="btn btn-warning"  href="{{route("admin.product.create")}}">Create Product</a>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">{{$myTitle}}</h5>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Tax</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Created At</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($productList as $item)
                                        <tr>
                                            <th scope="row">{{$item->id}}</th>
                                            <td>{{$item->name}}</td>
                                            <td>
                                                @if($item->image)
                                                    <img src="{{ Storage::url($item->image)}}" height="90" alt="">
                                                @endif
                                            </td>
                                            <td>{{$item->category_id}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>{{$item->quantity}}</td>
                                            <td>{{$item->tax}}</td>
                                            <td>{{$item->slug}}</td>
                                            <td>{{$item->status}}</td>
                                            <td>
                                                <a class="btn btn-danger" href="{{route("admin.product.edit", ['id' => $item->id])}}">Edit</a>
                                                <a class="btn btn-danger" href="{{route("admin.product.delete", [ 'id' => $item->id])}}">Delete</a>
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
        </div>
    </div>
@endsection
