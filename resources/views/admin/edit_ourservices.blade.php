@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')

    <div class="col-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit {{ $service->service_name }}

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

                <form action="{{ route('update.ourservices') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" value="{{ $service->id }}" name="service_id" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Service Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="service_name" value="{{ $service->service_name }}"
                                        placeholder="Service Name" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image 1</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12 d-flex align-items-center">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="{{ $service->image }}">
                                    <span class="input-group-append ms-2">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>

                                <div class="col-md-3 mt-5">
                                    <img class="w-100" src="{{ asset('/storage/uploads/services/' . $service->image) }}"
                                        alt="logo" />
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Service Description</label>
                                <div class="col-sm-9">
                                    <textarea type="text" placeholder="Service Description" name="desc" cols="30" rows="5"
                                        class="form-control">{{ $service->desc }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 1</label>
                                <div>
                                    @php
                                        if ($service->field1) {
                                            $field1 = explode('|', $service->field1);
                                        }
                                    @endphp
                                    <input type="text" name="field1" value="{{ $field1[0] ?? null }}"
                                        placeholder="Field 1" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field1_margin" value="{{ $field1[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field1_fontsize" value="{{ $field1[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field1_fontweight" value="{{ $field1[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 2</label>
                                <div>
                                    @php
                                        if ($service->field2) {
                                            $field2 = explode('|', $service->field2);
                                        }
                                    @endphp
                                    <input type="text" name="field2" value="{{ $field2[0] ?? null }}"
                                        placeholder="Field 2" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field2_margin" value="{{ $field2[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field2_fontsize" value="{{ $field2[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field2_fontweight" value="{{ $field2[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 3</label>
                                @php
                                    if ($service->field3) {
                                        $field3 = explode('|', $service->field3);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field3" value="{{ $field3[0] ?? null }}"
                                        placeholder="Field 3" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field3_margin" value="{{ $field3[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field3_fontsize" value="{{ $field3[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field3_fontweight" value="{{ $field3[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 4</label>
                                <div>
                                    @php
                                        if ($service->field4) {
                                            $field4 = explode('|', $service->field4);
                                        }
                                    @endphp
                                    <input type="text" name="field4" value="{{ $field4[0] ?? null }}"
                                        placeholder="Field 4" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field4_margin" value="{{ $field4[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field4_fontsize" value="{{ $field4[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field4_fontweight" value="{{ $field4[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 5</label>
                                <div>
                                    @php
                                        if ($service->field5) {
                                            $field5 = explode('|', $service->field5);
                                        }
                                    @endphp
                                    <input type="text" name="field5" value="{{ $field5[0] ?? null }}"
                                        placeholder="Field 5" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field5_margin" value="{{ $field5[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field5_fontsize" value="{{ $field5[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field5_fontweight" value="{{ $field5[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 6</label>
                                <div>
                                    @php
                                        if ($service->field6) {
                                            $field6 = explode('|', $service->field6);
                                        }
                                    @endphp
                                    <input type="text" name="field6" value="{{ $field6[0] ?? null }}"
                                        placeholder="Field 6" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field6_margin" value="{{ $field6[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field6_fontsize" value="{{ $field6[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field6_fontweight" value="{{ $field6[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 7</label>
                                <div>
                                    @php
                                        if ($service->field7) {
                                            $field7 = explode('|', $service->field7);
                                        }
                                    @endphp
                                    <input type="text" name="field7" value="{{ $field7[0] ?? null }}"
                                        placeholder="Field 7" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field7_margin" value="{{ $field7[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field7_fontsize" value="{{ $field7[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field7_fontweight" value="{{ $field7[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 8</label>
                                <div>
                                    @php
                                        if ($service->field8) {
                                            $field8 = explode('|', $service->field8);
                                        }
                                    @endphp
                                    <input type="text" name="field8" value="{{ $field8[0] ?? null }}"
                                        placeholder="Field 8" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field8_margin" value="{{ $field8[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field8_fontsize" value="{{ $field8[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field8_fontweight" value="{{ $field8[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 9</label>
                                <div>
                                    @php
                                        if ($service->field9) {
                                            $field9 = explode('|', $service->field9);
                                        }
                                    @endphp
                                    <input type="text" name="field9" value="{{ $field9[0] ?? null }}"
                                        placeholder="Field 9" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field9_margin" value="{{ $field9[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field9_fontsize" value="{{ $field9[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field9_fontweight" value="{{ $field9[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 10</label>
                                <div>
                                    @php
                                        if ($service->field10) {
                                            $field10 = explode('|', $service->field10);
                                        }
                                    @endphp
                                    <input type="text" name="field10" value="{{ $field10[0] ?? null }}"
                                        placeholder="Field 10" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field10_margin" value="{{ $field10[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field10_fontsize" value="{{ $field10[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field10_fontweight" value="{{ $field10[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 mt-5">
                        <button type="submit" class="btn btn-primary me-2">Update Service</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
