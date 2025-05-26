@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')

    <div class="col-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit {{ $service->service_name }}

                    @if (Session::has('success'))
                        <div class="success-msg">
                            {!! \Session::get('success') !!}
                        </div>
                    @endif
                </h4>

                <div class="my-3">

                    @error('service_name')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('image')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('desc')
                        <span class="error">{{ $message }}</span><br />
                    @enderror

                </div>

                <form action="{{ route('update.ourservices') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" value="{{ $service->id }}" name="service_id" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Service Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="service_name" value="{{ $service->service_name }}"
                                        placeholder="Service Name" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image 1</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="{{ $service->image }}">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>

                                <div class="col-md-3 mt-5">
                                    <img class="w-100" src="{{ asset('/storage/uploads/services/' . $service->image) }}"
                                        alt="logo" />
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Service Description</label>
                                <div class="col-sm-9">
                                    <textarea type="text" placeholder="Service Description" name="desc" cols="30" rows="5"
                                        class="form-control">{{ $service->desc }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-5">
                            <button type="submit" class="btn btn-primary me-2">Update Service</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
