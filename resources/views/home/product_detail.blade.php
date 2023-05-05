@extends("layouts.home")
@section('title', 'AYZ PREFABRİK')
@section('description'){{$setting->description }}@endsection
@section('keywords','prefabrik ev','hangar','2 katlı prefabrik ev')

@section('content')


    <!-- Products Start -->
    <div class="container-fluid pt-5">
      {{$product}}
    </div>
    <!-- Products End -->
@endsection
