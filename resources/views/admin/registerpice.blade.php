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
                <div class="card-header">{{ __('Price Registration') }}</div>

                <div class="card-body">
                    <form action="{{ route('saveRegisteredPrice') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Crop</label>
                                    <select required name="crop" id="input_id" class="form-control" placeholder=""
                                        aria-describedby="helpId" value="{{ old('crop') }}">
                                        <option value="">Select Crop</option>
                                        @foreach ($crop as $crop)
                                            <option value="{{ $crop->id }}">{{ $crop->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Maximum Price per KG</label>
                                    <input type="number" required name="max" id="input_id" class="form-control"
                                        placeholder="" aria-describedby="helpId" value="{{ old('max') }}"
                                        min="0">
                                </div>
                            </div>
                        </div> <br>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Region</label>
                                    <select required name="region" id="input_id" class="form-control" placeholder=""
                                        aria-describedby="helpId" value="{{ old('region') }}">
                                        <option value="">Select Region</option>
                                        @foreach ($region as $region)
                                            <option value="{{ $region->id }}">{{ $region->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Register</button>
                                <a href="{{ route('prices') }}" class="btn btn-danger">Cancel</a>
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
