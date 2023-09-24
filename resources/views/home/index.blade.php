@extends('component.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-body">
                    <p class="card-text">HI FULAN, SELAMAT DATANG DI HALAMAN UTAMA</p>
                    <a href="{{url('profil')}}" class="btn btn-primary">Halaman Profile</a>
                    <a href="{{url('kampus')}}" class="btn btn-success">Halaman Kampus</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
