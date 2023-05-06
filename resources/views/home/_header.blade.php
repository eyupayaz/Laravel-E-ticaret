@php
$setting= \App\Http\Controllers\HomeController::getsetting()
    @endphp
<div class="container-fluid">
    <div class="row bg-secondary py-2 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark" href="">SSS'ler</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">Yardım</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="{{route('adminhome')}}">Admin</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                @if($setting->facebook !=null)<a class="text-dark px-2" href="{{$setting->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>@endif
                @if($setting->twitter !=null)<a class="text-dark px-2" href="{{$setting->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>@endif

                @if($setting->instegram !=null)<a class="text-dark px-2" href="href="{{$setting->instegram}}" target="_blank"><i class="fab fa-instagram"></i></a>@endif
                @if($setting->youtube !=null)<a class="text-dark pl-2" href="{{$setting->youtube}}" target="_blank"><i class="fab fa-youtube"></i></a>@endif
            </div>
        </div>
    </div>
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="" class="text-decoration-none">
                <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1"><a href="{{route('home')}}">AYZ</a></span>Prefabrik</h1>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Ürünleri Ara">
                    <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-6 text-right">
            <a href="" class="btn border">
                <i class="fas fa-heart text-primary"></i>
                <span class="badge">0</span>
            </a>
            <a href="" class="btn border">
                <i class="fas fa-shopping-cart text-primary"></i>
                <span class="badge">0</span>
            </a>
        </div>
    </div>
</div>
