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

            <form action="{{route('home.shopcart.store',['id' => $product->id])}}" method="post">
                @csrf
                <div class="input-group quantity mx-auto" style="width: 100px;">
                    <div class="input-group-btn">
                        <span class="btn btn-sm btn-primary btn-minus" >
                            <i class="fa fa-minus"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control form-control-sm bg-secondary text-center" name="quantity" value="1" max="{{$product->quantity}}">
                    <div class="input-group-btn">
                        <span type="button" class="btn btn-sm btn-primary btn-plus">
                            <i class="fa fa-plus"></i>
                        </span>
                    </div>
                </div><br>
            <div class="d-flex justify-content-center">
                <h6>{{$product->price}}$</h6><h6 class="text-muted ml-2"><del>{{$product->price + 2000}}$</del></h6>
            </div>
         <input type="submit"  class="btn btn-danger fas fa-shopping-cart text-primary mr-1" value="Add To Cart" style="background-color: #a94442"/>
            <br>
        </form>
      {!! $product->detail!!}
    </div>
    </div>
    <!-- Products End -->
@endsection
