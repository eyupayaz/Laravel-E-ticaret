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
                                <form>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Input Text</label>
                                        <input id="inputText3" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">Email address</label>
                                        <input id="inputEmail" type="email" placeholder="name@example.com" class="form-control">
                                        <p>We'll never share your email with anyone else.</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText4" class="col-form-label">Number Input</label>
                                        <input id="inputText4" type="number" class="form-control" placeholder="Numbers">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword">Password</label>
                                        <input id="inputPassword" type="password" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">File Input</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body border-top">
                                <h3>Sizing</h3>
                                <form>
                                    <div class="form-group">
                                        <label for="inputSmall" class="col-form-label">Small</label>
                                        <input id="inputSmall" type="text" value=".form-control-sm" class="form-control form-control-sm">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDefault" class="col-form-label">Default</label>
                                        <input id="inputDefault" type="text" value="Default input" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLarge" class="col-form-label">Large</label>
                                        <input id="inputLarge" type="text" value=".form-control-lg" class="form-control form-control-lg">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
