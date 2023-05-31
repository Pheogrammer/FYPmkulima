@extends('layouts.app')

@section('content')
@section('title')
    Agency Registration
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
                <div class="card-header">{{ __('Agency Registration') }}</div>

                <div class="card-body">
                    <form action="{{ route('saveRegisteredAgency') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input required type="text" name="agencyName" id="input_id" class="form-control"
                                        placeholder="" aria-describedby="helpId" value="{{ old('agencyName') }}">

                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">phone</label>
                                    <input required type="tel" name="agencyPhone" id="input_id"
                                        class="form-control" placeholder="" aria-describedby="helpId"
                                        value="{{ old('agencyPhone') }}">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Website</label>
                                    <input required type="url" name="agencyWebsite" id="input_id"
                                        class="form-control" placeholder="" aria-describedby="helpId"
                                        value="{{ old('agencyWebsite') }}">

                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input required type="email" name="agencyEmail" id="input_id"
                                        class="form-control" placeholder="" aria-describedby="helpId"
                                        value="{{ old('agencyEmail') }}">

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Register</button>
                                <a href="{{ route('agencies') }}" class="btn btn-danger">Cancel</a>
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
