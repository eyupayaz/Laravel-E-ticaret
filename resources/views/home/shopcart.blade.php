@extends("layouts.home")
@section('title','shopcart')
@section('keywords','shoping','shopcart','2 katlı prefabrik ev')

@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th></th>
                        <th scope="col">actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($productList as $item)
                        <tr>
                            <td>
                                @if($item->product->image)
                                    <img src="{{ Storage::url($item->product->image)}}" height="60" alt="">
                                @endif
                            </td>
                            <td>{{$item->product->name}}</td>
                            <td>${{$item->product->price}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>${{$item->product->price*$item->quantity}}</td>
                            <td></td>
                            <td>
                                <a class="btn btn-danger" href="{{route("home.shopcart.destroy", [ 'id' => $item->id])}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>


                </table>
            </div>
            <div class="col-lg-4">
            <!--    <form class="mb-5" action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                -->
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">${{$totalPrice}}</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Tax</h6>
                            <h6 class="font-weight-medium">${{$totalTax}}</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">${{$totalPriceWithTax}}</h5>
                        </div>
                        <a class="btn btn-block btn-primary my-3 py-3"
                        href="{{route('home.shopcart.address')}}"
                        >Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->


@endsection

