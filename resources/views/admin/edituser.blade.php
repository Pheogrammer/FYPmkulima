@extends('layouts.app')

@section('content')
@section('title')
    Edit Users
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
                <div class="card-header">{{ __('Users Registration') }}</div>

                <div class="card-body">
                    <form action="{{ route('saveEditedUser') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" value="{{ $user->id }}" hidden id="">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" required name="name" id="" class="form-control"
                                        value="{{ $user->name }}" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input disabled type="email" required name="email" id=""
                                        class="form-control" value="{{ $user->email }}" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input required type="tel" name="phone" id="" class="form-control"
                                        value="{{ $user->phone }}" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>

                        </div> <br>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Type</label>
                                    <select required name="userType" id="" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                        <option selected value="{{ $user->userType }}">
                                            {{ $user->userType == 0 ? 'Normal User' : ($user->userType == 1 ? 'Admin' : '') }}
                                        </option>
                                        <option value="1">Admin</option>
                                        <option value="0">Normal User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Agency</label>
                                    <select name="agencyID" id="" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                        <option selected value="{{ $user->agencyID }}">{{ $user->agency->agencyName }}
                                        </option>
                                        @foreach ($agency as $agency)
                                            <option value="{{ $agency->id }}">{{ $agency->agencyName }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('users') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
