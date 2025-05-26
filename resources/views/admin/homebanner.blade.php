@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')

    <div class="col-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Home Banner

                    @if (Session::has('success'))
                        <div class="success-msg">
                            {!! \Session::get('success') !!}
                        </div>
                    @endif
                </h4>

                <div class="my-3">

                    @error('image')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('heading')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('title')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('feature1')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('feature2')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('feature3')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('feature4')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('feature5')
                        <span class="error">{{ $message }}</span>
                    @enderror

                </div>
                <form action="{{ route('update.homebanner') }}" method="POST" enctype="multipart/form-data">
                    <div class="row">

                        @csrf
                        @method('PATCH')
                        <input type="hidden" value="{{ $homebanner->id }}" name="homebanner_id" />
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Heading</label>
                                <div class="col-sm-9">
                                    <input type="text" name="heading" value="{{ $homebanner->heading }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" value="{{ $homebanner->title }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Feature 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="feature1" value="{{ $homebanner->feature1 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Feature 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="feature2" value="{{ $homebanner->feature2 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Feature 3</label>
                                <div class="col-sm-9">
                                    <input type="text" name="feature3" value="{{ $homebanner->feature3 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Feature 4</label>
                                <div class="col-sm-9">
                                    <input type="text" name="feature4" value="{{ $homebanner->feature4 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Feature 5</label>
                                <div class="col-sm-9">
                                    <input type="text" name="feature5" value="{{ $homebanner->feature5 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label>Image 1 ( 1920 x 1280 ) </label>
                            <input type="file" name="image" class="file-upload-default">
                            <div class="input-group col-xs-12 d-flex align-items-center">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="{{ $homebanner->image ? $homebanner->image : 'Upload Image' }}">
                                <span class="input-group-append ms-2">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>

                            <div class="col-md-3 mt-5">
                                <img class="w-100" src="{{ asset('/storage/uploads/common/' . $homebanner->image) }}"
                                    alt="logo" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary me-2">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
