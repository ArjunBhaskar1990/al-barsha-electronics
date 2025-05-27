@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')

    <div class="col-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Why Choose (About)

                    @if (Session::has('success'))
                        <div class="success-msg">
                            {!! \Session::get('success') !!}
                        </div>
                    @endif
                </h4>

                <div class="my-3">
                    @error('title1')
                        <span class="error">{{ $message }}</span> <br />
                    @enderror
                    @error('title2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('image1')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('image2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('desc')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('percentage_title1')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('percentage_title1_count')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('percentage_title2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('percentage_title2_count')
                        <span class="error">{{ $message }}</span><br />
                    @enderror

                </div>

                <form action="{{ route('update.whychooseabout') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Title 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title1" value="{{ $whychooseabout->title1 }}" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Title 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title2" value="{{ $whychooseabout->title2 }}" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Description</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="desc" rows="4" class="form-control">{{ $whychooseabout->desc }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Percentage Title 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="percentage_title1" value="{{ $whychooseabout->percentage_title1 }}" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label>Percentage Title 1 Count</label>
                                <div class="col-sm-9">
                                    <input type="text" name="percentage_title1_count" value="{{ $whychooseabout->percentage_title1_count }}" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Percentage Title 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="percentage_title2" value="{{ $whychooseabout->percentage_title2 }}" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label>Percentage Title 2 Count</label>
                                <div class="col-sm-9">
                                    <input type="text" name="percentage_title2_count" value="{{ $whychooseabout->percentage_title2_count }}" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Image 1 ( 413 x 452 )</label>
                            <input type="file" name="image1" class="file-upload-default">
                            <div class="input-group col-xs-12 d-flex align-items-center">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="{{ $whychooseabout->image1 }}">
                                <span class="input-group-append ms-2">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-3 mt-3 mb-5">
                            <img class="w-100" src="{{ asset('/storage/uploads/whychoose/'.$whychooseabout->image1) }}" alt="logo" />
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Image 2 ( 344 x 377 )</label>
                            <input type="file" name="image2" class="file-upload-default">
                            <div class="input-group col-xs-12 d-flex align-items-center">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="{{ $whychooseabout->image2 }}">
                                <span class="input-group-append ms-2">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-3 mt-3 mb-5">
                            <img class="w-100" src="{{ asset('/storage/uploads/whychoose/'.$whychooseabout->image2) }}" alt="logo" />
                        </div>

                    </div>

                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary me-2">Update Why Choose (About )</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
