@extends('layouts.view')

@section('content')
@section('title')
    Weather
@endSection
<!--/.modal -->
<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-15 pt-md-14">
        <h2>Hali ya Hewa kwa siku kadhaa zijazo</h2>
    </div>
    <!-- /.container -->
</section>
<!-- /section -->


<!-- /section -->
<section class="wrapper bg-soft-primary">
    <div class="container py-2 py-md-10">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center bg-light">
            <div class="col">

                <form id="weatherForm" action="{{ route('weatherData') }}" method="GET" class="search-form">
                    <div class="input-group">
                        <input type="text" name="region" placeholder="Enter region" class="form-control">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>

                <br>

                <div id="weatherTableContainer">
                    <table class="table" id="weatherTable">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Temperature</th>
                                <th>Weather</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>



            </div>
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
</div>
@endsection
