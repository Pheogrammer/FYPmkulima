@extends('layouts.app')

@section('content')
@section('title')
    Zone
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
                            {{ __('Registered Zones') }}
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('registerzone') }}" class="btn btn-primary">Register New Zone</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Total Regions</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $rollingNo = 1;
                            @endphp
                            @foreach ($zone as $zone)
                                <tr>
                                    <td>{{ $rollingNo }}</td>
                                    <td>{{ ucwords($zone->name) }}</td>
                                    <td>{{ $zone->regions_count }}</td>
                                    <td>
                                        <a href="{{ route('editzone', $zone->id) }}" class="btn btn-primary">Manage
                                            Zone</a>
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
