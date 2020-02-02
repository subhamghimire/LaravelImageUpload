@extends('layout')
@section('content')
    <div class="container">
    <form action="{{ route('file.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="card-title ">
                            <h4> Laravel Upload Image </h4>
                        </div>
                    </div>

                    <div class="card-body">

                    <!-- print success message after file upload  -->
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif

                            <div class="form-group" {{ $errors->has('filename') ? 'has-error' : '' }}>
                                <label for="filename"></label>
                                    <input type="file" name="filename" id="filename" class="form-control-file">
                                    <span class="text-danger"> {{ $errors->first('filename') }}</span>
                            </div>
                    </div>

                    <div class="card-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-md"> Upload </button>
                        </div>
                        {{ csrf_field() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
