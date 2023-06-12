@extends('layouts.view')

@section('content')
@section('title')
    Habari
@endSection
<!--/.modal -->
<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-15 pt-md-14">
        <h2>Habari</h2>
    </div>
    <!-- /.container -->
</section>
<!-- /section -->


<!-- /section -->
<section class="wrapper bg-soft-primary">
    <div class="container py-2 py-md-10">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center bg-light">
            <div class="col">

                <style>
                    .card {
                        margin-bottom: 20px;
                    }

                    .pagination-container {
                        margin-top: 20px;
                        display: flex;
                        justify-content: center;
                    }
                </style>

                <div class="row">
                    @foreach ($news->chunk(3) as $chunk)
                        @foreach ($chunk as $item)
                            <div class='col-md-4'>
                                <div class="card">
                                    <img class="card-img-top" height="200px"
                                        src="{{ $item->attachement ? asset('NewsAttachments/' . $item->attachement) : asset('kilimo.jpeg') }}"
                                        alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ Illuminate\Support\Str::limit(ucwords($item->title), 40, '...') }}</h4>
                                        <p class="card-text">{{ Illuminate\Support\Str::limit($item->description, 40, '...') }}</p>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">{{ $item->created_at->format('d/m/Y H:i') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>

                <div class="pagination-container">
                    {{ $news->render('vendor.pagination.bootstrap-4') }}
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
