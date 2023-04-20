@extends("layouts.admin")
@section('title','Admin panel Admin page')

@section('content')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">
                            <h3 class="section-title">Category List</h3>
                        </div>
                        <div class="card">
                            <h5 class="card-header">Create Category</h5>
                            <div class="card-body">
                                <form method="POST" action="{{route("admin.category.store")}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Category</label>
                                        <input id="name" type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Slug</label>
                                        <input id="name" type="text" class="form-control" name="slug">
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">Status</label>
                                       <select class="form-control" name="status">
                                           <option value="ACTIVE">Aktif</option>
                                           <option value="PASSIVE">Pasif</option>
                                       </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
