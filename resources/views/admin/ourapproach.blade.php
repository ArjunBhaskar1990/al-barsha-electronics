@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')

    <div class="col-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Our Approach

                    @if (Session::has('success'))
                        <div class="success-msg">
                            {!! \Session::get('success') !!}
                        </div>
                    @endif
                </h4>

                <div class="my-3">
                    @error('image')
                        <span class="error">{{ $message }}</span> <br />
                    @enderror
                    @error('approach_title1')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('approach_title2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('description')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('speciality1')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('speciality1desc')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('speciality2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('speciality2desc')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('speciality3')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('speciality3desc')
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
                                    <input type="text" name="approach_title1"
                                        value="{{ $ourapproach->approach_title1 }}" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Title 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="approach_title2"
                                        value="{{ $ourapproach->approach_title2 }}" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Description 1</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="description" rows="4" class="form-control">{{ $ourapproach->description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Speciality Title 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="speciality1" value="{{ $ourapproach->speciality1 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Speciality Description 1</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="speciality1desc" rows="4" class="form-control">{{ $ourapproach->speciality1desc }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Speciality Title 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="speciality2" value="{{ $ourapproach->speciality2 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">`
                            <div class="form-group row">
                                <label>Speciality Description 2</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="speciality2desc" rows="4" class="form-control">{{ $ourapproach->speciality2desc }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Speciality Title 3</label>
                                <div class="col-sm-9">
                                    <input type="text" name="speciality3" value="{{ $ourapproach->speciality3 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Speciality Description 3</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="speciality3desc" rows="4" class="form-control">{{ $ourapproach->speciality3desc }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Image ( 600 x 595 )</label>
                            <input type="file" name="image" class="file-upload-default">
                            <div class="input-group col-xs-12 d-flex align-items-center">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="{{ $ourapproach->image }}">
                                <span class="input-group-append ms-2">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-3 mt-3 mb-5">
                            <img class="w-100" src="{{ asset('/storage/uploads/ourapproach/' . $ourapproach->image) }}"
                                alt="logo" />
                        </div>

                    </div>

                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary me-2">Update Our Approach</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
