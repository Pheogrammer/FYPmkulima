@extends('layouts.view')

@section('content')
@section('title')
    Bei Mikoa
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
<section class="wrapper bg-soft-primary">
    <div class="container py-2 py-md-10">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col bg-light">
 <br>
<a href="{{ route('generatepdfforprice',$id) }}" class="btn btn-success" target="_blank"> Generate PDF</a>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>SN</th>
                            <th>Crop</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody class="text-dark">
                        @php
                            $x = 1;
                        @endphp
                            @foreach ($beimazao as $price)
                                <tr>
                                    <td scope="row">{{$x}}</td>
                                    <td>{{ $price->crop->name }}</td>
                                    <td>{{ $price->maxprice }}</td>
                                </tr>
                                @php
                                    $x++;
                                @endphp
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
