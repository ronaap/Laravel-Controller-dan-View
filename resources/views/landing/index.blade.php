@extends('component.app')

@section('content')
    <div class="container mt-5">
        <h1>hello {{$name}},im from {{$location}} </h1>
        <a href="{{url('/landing/profile')}}" class="btn btn-primary"> profile </a>
    </div>
@endsection
