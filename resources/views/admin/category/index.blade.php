@extends("layouts.admin")
@section('title','Admin panel Admin page')

@section('content')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="row">
                   <div class="col-12 py-5">
                       <a class="btn btn-warning"  href="{{route("admin.category.create")}}">Create Category</a>
                   </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">{{$myTitle}}</h5>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">name</th>
                                        <th scope="col">status</th>
                                        <th scope="col">slug</th>
                                        <th scope="col">created at </th>
                                        <th scope="col">updated at </th>
                                        <th scope="col">actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categoryList as $item)
                                    <tr>
                                        <th scope="row">{{$item->id}}</th>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->status}}</td>
                                        <td>{{$item->slug}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                        <td>
                                            <button class="btn btn-primary">Edit</button>
                                            <a class="btn btn-danger" href="{{route("admin.category.destroy", [ 'categoryid' => $item->id])}}">Delete</a>
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
