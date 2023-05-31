@extends('layouts.app')

@section('content')
@section('title')
    Regions
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
                            {{ __('Registered Regions') }}
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('registerRegion') }}" class="btn btn-primary">Register New Region</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Zone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $rollingNo = 1;
                            @endphp
                            @foreach ($region as $region)
                                <tr >
                                    <td>{{ $rollingNo }}</td>
                                    <td>{{ ucwords($region->name) }}</td>
                                    <td>{{ $region->zone->name }}</td>
                                    <td>
                                        <a href="{{ route('editregion',$region->id) }}" class="btn btn-primary">Edit</a>
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
