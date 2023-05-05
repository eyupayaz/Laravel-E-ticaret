@extends("layouts.admin")
@section('title','Messages')

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
                            <h3 class="section-title">Mesaj Detay</h3>
                        </div>
                        <div class="card">
                            <h5 class="card-header">Mesaj</h5>
                            <div class="card-body">
                                <form method="POST" action="{{ route("admin.messages.update",['id'=>$data->id])}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <td class="table table-hover">

                                            <tr>
                                                <th scope="col">Id: </th><td>{{$data->id}}</td>
                                            </tr><br>
                                                <th scope="col">Name: </th><td>{{$data->name}}</td>
                                            </tr>
                                            </tr><br>
                                                <th scope="col">Phone: </th><td>{{$data->phone}}</td>
                                            </tr>
                                            </tr><br>
                                                <th scope="col">email: </th><td>{{$data->email}}</td>
                                            </tr>
                                            </tr><br>
                                                <th scope="col">Subject: </th><td>{{$data->subject}}</td>
                                            </tr>
                                            </tr><br>
                                                <th scope="col">Message: </th><td>{{$data->message}}</td>
                                            </tr>
                                            </tr><br>
                                                <th scope="col">Admin Note: </th>
                                                <textarea id="note" value="{{$data->note}}" name="note"></textarea>
                                            </td>
                                            </tr>
                                        <td></td><td>
                                        <button class="btn btn-primary">Update Message</button>
                                        </td>
                                    </tr>
                                </form>
                                <br><br><br><br><br><br><br><br><br><br><br><br>
                                <br><br><br><br><br><br><br><br><br><br><br><br>
                                <br><br><br><br><br><br><br><br><br><br><br><br>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
