@extends('layouts.app')

@section('content')
@section('title')
    Home
@endSection
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <a href="{{ route('zone') }}" class="col unstyle">
                            <div class="card hover-change-color">
                                <img class="card-img-top" src="holder.js/100x180/" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">{{ count($zone) }}</h4>
                                    <p class="card-text">Zones</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('region') }}" class="col  unstyle">
                            <div class="card hover-change-color">
                                <img class="card-img-top" src="holder.js/100x180/" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">{{ count($region) }}</h4>
                                    <p class="card-text">Regions</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <br>

                    <div class="row">
                        <a href="{{ route('agencies') }}" class="col unstyle">
                            <div class="card hover-change-color">
                                <img class="card-img-top" src="holder.js/100x180/" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">{{ count($agency) }}</h4>
                                    <p class="card-text">Agencies</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('users') }}" class="col unstyle">
                            <div class="card hover-change-color">
                                <img class="card-img-top" src="holder.js/100x180/" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">{{ count($users) }}</h4>
                                    <p class="card-text">Users</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <br>

                    <div class="row">
                        <a href="{{ route('crops') }}" class="col unstyle">
                            <div class="card hover-change-color">
                                <img class="card-img-top" src="holder.js/100x180/" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">{{ count($crops) }}</h4>
                                    <p class="card-text">Crops</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('prices') }}" class="col unstyle">
                            <div class="card hover-change-color">
                                <img class="card-img-top" src="holder.js/100x180/" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">{{ count($prices) }}</h4>
                                    <p class="card-text">Prices</p>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
