@extends('layouts.app')

@section('content')
@section('title')
    Edit Zone
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
                <div class="card-header">{{ __('Edit Zone') }}</div>

                <div class="card-body">
                    <form action="{{ route('saveEditedZone') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" value="{{ $zone->id }}" name="id" hidden>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input required type="text" name="name" id="input_id" class="form-control"
                                        placeholder="" aria-describedby="helpId" value="{{ $zone->name }}">

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('zone') }}" class="btn btn-danger">Cancel</a>
                            </div>
                            <div class="col">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">

                    <div class="row">
                        <div class="col">
                            {{ __('Assigned Regions') }}
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('assignRegiontoZone', $zone->id) }}" class="btn btn-primary">Assign New
                                Region</a>
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
                            @foreach ($regionAssigned as $regionAssigned)
                                <tr>
                                    <td>{{ $rollingNo }}</td>
                                    <td>{{ ucwords($regionAssigned->name) }}</td>
                                    <td>
                                        <a href="{{ route('editregion', $regionAssigned->id) }}"
                                            class="btn btn-danger">Edit</a>
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
