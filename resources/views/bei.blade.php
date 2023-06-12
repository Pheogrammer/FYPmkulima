@extends('layouts.view')

@section('content')
@section('title')
    Home
@endSection
<!--/.modal -->
<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-15 pt-md-14">

    </div>
    <!-- /.container -->
</section>
<!-- /section -->


<!-- /section -->
<section class="wrapper bg-soft-primary">
    <div class="container py-2 py-md-10">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center bg-light">
            <div class="col">
                <table class="table">
                    <tbody>
                        @foreach ($bei as $index => $bei)
                            @if ($index % 5 === 0)
                                <tr>
                            @endif
                            <td scope="row">
                                <a  style="color: #000;"  href="{{route('beimazao',$bei->regionID)}}">{{ $bei->region->name }}</a>
                            </td>
                            @if (($index + 1) % 5 === 0 || $loop->last)
                                </tr>
                            @endif
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
