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

            </div>
        </div>
    </div>

@endsection
