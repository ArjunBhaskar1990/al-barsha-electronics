@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')

    <div class="col-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Testimonials

                    @if (Session::has('success'))
                        <div class="success-msg">
                            {!! \Session::get('success') !!}
                        </div>
                    @endif
                </h4>

                <div class="my-3">

                    @error('name')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('review')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('designation')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('image')
                        <span class="error">{{ $message }}</span><br />
                    @enderror


                </div>


                <form action="{{ route('update.review') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")
                    <input type="hidden" value="{{ $testimony->id }}" name="review_id" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" value="{{ $testimony->name }}" placeholder="Customer Name"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Desgination</label>
                                <div class="col-sm-9">
                                    <input type="text" name="designation" value="{{ $testimony->designation }}" placeholder="Designation"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group row">
                                <label>Review</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="review" value="" rows="4" placeholder="Review" class="form-control">{{ $testimony->review }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Image 1</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="{{ $testimony->image }}">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                        <button type="submit" class="btn btn-primary me-2">Update Review</button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 mt-5">
                                <img class="w-100" src="{{ asset('/storage/uploads/testimonials/' . $testimony->image) }}"
                                    alt="logo" />
                            </div>
                        </div>

                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
