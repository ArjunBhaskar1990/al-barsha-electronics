@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')



    <div class="col-12 grid-margin ms-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Company

                    @if (Session::has('success'))
                        <div class="success-msg">

                            {!! \Session::get('success') !!}

                        </div>
                    @endif
                </h4>
                <div class="my-3">
                    @error('company_name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('company_desc')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('address1')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('address2')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('address3')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('address4')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('phone1')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('phone2')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('whatsapp')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('pinterest')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('xlink')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('fblink')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('instagram')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('google_map')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @error('image')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <form action="{{ route('update.company') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <input type="hidden" value={{ $company->id }} name="company_id" />

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Company Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="company_name" value="{{ $company->company_name }}"
                                        class="form-control" />
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-sm-5 col-form-label">Image 1</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-sm-3">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="{{ $company->image ? $company->image : "Upload Image" }}">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-5">
                            <img class="w-100" src="{{ asset('/storage/uploads/logo/' . $company->image) }}"
                                alt="logo" />
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Company Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="company_desc" id="exampleFormControlTextarea1" rows="4"> {{ $company->company_desc }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address 1</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="address1" id="exampleFormControlTextarea1" rows="3">{{ $company->address1 }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address 2</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="address2" id="exampleFormControlTextarea1" rows="3">{{ $company->address2 }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address 3</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="address3" id="exampleFormControlTextarea1" rows="3">{{ $company->address3 }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address 4</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="address4" id="exampleFormControlTextarea1" rows="3">{{ $company->address4 }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Phone 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone1" value="{{ $company->phone1 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Phone 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone2" value="{{ $company->phone2 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Whatsapp</label>
                                <div class="col-sm-9">
                                    <input type="text" name="whatsapp" value="{{ $company->whatsapp }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" name="email" value="{{ $company->email }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">PinInterest</label>
                                <div class="col-sm-9">
                                    <input type="text" name="pinterest" value="{{ $company->pinterest }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Facebook</label>
                                <div class="col-sm-9">
                                    <input type="text" name="fblink" value="{{ $company->fblink }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Instagram</label>
                                <div class="col-sm-9">
                                    <input type="text" name="instagram" value="{{ $company->instagram }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">X Link</label>
                                <div class="col-sm-9">
                                    <input type="text" name="xlink" value="{{ $company->xlink }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label">Google Map</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="google_map" class="form-control" rows="5">{{ $company->google_map }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-group col-xs-12 d-flex align-items-center mb-4">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    </div>
@endsection
