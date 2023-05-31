@extends('layouts.app')

@section('content')
@section('title')
    Region Registration
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
                <div class="card-header">{{ __('Region Registration') }}</div>

                <div class="card-body">
                    <form action="{{ route('saveRegisteredRegion') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input required type="text" name="name" id="input_id" class="form-control"
                                        placeholder="" aria-describedby="helpId" value="{{ old('name') }}">

                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Zone</label>
                                    <select required type="text" name="zoneID" id="input_id" class="form-control"
                                        placeholder="" aria-describedby="helpId">
<option value="">Select Zone</option>
@foreach ($zone as $zone)
<option value="{{ $zone->id }}">{{ $zone->name }}</option>

@endforeach
                                        </select>

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Register</button>
                                <a href="{{ route('zone') }}" class="btn btn-danger">Cancel</a>
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
