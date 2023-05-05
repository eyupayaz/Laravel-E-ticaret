@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp
<div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">AYZ</span>Prefabrik</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{route('home')}}" class="nav-item nav-link active">Anasayfa</a>
                        <a href="{{route('aboutus')}}" class="nav-item nav-link">Hakkımızda</a>
                        <a href="{{route('references')}}" class="nav-item nav-link">Referanslar</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Ürünler</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="cart.html" class="dropdown-item">Prefabrik Yapılar</a>
                                <a href="checkout.html" class="dropdown-item">Çelik Yapılar</a>
                            </div>
                        </div>
                        <a href="{{route('contact')}}" class="nav-item nav-link">İletişim</a>
                    </div>
                    @auth
                    <div class="navbar-nav ml-auto py-0">
                        <a href="/profile" class="nav-item nav-link">Profil</a>
                    </div>
                    @else
                        <div class="navbar-nav ml-auto py-0">
                            <a href="/login" class="nav-item nav-link">Giriş</a>
                            <a href="/register" class="nav-item nav-link">Kaydol</a>
                        </div>
                    @endauth
                </div>
            </nav>

