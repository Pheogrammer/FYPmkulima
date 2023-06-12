@extends('layouts.view')

@section('content')
@section('title')
    Home
@endSection
<!--/.modal -->
<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-15 pt-md-14">
        <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
            <div class="col  ">
                <h1>Crop Prices in {{ $region->region->name }}</h1>
            </div>
            <div class="col-md-3  ">
                <a href="{{ route('bei') }}" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
<!-- /section -->


<!-- /section -->
<section class="wrapper bg-ligth">
    <div class="container py-2 py-md-10">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col">


                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Date</th>
                            <th>Crop</th>
                            <th>Min Price</th>
                            <th>Max Price</th>
                        </tr>
                    </thead>
                    <tbody class="text-dark">
                        @foreach ($beimazao as $startingAt => $prices)
                            <tr>
                                <td colspan="4">{{ \Carbon\Carbon::parse($startingAt)->format('d/m/Y') }}
                                </td>
                            </tr>
                            @foreach ($prices as $price)
                                <tr>
                                    <td scope="row"></td>
                                    <td>{{ $price->crop->name }}</td>
                                    <td>{{ $price->minprice }}</td>
                                    <td>{{ $price->maxprice }}</td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>


            </div>

        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
</div>
@endsection
