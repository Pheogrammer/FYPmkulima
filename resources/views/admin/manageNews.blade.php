@extends('layouts.app')

@section('content')
@section('title')
    News
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
                            {{ __('Agencies') }}
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target=".bd-example-modal-lg">Publish News</button>
                        </div>
                    </div>
                </div>


                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content container">
                            <form method="post" action="{{ route('saveNews') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Publish News</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">News Heading:</label>
                                        <input type="text" name="title" required class="form-control"
                                            id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Description:</label>
                                        <textarea class="form-control" rows="10" name="description" required id="message-text"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Attachment</label>
                                        <input type="file" name="attachment" class="form-control"
                                            id="recipient-name">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Publish</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body ">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Attachment </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $rollingNo = 1;
                            @endphp
                            @foreach ($news as $agency)
                                <tr>
                                    <td>{{ $rollingNo }}</td>
                                    <td>{{ Illuminate\Support\Str::limit(ucwords($agency->title), 40, '...') }}</td>

                                    <td>{{ Illuminate\Support\Str::limit($agency->description), 100, '...' }}</td>
                                    <td>
                                        @if ($agency->attachement)
                                            <a href="{{ asset('NewsAttachments/' . $agency->attachement) }}"
                                                class="btn btn-secondary">Attachment</a>
                                        @endif
                                    </td>

                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target=".bd-example-modal-lg-{{ $agency->id }}">Edit</button>
                                        <div class="modal fade bd-example-modal-lg-{{ $agency->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content container">
                                                    <form method="post" action="{{ route('saveEditedNews') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="text" value="{{ $agency->id }}" name="id" hidden>
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Publish News
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">News
                                                                    Heading:</label>
                                                                <input type="text" value="{{ $agency->title }}"
                                                                    name="title" required class="form-control"
                                                                    id="recipient-name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text"
                                                                    class="col-form-label">Description:</label>
                                                                <textarea class="form-control" rows="10" name="description" required id="message-text">{{ $agency->description }}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name"
                                                                    class="col-form-label">Attachment</label>
                                                                <input type="file" name="attachment"
                                                                    class="form-control" id="recipient-name">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">

                                                            <button type="submit"
                                                                class="btn btn-primary">Publish</button>
                                                            <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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
