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
                            <h3 class="section-title">Setting Edit</h3>
                        </div>
                        <div class="card">
                            <h5 class="card-header">Setting edit</h5>
                            <div class="card-body">
                                <form method="POST" action="{{ route("admin.setting.update")}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input id="name" type="text" value="{{$data->id}}" class="form-control" name="name">
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
                                        <label for="company" class="col-form-label">Company:</label>
                                        <input id="company" type="text" value="{{$data->company}}" class="form-control" name="company">
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="col-form-label">Address:</label>
                                        <input id="address" type="text" value="{{$data->address}}"  class="form-control" name="address">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="col-form-label">Phone:</label>
                                        <input id="phone" type="number" value="{{$data->phone}}" class="form-control" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="fax" class="col-form-label">Fax:</label>
                                        <input id="fax" type="number" value="{{$data->fax}}" class="form-control" name="fax" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-form-label">Email:</label>
                                        <input id="email" type="text" value="{{$data->email}}" class="form-control" name="email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="smtpserver" class="col-form-label">Smtp Server:</label>
                                        <input id="smtpserver" type="text" value="{{$data->smtpserver}}" class="form-control" name="smtpserver" />
                                    </div>
                                    <div class="form-group">
                                        <label for="smtppassword" class="col-form-label">Smtp Password:</label>
                                        <input id="smtppassword" type="text" value="{{$data->smtppassword}}" class="form-control" name="smtppassword" />
                                    </div>
                                    <div class="form-group">
                                        <label for="smtpport" class="col-form-label">Smtp Port:</label>
                                        <input id="smtpport" type="text" value="{{$data->smtpport}}" class="form-control" name="smtpport" />
                                    </div>
                                    <div class="form-group">
                                        <label for="instegram" class="col-form-label">İnstegram:</label>
                                        <input id="instegram" type="text" value="{{$data->instegram}}" class="form-control" name="instegram" />
                                    </div>
                                    <div class="form-group">
                                        <label for="facebook" class="col-form-label">Facebook: </label>
                                        <input id="facebook" type="text" value="{{$data->facebook}}" class="form-control" name="facebook" />
                                    </div>
                                    <div class="form-group">
                                        <label for="twitter" class="col-form-label">Twitter:</label>
                                        <input id="twitter" type="text" value="{{$data->twitter}}" class="form-control" name="twitter" />
                                    </div>
                                    <div class="form-group">
                                        <label for="youtube" class="col-form-label">Youtube:</label>
                                        <input id="youtube" type="text" value="{{$data->youtube}}" class="form-control" name="youtube" />
                                    </div>

                                    <div class="form-group">
                                        <label for="aboutus" class="col-form-label">Aboutus:</label>
                                        <input id="aboutus" type="text" value="{{$data->aboutus}}" class="form-control" name="aboutus" />
                                    </div>
                                    <div class="form-group">
                                        <label for="contact" class="col-form-label">Contact:</label>
                                        <input id="contact" type="text" value="{{$data->contact}}" class="form-control" name="contact" />
                                    </div>
                                    <div class="form-group">
                                        <label for="references" class="col-form-label">References:</label>
                                        <textarea id="summernote" value="{{$data->references}}" name="references"></textarea>
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
