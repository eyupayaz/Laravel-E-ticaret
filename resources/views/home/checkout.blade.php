@extends("layouts.home")
@section('title','shopcart')
@section('keywords','shoping','shopcart','2 katlı prefabrik ev')

@section('content')



    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 d-flex justify-content-center align-items-center">
            <form class="needs-validation w-75" novalidate="" method="post" action="{{route('home.shopcart.checkout.payment')}}">
                @csrf
                <h4 class="mb-3">Complete Payment</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" name="user_name" placeholder="" required="">
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">
                            Name on card is required
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Credit card number</label>
                        <input type="text" class="form-control" id="cc-number" name="card_number" placeholder="" required="">
                        <div class="invalid-feedback">
                            Credit card number is required
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" name="expire_date" placeholder="" required="">
                        <div class="invalid-feedback">
                            Expiration date required
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cc-cvv">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" name="cvv" placeholder="" required="">
                        <div class="invalid-feedback">
                            Security code required
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
            </form>
        </div>
    </div>
    <!-- Checkout End -->


@endsection


@section("bottom-js")
    <script>
        $(function(){
            $('#form-submit-button').on('click', function(){
                $('#form1').submit();
            });
        })
    </script>
@endsection
