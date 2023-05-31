@extends('layouts.app')

@section('content')
@section('title')
    Region Assignment
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
                <div class="card-header">{{ __('Region Assignment To '.$zone->name.' Zone') }}</div>

                <div class="card-body">
                    <form action="{{ route('saveAssignedRegion') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" value="{{ $zone->id }}" name="id" hidden>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Select Region</label>
                                    <select required name="name" id="input_id" class="form-control" placeholder=""
                                        aria-describedby="helpId" value="{{ old('name') }}">
                                        <option value="">Select Region</option>
                                        @foreach ($regions as $region)
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
                                <a href="{{ route('editzone', $zone->id) }}" class="btn btn-danger">Cancel</a>
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
