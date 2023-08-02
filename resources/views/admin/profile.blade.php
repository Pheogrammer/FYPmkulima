@extends('layouts.app')

@section('content')
@section('title')
    User Profile
@endsection
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>{{ Auth::user()->name }}'s Profile</h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
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
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{{ Session::get('message') }}</li>
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('saveProfile') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" id="" value="{{ Auth::user()->id }}" hidden>
                        <div class="row ">
                            <div class="col  ">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" value='{{ Auth::user()->name }}' name="name" required
                                        class="form-control" id="name" aria-describedby="nameHelp"
                                        placeholder="Enter name">
                                </div>
                            </div>
                            <div class="col  ">
                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="email" value='{{ Auth::user()->email }}' name="email" required
                                        disabled class="form-control" id="email" aria-describedby="nameHelp"
                                        placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                       

                        <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Update</button>
                                &nbsp;
                                <a href="#" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <br>
            <br>
            <div class="card">
                <div class="card-header">
                    <h4>Change Password</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('changePassword') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" id="" value="{{ Auth::user()->id }}" hidden>
                        <div class="row ">
                            <div class="col  ">
                                <div class="form-group">
                                    <label for="name">Password</label>
                                    <input type="password" name="password" required class="form-control" id="name"
                                        aria-describedby="nameHelp" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="col  ">
                                <div class="form-group">
                                    <label for="name">Confirm Password</label>
                                    <input type="password" name="cpassword" required class="form-control" id="email"
                                        aria-describedby="nameHelp" placeholder="Enter confirm password">
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Update</button>
                                &nbsp;
                                <a href="#" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
