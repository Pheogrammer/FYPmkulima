@extends('layouts.view')

@section('content')
@section('title')
    Habari
@endSection
<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">
                    <!-- /.post-category -->
                    <h1 class="display-1 mb-4">{{ $news->title }}</h1>

                    <!-- /.post-meta -->
                </div>
                <!-- /.post-header -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="blog single mt-n17">
                    <div class="card">
                        <figure class="card-img-top"><img
                                src="{{ $news->attachement ? asset('NewsAttachments/' . $news->attachement) : asset('kilimo.jpeg') }}"
                                alt="" /></figure>
                        <div class="card-body">
                            <div class="classic-view">
                                <article class="post">
                                    <div class="post-content mb-5">
                                        <h2 class="h1 mb-4">{{ $news->created_at->format('d/m/Y') }}</h2>
                                        <p>{{ $news->description }}</p>
                                    </div>

                                </article>
                                <!-- /.post -->
                            </div>
                            <!-- /.classic-view -->
                            <hr />
                            <div class="author-info d-md-flex align-items-center mb-3">

                                <div class="mt-3 mt-md-0 ms-auto">
                                    <a href="{{ route('news') }}"
                                        class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0"><< Rudi Nyuma</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.blog -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
@endsection
