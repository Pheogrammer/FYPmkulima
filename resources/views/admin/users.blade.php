@extends('layouts.app')

@section('content')
@section('title')
    Users
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
                            {{ __('Registered Users') }}
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('registeruser') }}" class="btn btn-primary">Register New User</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    {{-- table to display all users registered in the system --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Type</th>
                                <th>Agency</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $rollingNo = 1;
                            @endphp
                            @foreach ($users as $user)
                                <tr @if($user->status == 0) class="bg-secondary text-light" @endif>
                                    <td>{{ $rollingNo }}</td>
                                    <td>{{ ucwords($user->name) }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->userType }}</td>
                                    <td>{{ $user->agencyID }}</td>
                                    <td>
                                        <a href="{{ route('edituser',$user->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="@if($user->status == 1){{ route('deactivateUser',$user->id) }} @else {{ route('activateUser',$user->id) }} @endif" class="btn @if($user->status == 0) btn-success @else btn-danger @endif">@if($user->status == 0) Activate @else Deactivate @endif</a>
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
