@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')

    <div class="col-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Our Branch & Footer Title

                    @if (Session::has('success'))
                        <div class="success-msg">
                            {!! \Session::get('success') !!}
                        </div>
                    @endif
                </h4>

                <div class="my-3">

                    @error('ourbranch_title1')
                        <span class="error">{{ $message }}</span> <br />
                    @enderror
                    @error('ourbranch_title2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('footer_title1')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('footer_title2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror

                </div>

                <form action="{{ route('update.branchfooter') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Branch Title 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="ourbranch_title1"
                                        value="{{ $branchtitle->ourbranch_title1 }}" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Branch Title 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="ourbranch_title2"
                                        value="{{ $branchtitle->ourbranch_title2 }}" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Footer Title 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="footer_title1" value="{{ $footertitle->footer_title1 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Footer Title 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="footer_title2" value="{{ $footertitle->footer_title2 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Contact BreadCrumb  (1920 x 768 )</label>
                                <input type="file" name="contact_bg" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="{{ $company->contact_breadcrumb }}">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 mt-5">
                                <img class="w-100"
                                    src="{{ asset('/storage/uploads/common/' . $company->contact_breadcrumb) }}"
                                    alt="logo" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <button type="submit" class="btn btn-primary me-2">Update </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
