@extends("layouts.home")
@section('title','About Us')
@section('keywords','prefabrik ev','hangar','2 katlı prefabrik ev')

@section('content')

    <div class = "row-cols-md-6">
        {{$setting->aboutus}}
    </div>
@endsection

