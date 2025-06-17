@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')

    <div class="col-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Our Service Details

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
                    @error('field1_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field1_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field1_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field2_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field2_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field2_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field3_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field3_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field3_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field4_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field4_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field4_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field5_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field5_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field5_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field6_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field6_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field6_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field7_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field7_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field7_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field8_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field8_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field8_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field9_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field9_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field9_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field10_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field10_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field10_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror


                </div>

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
                                            <a href="{{ route('edit.ourservicesdetails', $service->id) }}">
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
