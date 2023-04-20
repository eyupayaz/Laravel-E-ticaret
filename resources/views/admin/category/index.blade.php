@extends("layouts.admin")
@section('title','Admin panel Admin page')

@section('content')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Categories</h5>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">name</th>
                                        <th scope="col">status</th>
                                        <th scope="col">slug</th>
                                        <th scope="col">actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <th scope="row">1</th>
                                        <td>3 + 1 Evler</td>
                                        <td>ACTIVE</td>
                                        <td>uc-arti-bir-evler</td>
                                        <td>
                                            <button class="btn btn-primary">Düzenle</button>
                                            <button class="btn btn-danger">Düzenle</button>
                                        </td>
                                    </tr>

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
