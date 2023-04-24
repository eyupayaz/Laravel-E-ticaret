@extends("layouts.admin")
@section('title','Edit Category')

@section('content')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">
                            <h3 class="section-title">Category Edit</h3>
                        </div>
                        <div class="card">
                            <h5 class="card-header">Edit Category</h5>
                            <div class="card-body">
                                <form method="POST" action="{{route("admin.category.update",['categoryid'=>$data->id])}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Category</label>
                                        <input id="name" type="text" class="form-control" name="name" value="{{$data->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Slug</label>
                                        <input id="slug" type="text" class="form-control" name="slug" value="{{$data->slug}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Status</label>
                                        <select class="form-control" name="status">
                                            <option selected = "selected">{{$data->status}}</option>
                                            <option>ACTIVE</option>
                                            <option>PASSIVE</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
