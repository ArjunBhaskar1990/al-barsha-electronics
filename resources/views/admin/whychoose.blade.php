@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')

    <div class="col-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Why Choose Us / Home

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
                    @error('desc')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('sat_customer')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('pro_completed')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('title3')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('desc2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('feature_title1')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('feature_title2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('image')
                        <span class="error">{{ $message }}</span><br />
                    @enderror

                </div>

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Title 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title1" value="{{ $whychoose->title1 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Title 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title2" value="{{ $whychoose->title2 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Description 1</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="desc" rows="4" class="form-control">{{ $whychoose->desc }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label>Satisfied Customer</label>
                                <div class="col-sm-9">
                                    <input type="text" name="sat_customer" value="{{ $whychoose->sat_customer }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label>Project Completed</label>
                                <div class="col-sm-9">
                                    <input type="text" name="pro_completed" value="{{ $whychoose->pro_completed }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Title 3</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title3" value="{{ $whychoose->title3 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Description 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="desc2" value="{{ $whychoose->desc2 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Feature Title 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="feature_title1" value="{{ $whychoose->feature_title1 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Feature Title 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="feature_title2" value="{{ $whychoose->feature_title2 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label>Image (604 x 799)</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="{{ $whychoose->image }}">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 mt-5">
                                <img class="w-100" src="{{ asset('/storage/uploads/whychoose/' . $whychoose->image) }}"
                                    alt="logo" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary me-2">Update Why Choose Us</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection
