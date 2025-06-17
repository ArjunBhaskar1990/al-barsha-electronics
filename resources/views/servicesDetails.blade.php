@extends('components.layout')
@section('content')
    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    @include('components.nav')
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->


    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie"
        style="background-image: url('/storage/uploads/common/{{ $servicebg->image }}')">
        <!-- Page Header Box Start -->
        <div class="page-header-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Page Header Content Start -->
                        <div class="page-header-content">
                            <h1 class="wow fadeInUp">
                                {{ str_replace('-', ' ', strtoUpper($servicename)) }}<br><span>Services</span></h1>

                        </div>
                        <!-- Page Header Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header Box End -->
    </div>
    <!-- Page Header End -->


    <section>
        <div class="container  py-5">
            <div class="row g-4 m-4">

                @if ($servicedata->field1)
                    @php
                        $field1 = explode('|', $servicedata->field1);
                    @endphp
                    <div style="margin-left: {{ $field1[1] }}px">
                        <span class="text-dark"
                            style="font-weight: {{ $field1[3] }}; font-size: {{ $field1[2] }}px;">{{ $field1[0] }}</span>
                    </div>
                @endif

                @if ($servicedata->field2)
                    @php
                        $field2 = explode('|', $servicedata->field2);
                    @endphp
                    <div style="margin-left: {{ $field2[1] }}px">
                        <span class="text-dark"
                            style="font-weight: {{ $field2[3] }}; font-size: {{ $field2[2] }}px;">{{ $field2[0] }}</span>
                    </div>
                @endif

                @if ($servicedata->field3)
                    @php
                        $field3 = explode('|', $servicedata->field3);
                    @endphp
                    <div style="margin-left: {{ $field3[1] }}px">
                        <span class="text-dark"
                            style="font-weight: {{ $field3[3] }}; font-size: {{ $field3[2] }}px;">{{ $field3[0] }}</span>
                    </div>
                @endif

                @if ($servicedata->field4)
                    @php
                        $field4 = explode('|', $servicedata->field4);
                    @endphp
                    <div style="margin-left: {{ $field4[1] }}px">
                        <span class="text-dark"
                            style="font-weight: {{ $field4[3] }}; font-size: {{ $field4[2] }}px;">{{ $field4[0] }}</span>
                    </div>
                @endif

                @if ($servicedata->field5)
                    @php
                        $field5 = explode('|', $servicedata->field5);
                    @endphp
                    <div style="margin-left: {{ $field5[1] }}px">
                        <span class="text-dark"
                            style="font-weight: {{ $field5[3] }}; font-size: {{ $field5[2] }}px;">{{ $field5[0] }}</span>
                    </div>
                @endif

                @if ($servicedata->field6)
                    @php
                        $field6 = explode('|', $servicedata->field6);
                    @endphp
                    <div style="margin-left: {{ $field6[1] }}px">
                        <span class="text-dark"
                            style="font-weight: {{ $field6[3] }}; font-size: {{ $field6[2] }}px;">{{ $field6[0] }}</span>
                    </div>
                @endif

                @if ($servicedata->field7)
                    @php
                        $field7 = explode('|', $servicedata->field7);
                    @endphp
                    <div style="margin-left: {{ $field7[1] }}px">
                        <span class="text-dark"
                            style="font-weight: {{ $field7[3] }}; font-size: {{ $field7[2] }}px;">{{ $field7[0] }}</span>
                    </div>
                @endif

                @if ($servicedata->field8)
                    @php
                        $field8 = explode('|', $servicedata->field8);
                    @endphp
                    <div style="margin-left: {{ $field8[1] }}px">
                        <span class="text-dark"
                            style="font-weight: {{ $field8[3] }}; font-size: {{ $field8[2] }}px;">{{ $field8[0] }}</span>
                    </div>
                @endif

                @if ($servicedata->field9)
                    @php
                        $field9 = explode('|', $servicedata->field9);
                    @endphp
                    <div style="margin-left: {{ $field9[1] }}px">
                        <span class="text-dark"
                            style="font-weight: {{ $field9[3] }}; font-size: {{ $field9[2] }}px;">{{ $field9[0] }}</span>
                    </div>
                @endif


                @if ($servicedata->field10)
                    @php
                        $field10 = explode('|', $servicedata->field10);
                    @endphp
                    <div style="margin-left: {{ $field10[1] }}px">
                        <span class="text-dark"
                            style="font-weight: {{ $field10[3] }}; font-size: {{ $field10[2] }}px;">{{ $field10[0] }}</span>
                    </div>
                @endif


                <div class="mt-5">

                    <div class="mb-3">
                        @if ($servicedatadetails->field1)
                            @php
                                $field1 = explode('|', $servicedatadetails->field1);
                            @endphp
                            <div style="margin-left: {{ $field1[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field1[3] }}; font-size: {{ $field1[2] }}px;">{{ $field1[0] }}</span>
                            </div>
                        @endif
                    </div>

                    <div class="mb-3">

                        @if ($servicedatadetails->field2)
                            @php
                                $field2 = explode('|', $servicedatadetails->field2);
                            @endphp
                            <div style="margin-left: {{ $field2[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field2[3] }}; font-size: {{ $field2[2] }}px;">{{ $field2[0] }}</span>
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field3)
                            @php
                                $field3 = explode('|', $servicedatadetails->field3);
                            @endphp
                            <div style="margin-left: {{ $field3[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field3[3] }}; font-size: {{ $field3[2] }}px;">{{ $field3[0] }}</span>
                            </div>
                        @endif
                    </div>

                    <div class="mb-3">

                        @if ($servicedatadetails->field4)
                            @php
                                $field4 = explode('|', $servicedatadetails->field4);
                            @endphp
                            <div style="margin-left: {{ $field4[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field4[3] }}; font-size: {{ $field4[2] }}px;">{{ $field4[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field5)
                            @php
                                $field5 = explode('|', $servicedatadetails->field5);
                            @endphp
                            <div style="margin-left: {{ $field5[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field5[3] }}; font-size: {{ $field5[2] }}px;">{{ $field5[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field6)
                            @php
                                $field6 = explode('|', $servicedatadetails->field6);
                            @endphp
                            <div style="margin-left: {{ $field6[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field6[3] }}; font-size: {{ $field6[2] }}px;">{{ $field6[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field7)
                            @php
                                $field7 = explode('|', $servicedatadetails->field7);
                            @endphp
                            <div style="margin-left: {{ $field7[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field7[3] }}; font-size: {{ $field7[2] }}px;">{{ $field7[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field8)
                            @php
                                $field8 = explode('|', $servicedatadetails->field8);
                            @endphp
                            <div style="margin-left: {{ $field8[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field8[3] }}; font-size: {{ $field8[2] }}px;">{{ $field8[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field9)
                            @php
                                $field9 = explode('|', $servicedatadetails->field9);
                            @endphp
                            <div style="margin-left: {{ $field9[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field9[3] }}; font-size: {{ $field9[2] }}px;">{{ $field9[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field10)
                            @php
                                $field10 = explode('|', $servicedatadetails->field10);
                            @endphp
                            <div style="margin-left: {{ $field10[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field10[3] }}; font-size: {{ $field10[2] }}px;">{{ $field10[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field11)
                            @php
                                $field11 = explode('|', $servicedatadetails->field11);
                            @endphp
                            <div style="margin-left: {{ $field11[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field11[3] }}; font-size: {{ $field11[2] }}px;">{{ $field11[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field12)
                            @php
                                $field12 = explode('|', $servicedatadetails->field12);
                            @endphp
                            <div style="margin-left: {{ $field12[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field12[3] }}; font-size: {{ $field12[2] }}px;">{{ $field12[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field13)
                            @php
                                $field13 = explode('|', $servicedatadetails->field13);
                            @endphp
                            <div style="margin-left: {{ $field13[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field13[3] }}; font-size: {{ $field13[2] }}px;">{{ $field13[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field14)
                            @php
                                $field14 = explode('|', $servicedatadetails->field14);
                            @endphp
                            <div style="margin-left: {{ $field14[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field14[3] }}; font-size: {{ $field14[2] }}px;">{{ $field14[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field15)
                            @php
                                $field15 = explode('|', $servicedatadetails->field15);
                            @endphp
                            <div style="margin-left: {{ $field15[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field15[3] }}; font-size: {{ $field15[2] }}px;">{{ $field15[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field16)
                            @php
                                $field16 = explode('|', $servicedatadetails->field16);
                            @endphp
                            <div style="margin-left: {{ $field16[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field16[3] }}; font-size: {{ $field16[2] }}px;">{{ $field16[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field17)
                            @php
                                $field17 = explode('|', $servicedatadetails->field17);
                            @endphp
                            <div style="margin-left: {{ $field17[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field17[3] }}; font-size: {{ $field17[2] }}px;">{{ $field17[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field18)
                            @php
                                $field18 = explode('|', $servicedatadetails->field18);
                            @endphp
                            <div style="margin-left: {{ $field18[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field18[3] }}; font-size: {{ $field18[2] }}px;">{{ $field18[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field19)
                            @php
                                $field19 = explode('|', $servicedatadetails->field19);
                            @endphp
                            <div style="margin-left: {{ $field19[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field19[3] }}; font-size: {{ $field19[2] }}px;">{{ $field19[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field20)
                            @php
                                $field20 = explode('|', $servicedatadetails->field20);
                            @endphp
                            <div style="margin-left: {{ $field20[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field20[3] }}; font-size: {{ $field20[2] }}px;">{{ $field20[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field21)
                            @php
                                $field21 = explode('|', $servicedatadetails->field21);
                            @endphp
                            <div style="margin-left: {{ $field21[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field21[3] }}; font-size: {{ $field21[2] }}px;">{{ $field21[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field22)
                            @php
                                $field22 = explode('|', $servicedatadetails->field22);
                            @endphp
                            <div style="margin-left: {{ $field22[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field22[3] }}; font-size: {{ $field22[2] }}px;">{{ $field22[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field23)
                            @php
                                $field23 = explode('|', $servicedatadetails->field23);
                            @endphp
                            <div style="margin-left: {{ $field23[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field23[3] }}; font-size: {{ $field23[2] }}px;">{{ $field23[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field24)
                            @php
                                $field24 = explode('|', $servicedatadetails->field24);
                            @endphp
                            <div style="margin-left: {{ $field24[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field24[3] }}; font-size: {{ $field24[2] }}px;">{{ $field24[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field25)
                            @php
                                $field25 = explode('|', $servicedatadetails->field25);
                            @endphp
                            <div style="margin-left: {{ $field25[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field25[3] }}; font-size: {{ $field25[2] }}px;">{{ $field25[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field26)
                            @php
                                $field26 = explode('|', $servicedatadetails->field26);
                            @endphp
                            <div style="margin-left: {{ $field26[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field26[3] }}; font-size: {{ $field26[2] }}px;">{{ $field26[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field27)
                            @php
                                $field27 = explode('|', $servicedatadetails->field27);
                            @endphp
                            <div style="margin-left: {{ $field27[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field27[3] }}; font-size: {{ $field27[2] }}px;">{{ $field27[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field28)
                            @php
                                $field28 = explode('|', $servicedatadetails->field28);
                            @endphp
                            <div style="margin-left: {{ $field28[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field28[3] }}; font-size: {{ $field28[2] }}px;">{{ $field28[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field29)
                            @php
                                $field29 = explode('|', $servicedatadetails->field29);
                            @endphp
                            <div style="margin-left: {{ $field29[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field29[3] }}; font-size: {{ $field29[2] }}px;">{{ $field29[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field30)
                            @php
                                $field30 = explode('|', $servicedatadetails->field30);
                            @endphp
                            <div style="margin-left: {{ $field30[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field30[3] }}; font-size: {{ $field30[2] }}px;">{{ $field30[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field31)
                            @php
                                $field31 = explode('|', $servicedatadetails->field31);
                            @endphp
                            <div style="margin-left: {{ $field31[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field31[3] }}; font-size: {{ $field31[2] }}px;">{{ $field31[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field32)
                            @php
                                $field32 = explode('|', $servicedatadetails->field32);
                            @endphp
                            <div style="margin-left: {{ $field32[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field32[3] }}; font-size: {{ $field32[2] }}px;">{{ $field32[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field33)
                            @php
                                $field33 = explode('|', $servicedatadetails->field33);
                            @endphp
                            <div style="margin-left: {{ $field33[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field33[3] }}; font-size: {{ $field33[2] }}px;">{{ $field33[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field34)
                            @php
                                $field34 = explode('|', $servicedatadetails->field34);
                            @endphp
                            <div style="margin-left: {{ $field34[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field34[3] }}; font-size: {{ $field34[2] }}px;">{{ $field34[0] }}</span>
                            </div>
                        @endif

                    </div>
                    <div class="mb-3">

                        @if ($servicedatadetails->field35)
                            @php
                                $field35 = explode('|', $servicedatadetails->field35);
                            @endphp
                            <div style="margin-left: {{ $field35[1] }}px">
                                <span class="text-dark"
                                    style="font-weight: {{ $field35[3] }}; font-size: {{ $field35[2] }}px;">{{ $field35[0] }}</span>
                            </div>
                        @endif

                    </div>

                </div>




            </div>
        </div>
    </section>



    @include('components.footer')
@endsection
