@extends("layouts.admin")
@section('title','Create Product')
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
                            <h3 class="section-title">Product List</h3>
                        </div>
                        <div class="card">
                            <h5 class="card-header">Create Product</h5>
                            <div class="card-body">
                                <form method="POST" action="{{ route("admin.product.store") }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="category_id" class="col-form-label">Category:</label>
                                        <select id="category_id" class="form-control" name="category_id">
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Name:</label>
                                        <input id="name" type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="col-form-label">Description:</label>
                                        <textarea id="description" class="form-control" name="description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="image" class="col-form-label">Image:</label>
                                        <input id="image" type="file" class="form-control" name="image">
                                    </div>

                                    <div class="form-group">
                                        <label for="price" class="col-form-label">Price:</label>
                                        <input id="price" type="number" class="form-control" name="price">
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity" class="col-form-label">Quantity:</label>
                                        <input id="quantity" type="number" class="form-control" name="quantity" value="1">
                                    </div>
                                    <div class="form-group">
                                        <label for="tax" class="col-form-label">Tax:</label>
                                        <input id="tax" type="number" class="form-control" name="tax" value="18"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="detail" class="col-form-label">Detail:</label>
                                        <textarea id="summernote"  name="detail"></textarea>
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
                                        <input id="slug" type="text" class="form-control" name="slug"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Status</label>
                                        <select class="form-control" name="status">
                                            <option value="ACTIVE">Aktif</option>
                                            <option value="PASSIVE">Pasif</option>
                                        </select><br><br>
                                    <button class="btn btn-primary">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
