@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp
<div class="container-fluid bg-secondary text-dark mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <a href="" class="text-decoration-none">
                <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1"><a href="{{route('home')}}">AYZ</a></span>Prefabrik</h1>
            </a>
            <p>{{$setting->description}}</p>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>{{$setting->address}}</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>{{$setting->email}}</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>{{$setting->phone}}</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i><strong>Faks: </strong>{{$setting->fax}}</p>

        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-dark mb-4">Sayfalar</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-dark mb-2" href="{{route('home')}}"><i class="fa fa-angle-right mr-2">Anasayfa</i></a>
                        <a class="text-dark mb-2" href="{{route('aboutus')}}"><i class="fa fa-angle-right mr-2">Hakkımızda</i></a>
                        <a class="text-dark mb-2" href="{{route('references')}}"><i class="fa fa-angle-right mr-2">Referanslar</i></a>
                        <a class="text-dark mb-2" href="{{route('contact')}}"><i class="fa fa-angle-right mr-2">İletişim</i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-dark mb-4">Kategoriler</h5>
                    <div class="d-flex flex-column justify-content-start">
                        @foreach($categories as $item)
                            <a style="color: #0f0f0f" href="{{route('category-product-list',['id' => $item->id, 'slug' => $item->slug])}}" class="nav-item footer-link">{{$item->name}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-dark mb-4">Kaydol</h5>
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control border-0 py-4" placeholder="Adınız Soyadınız" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border-0 py-4" placeholder="Email"
                                   required="required" />
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block border-0 py-3" type="submit">Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top border-light mx-xl-5 py-4">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-dark">
                &copy; <a class="text-dark font-weight-semi-bold" href="#">{{$setting->company}}</a> Tüm hakları saklıdır.

                <a class="text-dark font-weight-semi-bold" href="https://www.linkedin.com/in/eyupayaz13"> Eyüp Ayaz</a>
                tarafından tasarlanmıştır.
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="{{asset('assets')}}/img/payments.png" alt="">
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/lib/easing/easing.min.js"></script>
<script src="{{asset('assets')}}/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="{{asset('assets')}}/mail/jqBootstrapValidation.min.js"></script>
<script src="{{asset('assets')}}/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="{{asset('assets')}}/js/main.js"></script>
