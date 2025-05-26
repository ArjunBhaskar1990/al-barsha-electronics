@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')

    <div class="col-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Expertise

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
                    @error('percent_1')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('percent_title_1')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('percent_desc_1')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('percent_2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('percent_title_2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('percent_desc_2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('percent_3')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('percent_title_3')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('percent_desc_3')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('percent_4')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('percent_title_4')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('percent_desc_4')
                        <span class="error">{{ $message }}</span><br />
                    @enderror


                </div>

                <form action="{{ route('update.expertise') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Title 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title1" value="{{ $expertise->title1 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Title 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title2" value="{{ $expertise->title2 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Description 1</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="desc" rows="4" class="form-control">{{ $expertise->desc }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Percent 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="percent_1" value="{{ $expertise->percent_1 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Percent Title 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="percent_title_1" value="{{ $expertise->percent_title_1 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Percent Description 1</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="percent_desc_1" rows="4" class="form-control">{{ $expertise->percent_desc_1 }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Percent 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="percent_2" value="{{ $expertise->percent_2 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Percent Title 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="percent_title_2" value="{{ $expertise->percent_title_2 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Percent Description 2</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="percent_desc_2" rows="4" class="form-control">{{ $expertise->percent_desc_2 }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Percent 3</label>
                                <div class="col-sm-9">
                                    <input type="text" name="percent_3" value="{{ $expertise->percent_3 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Percent Title 3</label>
                                <div class="col-sm-9">
                                    <input type="text" name="percent_title_3" value="{{ $expertise->percent_title_3 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Percent Description 3</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="percent_desc_3" rows="4" class="form-control">{{ $expertise->percent_desc_3 }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Percent 4</label>
                                <div class="col-sm-9">
                                    <input type="text" name="percent_4" value="{{ $expertise->percent_4 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Percent Title 4</label>
                                <div class="col-sm-9">
                                    <input type="text" name="percent_title_4"
                                        value="{{ $expertise->percent_title_4 }}" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Percent Description 4</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="percent_desc_4" rows="4" class="form-control">{{ $expertise->percent_desc_4 }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary me-2">Update Expertise</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
