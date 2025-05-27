@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')

    <div class="col-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Meta Data
                    @if (Session::has('success'))
                        <div class="success-msg">
                            {!! \Session::get('success') !!}
                        </div>
                    @endif
                </h4>

                <div class="my-3">

                    @error('service_name')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('image')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('desc')
                        <span class="error">{{ $message }}</span><br />
                    @enderror

                </div>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Page </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($metapages as $item)
                                @if ($item->page_id === 1)
                                    @php
                                        $pagename = 'Home';
                                    @endphp
                                @elseif ($item->page_id === 2)
                                    @php
                                        $pagename = 'About Us';
                                    @endphp
                                @elseif ($item->page_id === 3)
                                    @php
                                        $pagename = 'Services';
                                    @endphp
                                @elseif ($item->page_id === 4)
                                    @php
                                        $pagename = 'Contact Us';
                                    @endphp
                                @endif
                                <tr>
                                    <td> {{ $loop->index + 1 }} </td>
                                    <td> {{ $pagename }} </td>
                                    <td>
                                        <span>
                                            <a href="{{ route('edit.metadata', $item->page_id) }}">
                                                <i class="fa-solid fa-pencil text-primary"></i>

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
