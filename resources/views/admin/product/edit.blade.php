@extends("layouts.admin")
@section('title','Admin panel Edit page')

@section('content')@section('javascript')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">
                            <h3 class="section-title">Product Edit</h3>
                        </div>
                        <div class="card">
                            <h5 class="card-header">Edit Product</h5>
                            <div class="card-body">
                                <form method="POST" action="{{ route("admin.product.update",['id'=>$data->id])}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="category_id" class="col-form-label">Category:</label>
                                        <select id="category_id" class="form-control" name="category_id">
                                            @foreach($datalist as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Name:</label>
                                        <input id="name" type="text" value="{{$data->name}}" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="col-form-label">Description:</label>
                                        <textarea id="description" value="{{$data->description}}" class="form-control" name="description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="image" class="col-form-label">Image:</label>
                                        <input id="image" type="file" value="{{$data->image}}" class="form-control" name="image">

                                        @if($data->image)
                                            <img src="{{ Storage::url($data->image)}}" height="90" alt="">
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="price" class="col-form-label">Price:</label>
                                        <input id="price" type="number" value="{{$data->price}}"  class="form-control" name="price">
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity" class="col-form-label">Quantity:</label>
                                        <input id="quantity" type="number" value="{{$data->quantity}}" class="form-control" name="quantity" value="1">
                                    </div>
                                    <div class="form-group">
                                        <label for="tax" class="col-form-label">Tax:</label>
                                        <input id="tax" type="number" class="form-control" name="tax" value="18"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="detail" class="col-form-label">Detail:</label>
                                        <textarea id="summernote" value="{{$data->detail}}" name="detail"></textarea>
                                        <script>
                                            $('#summernote').summernote({
                                                placeholder: '',
                                                tabsize: 2,
                                                height: 120,
                                                toolbar: [
                                                    ['style', ['style']],
                                                    ['font', ['bold', 'underline', 'clear']],
                                                    ['color', ['color']],
                                                    ['para', ['ul', 'ol', 'paragraph']],
                                                    ['table', ['table']],
                                                    ['insert', ['link', 'picture', 'video']],
                                                    ['view', ['fullscreen', 'codeview', 'help']]
                                                ]
                                            });
                                        </script>
                                    </div>

                                    <div class="form-group">
                                        <label for="slug" class="col-form-label">Slug:</label>
                                        <input id="slug" type="text" value="{{$data->slug}}" class="form-control" name="slug"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Status</label>
                                        <select class="form-control" name="status">
                                            <option selected = "selected">{{$data->status}}</option>
                                            <option value="ACTIVE">Aktif</option>
                                            <option value="PASSIVE">Pasif</option>
                                        </select><br><br>
                                        <button class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
