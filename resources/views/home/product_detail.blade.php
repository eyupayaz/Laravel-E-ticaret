@extends("layouts.home")
@section('title', 'AYZ PREFABRİK')
@section('description'){{$setting->description }}@endsection
@section('keywords','prefabrik ev','hangar')

@section('content')


    <!-- Products Start -->
    <div class="container-fluid pt-5">
       <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
        <img class="img-fluid w-100" src="{{Storage::url($product->image)}}" alt="">
    </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
            <h6 class="text-truncate mb-3">{{$product->name}}</h6>
            <h5>Stok: {!! $product->quantity!!}</h5>
            <div class="d-flex justify-content-center">
                <h6>{{$product->price}}$</h6><h6 class="text-muted ml-2"><del>{{$product->price + 2000}}$</del></h6>
            </div>
        </div>

        <div class="card-footer d-flex justify-content-between bg-light border">
            <a href="" class="btn btn-12 text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
        </div><br>

      {!! $product->detail!!}
    </div>
    <!-- Products End -->
@endsection
