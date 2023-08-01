@extends('layouts.app')

@section('content')
@section('title')
    Users Registration
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
                    <form action="{{ route('saveRegisteredUser') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" required name="name" id="" class="form-control"
                                        value="{{ old('name') }}" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" required name="email" id="" class="form-control"
                                        value="{{ old('email') }}" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input required type="tel" name="phone" id="" class="form-control"
                                        value="{{ old('phone') }}" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>

                        </div> <br>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Type</label>
                                    <select required name="userType" id="" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                        <option value="">Select Type</option>
                                        <option value="1">Admin</option>
                                        <option value="0">Normal User</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Register</button>
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
