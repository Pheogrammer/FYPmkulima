@extends('layouts.app')

@section('content')
@section('title')
    Crops
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

                    <div class="row">
                        <div class="col">
                            {{ __('Crops') }}
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('registerCrop') }}" class="btn btn-primary">Register New Crop</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $rollingNo = 1;
                            @endphp
                            @foreach ($crop as $crop)
                                <tr>
                                    <td>{{ $rollingNo }}</td>
                                    <td>{{ ucwords($crop->name) }}</td>
                                    <td>
                                        <a href="{{ route('editcrop', $crop->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                                @php
                                    $rollingNo++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
