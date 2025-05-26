@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')

    <div class="col-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Testimonials

                    @if (Session::has('success'))
                        <div class="success-msg">
                            {!! \Session::get('success') !!}
                        </div>
                    @endif
                </h4>

                <div class="my-3">

                    @error('testi_title1')
                        <span class="error">{{ $message }}</span> <br />
                    @enderror
                    @error('testi_title2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
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

                <form action="{{ route('update.testimonialcontent') }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Title 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="testi_title1" value="{{ $testicontent->testi_title1 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Title 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="testi_title2" value="{{ $testicontent->testi_title2 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary me-2">Update Testimonial Content</button>
                        </div>
                    </div>
                </form>

                <form action="{{ route('store.newreview') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" value="" placeholder="Customer Name"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Desgination</label>
                                <div class="col-sm-9">
                                    <input type="text" name="designation" value="" placeholder="Designation"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group row">
                                <label>Review</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="review" value="" rows="4" placeholder="Review"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Image 1</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="Upload Image">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                        <button type="submit" class="btn btn-primary me-2">Add new review</button>
                                    </span>
                                </div>

                            </div>
                        </div>

                    </div>

                </form>

                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Image </th>
                                <th> Name </th>
                                <th> Designation </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonials as $item)
                                <tr>
                                    <td> {{ $loop->index + 1 }} </td>
                                    <td>
                                        <img src="{{ asset('/storage/uploads/testimonials/' . $item->image) }}"
                                            alt="{{ $item->service_name }}" />
                                    </td>
                                    <td> {{ $item->name }} </td>
                                    <td> {{ $item->designation }} </td>
                                    <td>
                                        <span>
                                            <a href="{{ route('edit.testimonials', $item->id) }}">
                                                <i class="fa-solid fa-pencil text-primary"></i>

                                            </a>
                                        </span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <span>

                                            <a href="#" onclick="deleteTestimonial({{ $item->id }})">
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
