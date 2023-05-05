@extends("layouts.home")
@section('title','References')
@section('keywords','prefabrik ev','hangar','2 katlı prefabrik ev')

@section('content')

    <div class = "row-cols-md-6">
        {!! $setting->references !!}
    </div>
@endsection

