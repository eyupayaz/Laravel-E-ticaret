@extends("layouts.admin")
@section('title','Admin panel Admin page')

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
                                <form method="POST" action="{{ route("admin.product.store") }}">
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
                                        <input id="image" type="text" class="form-control" name="image">
                                    </div>

                                    <div class="form-group">
                                        <label for="user_id" class="col-form-label">User:</label>
                                        <select id="user_id" class="form-control" name="user_id">
                                            <option value="">Select a user</option>
                                            <option value="1">User 1</option>
                                            <option value="2">User 2</option>
                                            <option value="3">User 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="price" class="col-form-label">Price:</label>
                                        <input id="price" type="number" step="0.01" class="form-control" name="price">
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity" class="col-form-label">Quantity:</label>
                                        <input id="quantity" type="number" class="form-control" name="quantity">
                                    </div>
                                    <div class="form-group">
                                        <label for="tax" class="col-form-label">Tax:</label>
                                        <input id="tax" type="number" class="form-control" name="tax"/>
                                    </div>
                                    <button class="btn btn-primary">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
