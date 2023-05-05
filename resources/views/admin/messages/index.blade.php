@extends("layouts.admin")
@section('title','Contact Messages List')

@section('content')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="row">
                    <div class="col-12 py-5">

                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">{{$myTitle}}</h5>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">email</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Admin Note</th>

                                        <th scope=colspan="3">Actions</th>
-
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->subject}}</td>
                                            <td>{{$item->message}}</td>
                                            <td>{{$item->note}}</td>
                                            <td>{{$item->status}}</td>
                                            <td><a class="btn btn-danger" href="{{ route('admin.messages.edit',['id' => $item->id])}}">Edit</a></td>
                                            <td><a class="btn btn-danger" href="{{ route("admin.messages.delete", [ 'id' => $item->id])}}">Delete</a></td>

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
