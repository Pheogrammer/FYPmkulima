@extends('layouts.app')

@section('content')
@section('title')
    Crop Prices
@endSection
@php
    use App\Models\Zone;
    use App\Models\Region;
    use App\Models\Crop;
    use App\Models\Price;
    use App\Models\Agency;
    use App\Models\User;
    use Carbon\Carbon as Carbon;
    
@endphp
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
                    <table class="table allRegions">
                        <thead>
                            <tr>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $check = 1;
                            @endphp
                            @foreach ($region as $price)
                                <tr>

                                    <td>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td colspan="5">
                                                        <h2> {{ $price->name }}</h2>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>SN</th>
                                                    <th>Crop</th>
                                                    <th>Min Price</th>
                                                    <th>Max Price</th>
                                                    <th>Starting Date</th>
                                                </tr>
                                            </thead>
                                            @php
                                                $rollingNo = 1;
                                                $prices = Price::where('regionID', $price->id)
                                                    ->with('crop')
                                                    ->get();
                                            @endphp
                                            <tbody>
                                                @foreach ($prices as $crop)
                                                    <tr>
                                                        <td>{{ $rollingNo }}</td>
                                                        <td>{{ $crop->crop->name }}</td>
                                                        <td>{{ $crop->minprice }} Tzs</td>
                                                        <td>{{ $crop->maxprice }} Tzs</td>
                                                        <td>{{ Carbon::parse($crop->starting_at)->format('d/m/Y') }}
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $rollingNo++;
                                                    @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </td>
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
