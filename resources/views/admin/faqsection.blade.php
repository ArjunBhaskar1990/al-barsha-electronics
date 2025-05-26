@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')

    <div class="col-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">FAQ Section

                    @if (Session::has('success'))
                        <div class="success-msg">
                            {!! \Session::get('success') !!}
                        </div>
                    @endif
                </h4>


                <div class="my-3">

                    @error('question1')
                        <span class="error">{{ $message }}</span> <br />
                    @enderror
                    @error('answer1')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('question2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('answer2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('question3')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('answer3')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('question4')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('answer4')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('question5')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('answer5')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('faq_title1')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('faq_title2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                </div>

                <form action="{{ route('update.faqcontent') }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Title 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="faq_title1" value="{{ $faqcontent->faq_title1 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Title 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="faq_title2" value="{{ $faqcontent->faq_title2 }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary me-2">Update FAQ Title</button>
                        </div>
                    </div>
                </form>


                <form action="{{ route('update.faqsection') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="row">
                        @foreach ($faqsection as $item)
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label>Question {{ $loop->index + 1 }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="question{{ $item->id }}"
                                            value="{{ $item->question }}" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label>Answer {{ $loop->index + 1 }}</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="answer{{ $item->id }}" class="form-control" rows="4">{{ $item->answer }}</textarea>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary me-2">Update FAQ</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
