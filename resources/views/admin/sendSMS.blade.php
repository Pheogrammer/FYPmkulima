@extends('layouts.app')

@section('content')
@section('title')
    Price Registration
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
                    <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                        <div class="col">
                            {{ __('Price Registration') }}
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('importfromExcel') }}" class="btn btn-primary">Import Prices From Excel
                                File</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('sendSMStoAll') }}" method="post" enctype="multipart/form-data">
                        @csrf


                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Region</label>
                                    <textarea rows="10" required name="message" id="input_id" class="form-control" placeholder=""
                                        aria-describedby="helpId">{{ old('SMS') }}</textarea>

                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Send</button>
                                <a href="{{ route('home') }}" class="btn btn-danger">Cancel</a>
                            </div>
                            <div class="col">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
