@extends('layouts.app')

@section('content')
@section('title')
    Crop Prices
@endSection
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            {{-- for diplaying erors and messages --}}
            @if (Session::has('message'))
                <div class="alert alert-success">
                    <ul>
                        <li>{{ Session::get('message') }}</li>
                    </ul>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            {{-- ends here --}}
            <div class="card">
                <div class="card-header">

                    <div class="row">
                        <div class="col">
                            {{ __('Crop Prices') }}
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('registerprice') }}" class="btn btn-primary">Register New Price</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Region</th>
                                @foreach ($prices as $price)
                                    <th colspan="2">{{ $price->crop->name }}</th>
                                @endforeach
                            </tr>
                            <tr>
                                <th>Crop</th>
                                @foreach ($prices as $price)
                                    <th>Min Price</th>
                                    <th>Max Price</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prices as $price)
                                <tr>
                                    <td>{{ $price->region->name }}</td>
                                    @foreach ($prices as $regionPrice)
                                        @if ($regionPrice->region->id == $price->region->id)
                                            <td>{{ $regionPrice->minprice }}</td>
                                            <td>{{ $regionPrice->maxprice }}</td>
                                        @else
                                            <td></td>
                                            <td></td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
