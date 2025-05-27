@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')

    <div class="col-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Our Services

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
                    @error('service_name')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('image')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('desc')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('service_breadcrumb_img')
                        <span class="error">{{ $message }}</span><br />
                    @enderror

                </div>

                <form action="{{ route('update.ourservicescontent') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title1" value="{{ $servicedata->title1 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title2" value="{{ $servicedata->title2 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Service BreadCrumb ( 1920 x 768 )</label>
                                <input type="file" name="service_breadcrumb_img" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="{{ $servicedata->image }}">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>

                                <div class="col-md-3 mt-5">
                                    <img class="w-100"
                                        src="{{ asset('/storage/uploads/common/' . $servicedata->image) }}"
                                        alt="logo" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="desc" rows="4" class="form-control">{{ $servicedata->desc }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary me-2">Update Service Content</button>
                        </div>
                    </div>
                </form>


                <h4 class="card-title">Add New Service </h4>

                <form action="{{ route('store.newservice') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Service Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="service_name" value="" placeholder="Service Name"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image 1</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="Upload Image">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Service Description</label>
                                <div class="col-sm-9">
                                    <textarea type="text" placeholder="Service Description" name="desc" cols="30" rows="5"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-5">
                            <button type="submit" class="btn btn-primary me-2">Add Service</button>
                        </div>
                    </div>

                </form>

                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Image </th>
                                <th> Service Name </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ourservices as $service)
                                <tr>
                                    <td> {{ $loop->index + 1 }} </td>
                                    <td>
                                        <img src="{{ asset('/storage/uploads/services/' . $service->image) }}"
                                            alt="{{ $service->service_name }}" />
                                    </td>
                                    <td> {{ $service->service_name }} </td>
                                    <td>
                                        <span>
                                            <a href="{{ route('edit.ourservices', $service->id) }}">
                                                <i class="fa-solid fa-pencil text-primary"></i>

                                            </a>
                                        </span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <span>

                                            <a href="#" onclick="deleteService({{ $service->id }})">
                                                <i class="fa-solid fa-trash-arrow-up text-danger"></i>
                                            </a>

                                        </span>


                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>




            </div>
        </div>
    </div>
@endsection
