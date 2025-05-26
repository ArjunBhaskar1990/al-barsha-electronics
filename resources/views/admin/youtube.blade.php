@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')

    <div class="col-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Youtube Section

                    @if (Session::has('success'))
                        <div class="success-msg">
                            {!! \Session::get('success') !!}
                        </div>
                    @endif
                </h4>

                <div class="my-3">

                    @error('youtube_title1')
                        <span class="error">{{ $message }}</span> <br />
                    @enderror
                    @error('youtube_title2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('youtube_link')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('image')
                        <span class="error">{{ $message }}</span><br />
                    @enderror

                </div>

                <form action="{{ route('update.youtube') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Youtube Title 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="youtube_title1" value="{{ $youtube->youtube_title1 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Youtube Title 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="youtube_title2" value="{{ $youtube->youtube_title2 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Youtube Link</label>
                                <div class="col-sm-9">
                                    <input type="text" name="youtube_link" value="{{ $youtube->youtube_link }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label>Background Image (1920 x 967)</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="{{ $youtube->youtube_image }}">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 mt-5">
                                <img class="w-100" src="{{ asset('/storage/uploads/common/' . $youtube->youtube_image) }}"
                                    alt="{{ $youtube->youtube_image }}" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary me-2">Update Youtube Section</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
