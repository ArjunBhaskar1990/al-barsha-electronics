@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')

    @if ($page->page_id === 1)
        @php
            $pagename = 'Home Page';
        @endphp
    @elseif ($page->page_id === 2)
        @php
            $pagename = 'About Us Page';
        @endphp
    @elseif ($page->page_id === 3)
        @php
            $pagename = 'Services Page';
        @endphp
    @elseif ($page->page_id === 4)
        @php
            $pagename = 'Contact Us Page';
        @endphp
    @endif

    <div class="col-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit {{ $pagename }} Meta

                    @if (Session::has('success'))
                        <div class="success-msg">
                            {!! \Session::get('success') !!}
                        </div>
                    @endif
                </h4>

                <div class="my-3">

                    @error('meta_title')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('meta_keywords')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('canonical')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('meta_description')
                        <span class="error">{{ $message }}</span><br />
                    @enderror

                </div>

                <form action="{{ route('update.metadata') }}" method="POST" >
                    @csrf
                    @method('PATCH')
                    <input type="hidden" value="{{ $page->page_id }}" name="page_id" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Meta Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="meta_title" value="{{ $page->meta_title }}" placeholder="Service Name"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Meta Keywords (Separate keywords by Comma)</label>
                                <div class="col-sm-9">
                                    <input type="text" name="meta_keywords" value="{{ $page->meta_keywords }}" placeholder="Service Name"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Canonical</label>
                                <div class="col-sm-9">
                                    <input type="text" name="canonical" value="{{ $page->canonical }}" placeholder="Service Name"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Meta Description</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="meta_description" value="" placeholder="Service Name" class="form-control"
                                        rows="5">{{ $page->meta_description }}</textarea>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 ">
                            <button type="submit" class="btn btn-primary me-2">Update Meta</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
