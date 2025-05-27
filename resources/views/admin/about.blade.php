@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')



    <div class="col-8 grid-margin ms-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">About Us

                    @if (Session::has('success'))
                        <div class="success-msg">

                            {!! \Session::get('success') !!}

                        </div>
                    @endif
                </h4>
                <div class="my-3">
                    @error('image1')
                        <span class="error">*{{ $message }}</span> <br />
                    @enderror
                    @error('image2')
                        <span class="error">*{{ $message }}</span><br />
                    @enderror
                    @error('title1')
                        <span class="error">*{{ $message }}</span><br />
                    @enderror
                    @error('title2')
                        <span class="error">*{{ $message }}</span><br />
                    @enderror
                    @error('desc')
                        <span class="error">*{{ $message }}</span><br />
                    @enderror
                    @error('feature1')
                        <span class="error">*{{ $message }}</span><br />
                    @enderror
                    @error('feature2')
                        <span class="error">*{{ $message }}</span><br />
                    @enderror
                    @error('client_image1')
                        <span class="error">*{{ $message }}</span><br />
                    @enderror
                    @error('client_image2')
                        <span class="error">*{{ $message }}</span><br />
                    @enderror
                    @error('client_image3')
                        <span class="error">*{{ $message }}</span><br />
                    @enderror
                    @error('client_image4')
                        <span class="error">*{{ $message }}</span><br />
                    @enderror
                    @error('client_image5')
                        <span class="error">*{{ $message }}</span><br />
                    @enderror
                    @error('bulb_title1')
                        <span class="error">*{{ $message }}</span><br />
                    @enderror
                    @error('bulb_title2')
                        <span class="error">*{{ $message }}</span><br />
                    @enderror
                    @error('experience')
                        <span class="error">*{{ $message }}</span><br />
                    @enderror
                    @error('review_count')
                        <span class="error">*{{ $message }}</span><br />
                    @enderror
                    @error('client_count')
                        <span class="error">*{{ $message }}</span><br />
                    @enderror

                </div>
                <form action="{{ route('update.aboutus') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title1" value="{{ $about->title1 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title2" value="{{ $about->title2 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label>Image 1 ( 473 x 596 ) </label>
                                <input type="file" name="image1" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="{{ $about->image1 }}">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 mt-5">
                                <img class="w-100" src="{{ asset('/storage/uploads/about/' . $about->image1) }}"
                                    alt="logo" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label>Image 2 ( 235 x 244 ) </label>
                                <input type="file" name="image2" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="{{ $about->image2 }}">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 mt-5">
                                <img class="w-100" src="{{ asset('/storage/uploads/about/' . $about->image2) }}"
                                    alt="logo" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label>About BreadCrumb ( 1920 x 768 ) </label>
                                <input type="file" name="about_bg" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="{{ $about->about_page_bg }}">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 mt-5">
                                <img class="w-100" src="{{ asset('/storage/uploads/common/' . $about->about_page_bg) }}"
                                    alt="logo" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Description</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="desc" value="" class="form-control">{{ $about->desc }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Feature 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="feature1" value="{{ $about->feature1 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Feature 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="feature2" value="{{ $about->feature2 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Bulb Title 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="bulb_title1" value="{{ $about->bulb_title1 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Bulb Title 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="bulb_title2" value="{{ $about->bulb_title2 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Experience</label>
                                <div class="col-sm-3">
                                    <input type="text" name="experience" value="{{ $about->experience }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Review Count</label>
                                <div class="col-sm-3">
                                    <input type="text" name="review_count" value="{{ $about->review_count }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Client Count</label>
                                <div class="col-sm-3">
                                    <input type="text" name="client_count" value="{{ $about->client_count }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Client Image 1 ( 50 x 50 ) </label>
                                <input type="file" name="client_image1" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="{{ $about->client_image1 }}">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img class="w-50" src="{{ asset('/storage/uploads/about/' . $about->client_image1) }}"
                                    alt="logo" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Client Image 2 ( 50 x 50 ) </label>
                                <input type="file" name="client_image2" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="{{ $about->client_image2 }}">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <img class="w-50" src="{{ asset('/storage/uploads/about/' . $about->client_image2) }}"
                                    alt="logo" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Client Image 3 ( 50 x 50 ) </label>
                                <input type="file" name="client_image3" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="{{ $about->client_image3 }}">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <img class="w-50" src="{{ asset('/storage/uploads/about/' . $about->client_image3) }}"
                                    alt="logo" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Client Image 4 ( 50 x 50 ) </label>
                                <input type="file" name="client_image4" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="{{ $about->client_image4 }}">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <img class="w-50" src="{{ asset('/storage/uploads/about/' . $about->client_image4) }}"
                                    alt="logo" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Client Image 5 ( 50 x 50 ) </label>
                                <input type="file" name="client_image5" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="{{ $about->client_image5 }}">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <img class="w-50" src="{{ asset('/storage/uploads/about/' . $about->client_image5) }}"
                                    alt="logo" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
