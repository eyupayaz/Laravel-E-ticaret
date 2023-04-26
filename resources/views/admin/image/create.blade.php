@extends("layouts.admin")
@section('title','Create İmages')
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
@section('content')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">
                            <h3 class="section-title">Add İmages</h3>
                        </div>
                        <div class="card">
                            <h5 class="card-header">Product: {{$data->name}}</h5>
                            <div class="card-body">
                                <form method="POST" action="{{ route("admin.image.store",['product_id'=>$data->id])}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Name:</label>
                                        <input id="name" type="text" class="form-control" name="name">
                                    </div>

                                    <div class="form-group">
                                        <label for="image" class="col-form-label">Image:</label>
                                        <input id="image" type="file" class="form-control" name="image">
                                    </div>

                                   <br>
                                    <button class="btn btn-primary">Add Image</button>
                                </form>



                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Actions</th>
                                            -
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $images as $item)
                                            <tr>
                                                <th scope="row">{{$item->id}}</th>
                                                <td>{{$item->name}}</td>
                                                <td>
                                                    @if($item->image)
                                                        <img src="{{ Storage::url($item->image)}}" height="60" alt="">
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger" href="{{ route('admin.image.delete', [ 'product_id'=>$data->id])}}">Delete</a>
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
            </div>
        </div>
@endsection
