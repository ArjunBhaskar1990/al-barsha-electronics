@extends('admin.components.header')
@section('content')
    @include('admin.adminnav')

    <div class="col-8 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update {{ $servicemodel->service_name }}

                    @if (Session::has('success'))
                        <div class="success-msg">
                            {!! \Session::get('success') !!}
                        </div>
                    @endif
                </h4>

                <div class="my-3">

                    @error('field1')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field2')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field3')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field4')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field5')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field6')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field7')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field8')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field9')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field10')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field11')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field12')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field13')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field14')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field15')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field16')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field17')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field18')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field19')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field20')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field21')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field22')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field23')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field24')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field25')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field26')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field27')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field28')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field29')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field30')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field31')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field32')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field33')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field34')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field35')
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
                    @error('field11_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field11_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field11_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field12_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field12_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field12_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field13_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field13_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field13_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field14_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field14_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field14_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field15_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field15_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field15_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field16_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field16_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field16_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field17_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field17_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field17_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field18_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field18_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field18_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field19_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field19_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field19_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field20_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field20_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field20_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field21_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field21_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field21_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field22_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field22_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field22_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field23_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field23_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field23_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field24_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field24_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field24_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field25_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field25_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field25_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field26_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field26_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field26_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field27_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field27_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field27_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field28_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field28_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field28_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field29_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field29_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field29_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field30_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field30_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field30_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field31_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field31_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field31_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field32_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field32_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field32_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field33_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field33_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field33_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field34_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field34_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field34_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field35_margin')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field35_fontsize')
                        <span class="error">{{ $message }}</span><br />
                    @enderror
                    @error('field35_fontweight')
                        <span class="error">{{ $message }}</span><br />
                    @enderror


                </div>

                <form action="{{ route('update.ourservicesdetails') }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <input type="hidden" name="servicedetail_id" value="{{$service&&  $service->id }}" />
                    <input type="hidden" name="service_id" value="{{ $servicemodel->id }}" />

                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">

                                @php
                                    if ($service&& $service->field1) {
                                        $field1 = explode('|', $service->field1);
                                    }
                                @endphp

                                <label>Field 1</label>
                                <div>
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
                                @php
                                    if ($service&& $service->field2) {
                                        $field2 = explode('|', $service->field2);
                                    }
                                @endphp

                                <label>Field 2</label>
                                <div>
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
                                    if ($service&& $service->field3) {
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

                                @php
                                    if ($service&& $service->field4) {
                                        $field4 = explode('|', $service->field4);
                                    }
                                @endphp
                                <div>
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
                                @php
                                    if ($service&& $service->field5) {
                                        $field5 = explode('|', $service->field5);
                                    }
                                @endphp
                                <div>
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
                                @php
                                    if ($service&& $service->field6) {
                                        $field6 = explode('|', $service->field6);
                                    }
                                @endphp
                                <div>
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
                                @php
                                    if ($service&& $service->field7) {
                                        $field7 = explode('|', $service->field7);
                                    }
                                @endphp
                                <div>
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
                                @php
                                    if ($service&& $service->field8) {
                                        $field8 = explode('|', $service->field8);
                                    }
                                @endphp
                                <div>
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
                                @php
                                    if ($service&& $service->field9) {
                                        $field9 = explode('|', $service->field9);
                                    }
                                @endphp
                                <div>
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
                                @php
                                    if ($service&& $service->field10) {
                                        $field10 = explode('|', $service->field10);
                                    }
                                @endphp
                                <div>
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

                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 11</label>
                                @php
                                    if ($service&& $service->field11) {
                                        $field11 = explode('|', $service->field11);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field11" value="{{ $field11[0] ?? null }}"
                                        placeholder="Field 11" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field11_margin" value="{{ $field11[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field11_fontsize" value="{{ $field11[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field11_fontweight" value="{{ $field11[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 12</label>
                                @php
                                    if ($service&& $service->field12) {
                                        $field12 = explode('|', $service->field12);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field12" value="{{ $field12[0] ?? null }}"
                                        placeholder="Field 12" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field12_margin" value="{{ $field12[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field12_fontsize" value="{{ $field12[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field12_fontweight" value="{{ $field12[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 13</label>
                                @php
                                    if ($service&& $service->field13) {
                                        $field13 = explode('|', $service->field13);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field13" value="{{ $field13[0] ?? null }}"
                                        placeholder="Field 13" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field13_margin" value="{{ $field13[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field13_fontsize" value="{{ $field13[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field13_fontweight" value="{{ $field13[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 14</label>
                                @php
                                    if ($service&& $service->field14) {
                                        $field14 = explode('|', $service->field14);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field14" value="{{ $field4[0] ?? null }}"
                                        placeholder="Field 14" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field14_margin" value="{{ $field4[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field14_fontsize" value="{{ $field4[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field14_fontweight" value="{{ $field4[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 15</label>
                                @php
                                    if ($service&& $service->field15) {
                                        $field15 = explode('|', $service->field15);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field15" value="{{ $field15[0] ?? null }}"
                                        placeholder="Field 15" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field15_margin" value="{{ $field15[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field15_fontsize" value="{{ $field15[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field15_fontweight" value="{{ $field15[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 16</label>
                                @php
                                    if ($service&& $service->field13) {
                                        $field16 = explode('|', $service->field16);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field16" value="{{ $field16[0] ?? null }}"
                                        placeholder="Field 16" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field16_margin" value="{{ $field16[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field16_fontsize" value="{{ $field16[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field16_fontweight" value="{{ $field16[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 17</label>
                                @php
                                    if ($service&& $service->field17) {
                                        $field17 = explode('|', $service->field17);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field17" value="{{ $field17[0] ?? null }}"
                                        placeholder="Field 17" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field17_margin" value="{{ $field17[1] ?? null}}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field17_fontsize" value="{{ $field17[2] ?? null}}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field17_fontweight" value="{{ $field17[3] ?? null}}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 18</label>
                                @php
                                    if ($service&& $service->field18) {
                                        $field18 = explode('|', $service->field18);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field18" value="{{ $field18[0] ?? null}}"
                                        placeholder="Field 18" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field18_margin" value="{{ $field18[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field18_fontsize" value="{{ $field18[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field18_fontweight" value="{{ $field18[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 19</label>
                                @php
                                    if ($service&& $service->field19) {
                                        $field19 = explode('|', $service->field19);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field19" value="{{ $field19[0]  ?? null}}"
                                        placeholder="Field 19" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field19_margin" value="{{ $field19[1]  ?? null}}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field19_fontsize" value="{{ $field19[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field19_fontweight" value="{{ $field19[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 20</label>
                                @php
                                    if ($service&& $service->field20) {
                                        $field20 = explode('|', $service->field20);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field20" value="{{ $field20[0] ?? null }}"
                                        placeholder="Field 20" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field20_margin" value="{{ $field20[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field20_fontsize" value="{{ $field20[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field20_fontweight" value="{{ $field20[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 21</label>
                                @php
                                    if ($service&& $service->field21) {
                                        $field21 = explode('|', $service->field21);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field21" value="{{ $field21[0] ?? null }}"
                                        placeholder="Field 21" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field21_margin" value="{{ $field21[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field21_fontsize" value="{{ $field21[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field21_fontweight" value="{{ $field21[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 22</label>
                                @php
                                    if ($service&& $service->field22) {
                                        $field22 = explode('|', $service->field22);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field22" value="{{ $field22[0] ?? null }}"
                                        placeholder="Field 22" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field22_margin" value="{{ $field22[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field22_fontsize" value="{{ $field22[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field22_fontweight" value="{{ $field22[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 23</label>

                                @php
                                    if ($service&& $service->field23) {
                                        $field23 = explode('|', $service->field23);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field23" value="{{ $field23[0] ?? null }}"
                                        placeholder="Field 23" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field23_margin" value="{{ $field23[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field23_fontsize" value="{{ $field23[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field23_fontweight" value="{{ $field23[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 24</label>
                                @php
                                    if ($service&& $service->field24) {
                                        $field24 = explode('|', $service->field24);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field24" value="{{ $field24[0] ?? null }}"
                                        placeholder="Field 24" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field24_margin" value="{{ $field24[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field24_fontsize" value="{{ $field24[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field24_fontweight" value="{{ $field24[3] ?? null}}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 25</label>
                                @php
                                    if ($service&& $service->field25) {
                                        $field25 = explode('|', $service->field25);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field25" value="{{ $field25[0] ?? null }}"
                                        placeholder="Field 25" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field25_margin" value="{{ $field25[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field25_fontsize" value="{{ $field25[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field25_fontweight" value="{{ $field25[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 26</label>
                                @php
                                    if ($service&& $service->field26) {
                                        $field26 = explode('|', $service->field26);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field26" value="{{ $field26[0] ?? null }}"
                                        placeholder="Field 26" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field26_margin" value="{{ $field26[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field26_fontsize" value="{{ $field26[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field26_fontweight" value="{{ $field26[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 27</label>
                                @php
                                    if ($service&& $service->field27) {
                                        $field27 = explode('|', $service->field27);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field27" value="{{ $field27[0]  ?? null}}"
                                        placeholder="Field 27" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field27_margin" value="{{ $field27[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field27_fontsize" value="{{ $field27[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field27_fontweight" value="{{ $field27[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 28</label>
                                @php
                                    if ($service&& $service->field28) {
                                        $field28 = explode('|', $service->field28);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field28" value="{{ $field28[0] ?? null }}"
                                        placeholder="Field 28" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field28_margin" value="{{ $field28[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field28_fontsize" value="{{ $field28[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field28_fontweight" value="{{ $field28[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 29</label>
                                @php
                                    if ($service&& $service->field29) {
                                        $field29 = explode('|', $service->field29);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field29" value="{{ $field29[0] ?? null }}"
                                        placeholder="Field 29" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field29_margin" value="{{ $field29[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field29_fontsize" value="{{ $field29[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field29_fontweight" value="{{ $field29[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 30</label>
                                @php
                                    if ($service&& $service->field30) {
                                        $field30 = explode('|', $service->field30);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field30" value="{{ $field30[0] ?? null }}"
                                        placeholder="Field 30" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field30_margin" value="{{ $field30[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field30_fontsize" value="{{ $field30[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field30_fontweight" value="{{ $field30[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 31</label>
                                @php
                                    if ($service&& $service->field31) {
                                        $field31 = explode('|', $service->field31);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field31" value="{{ $field31[0] ?? null }}"
                                        placeholder="Field 31" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field31_margin" value="{{ $field31[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field31_fontsize" value="{{ $field31[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field31_fontweight" value="{{ $field31[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 32</label>

                                @php
                                    if ($service&& $service->field32) {
                                        $field32 = explode('|', $service->field32);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field32" value="{{ $field32[0] ?? null }}"
                                        placeholder="Field 32" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field32_margin" value="{{ $field32[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field32_fontsize" value="{{ $field32[2]  ?? null}}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field32_fontweight" value="{{ $field32[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 33</label>
                                @php
                                    if ($service&& $service->field33) {
                                        $field33 = explode('|', $service->field33);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field33" value="{{ $field33[0] ?? null }}"
                                        placeholder="Field 33" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field33_margin" value="{{ $field33[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field33_fontsize" value="{{ $field33[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field33_fontweight" value="{{ $field33[3]  ?? null}}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 34</label>
                                @php
                                    if ($service&& $service->field34) {
                                        $field34 = explode('|', $service->field34);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field34" value="{{ $field34[0] ?? null }}"
                                        placeholder="Field 34" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field34_margin" value="{{ $field34[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field34_fontsize" value="{{ $field34[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field34_fontweight" value="{{ $field34[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 d-flex w-100 gap-3">
                            <div class="form-group col-sm-7">
                                <label>Field 35</label>
                                @php
                                    if ($service&& $service->field35) {
                                        $field35 = explode('|', $service->field35);
                                    }
                                @endphp
                                <div>
                                    <input type="text" name="field35" value="{{ $field35[0] ?? null }}"
                                        placeholder="Field 35" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Margin L.</label>
                                <div class="col-sm">
                                    <input type="text" name="field35_margin" value="{{ $field35[1] ?? null }}"
                                        placeholder="Margin L" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Size</label>
                                <div class="col-sm">
                                    <input type="text" name="field35_fontsize" value="{{ $field35[2] ?? null }}"
                                        placeholder="Ft. Size" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label>Font Weight</label>
                                <div class="col-sm">
                                    <input type="text" name="field35_fontweight" value="{{ $field35[3] ?? null }}"
                                        placeholder="Ft. Weight" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-md-4 mt-5">
                        <button type="submit" class="btn btn-primary me-2">Update Service Details</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
