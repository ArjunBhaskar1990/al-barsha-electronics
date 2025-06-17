<?php

namespace App\Http\Controllers;

use App\Models\OurService;
use App\Models\OurServiceDetail;
use Illuminate\Http\Request;

class OurServiceDetailController extends Controller
{
    public function index()
    {

        $ourservices = OurService::latest()->get();
        return view('admin.ourservicesDetails', compact('ourservices'));
    }
    public function edit($service)
    {
        $servicemodel = OurService::where('id', $service)->first();
        $service = OurServiceDetail::where('service_id', $service)->first();
        return view('admin.ourservicesDetailsEdit', compact('service', 'servicemodel'));
    }

    public function update(Request $request)
    {


        if ($request->field1) {
            $field1 = $request->field1 . "|" . $request->field1_margin . "|" . $request->field1_fontsize . "|" . $request->field1_fontweight;
        }else{
            $field1 ="";
        }
        if ($request->field2) {
            $field2 = $request->field2 . "|" . $request->field2_margin . "|" . $request->field2_fontsize . "|" . $request->field2_fontweight;
        }else{
            $field2 ="";
        }
        if ($request->field3) {
            $field3 = $request->field3 . "|" . $request->field3_margin . "|" . $request->field3_fontsize . "|" . $request->field3_fontweight;
        }else{
            $field3 ="";
        }
        if ($request->field4) {
            $field4 = $request->field4 . "|" . $request->field4_margin . "|" . $request->field4_fontsize . "|" . $request->field4_fontweight;
        }else{
            $field4 ="";
        }
        if ($request->field5) {
            $field5 = $request->field5 . "|" . $request->field5_margin . "|" . $request->field5_fontsize . "|" . $request->field5_fontweight;
        }else{
            $field5 ="";
        }
        if ($request->field6) {
            $field6 = $request->field6 . "|" . $request->field6_margin . "|" . $request->field6_fontsize . "|" . $request->field6_fontweight;
        }else{
            $field6 ="";
        }
        if ($request->field7) {
            $field7 = $request->field7 . "|" . $request->field7_margin . "|" . $request->field7_fontsize . "|" . $request->field7_fontweight;
        }else{
            $field7 ="";
        }
        if ($request->field8) {
            $field8 = $request->field8 . "|" . $request->field8_margin . "|" . $request->field8_fontsize . "|" . $request->field8_fontweight;
        }else{
            $field8 ="";
        }
        if ($request->field9) {
            $field9 = $request->field9 . "|" . $request->field9_margin . "|" . $request->field9_fontsize . "|" . $request->field9_fontweight;
        }else{
            $field9 ="";
        }
        if ($request->field10) {
            $field10 = $request->field10 . "|" . $request->field10_margin . "|" . $request->field10_fontsize . "|" . $request->field10_fontweight;
        }else{
            $field10 ="";
        }
        if ($request->field11) {
            $field11 = $request->field11 . "|" . $request->field11_margin . "|" . $request->field11_fontsize . "|" . $request->field11_fontweight;
        }else{
            $field11 ="";
        }
        if ($request->field12) {
            $field12 = $request->field12 . "|" . $request->field12_margin . "|" . $request->field12_fontsize . "|" . $request->field12_fontweight;
        }else{
            $field12 ="";
        }
        if ($request->field13) {
            $field13 = $request->field13 . "|" . $request->field13_margin . "|" . $request->field13_fontsize . "|" . $request->field13_fontweight;
        }else{
            $field13 ="";
        }
        if ($request->field14) {
            $field14 = $request->field14 . "|" . $request->field14_margin . "|" . $request->field14_fontsize . "|" . $request->field14_fontweight;
        }else{
            $field14 ="";
        }
        if ($request->field15) {
            $field15 = $request->field15 . "|" . $request->field15_margin . "|" . $request->field15_fontsize . "|" . $request->field15_fontweight;
        }else{
            $field15 ="";
        }
        if ($request->field16) {
            $field16 = $request->field16 . "|" . $request->field16_margin . "|" . $request->field16_fontsize . "|" . $request->field16_fontweight;
        }else{
            $field16 ="";
        }
        if ($request->field17) {
            $field17 = $request->field17 . "|" . $request->field17_margin . "|" . $request->field17_fontsize . "|" . $request->field17_fontweight;
        }else{
            $field17 ="";
        }
        if ($request->field18) {
            $field18 = $request->field18 . "|" . $request->field18_margin . "|" . $request->field18_fontsize . "|" . $request->field18_fontweight;
        }else{
            $field18 ="";
        }
        if ($request->field19) {
            $field19 = $request->field19 . "|" . $request->field19_margin . "|" . $request->field19_fontsize . "|" . $request->field19_fontweight;
        }else{
            $field19 ="";
        }
        if ($request->field20) {
            $field20 = $request->field20 . "|" . $request->field20_margin . "|" . $request->field20_fontsize . "|" . $request->field20_fontweight;
        }else{
            $field20 ="";
        }
        if ($request->field21) {
            $field21 = $request->field21 . "|" . $request->field21_margin . "|" . $request->field21_fontsize . "|" . $request->field21_fontweight;
        }else{
            $field21 ="";
        }
        if ($request->field22) {
            $field22 = $request->field22 . "|" . $request->field22_margin . "|" . $request->field22_fontsize . "|" . $request->field22_fontweight;
        }else{
            $field22 ="";
        }
        if ($request->field23) {
            $field23 = $request->field23 . "|" . $request->field23_margin . "|" . $request->field23_fontsize . "|" . $request->field23_fontweight;
        }else{
            $field23 ="";
        }
        if ($request->field24) {
            $field24 = $request->field24 . "|" . $request->field24_margin . "|" . $request->field24_fontsize . "|" . $request->field24_fontweight;
        }else{
            $field24 ="";
        }
        if ($request->field25) {
            $field25 = $request->field25 . "|" . $request->field25_margin . "|" . $request->field25_fontsize . "|" . $request->field25_fontweight;
        }else{
            $field25 ="";
        }
        if ($request->field26) {
            $field26 = $request->field26 . "|" . $request->field26_margin . "|" . $request->field26_fontsize . "|" . $request->field26_fontweight;
        }else{
            $field26 ="";
        }
        if ($request->field27) {
            $field27 = $request->field27 . "|" . $request->field27_margin . "|" . $request->field27_fontsize . "|" . $request->field27_fontweight;
        }else{
            $field27 ="";
        }
        if ($request->field28) {
            $field28 = $request->field28 . "|" . $request->field28_margin . "|" . $request->field28_fontsize . "|" . $request->field28_fontweight;
        }else{
            $field28 ="";
        }
        if ($request->field29) {
            $field29 = $request->field29 . "|" . $request->field29_margin . "|" . $request->field29_fontsize . "|" . $request->field29_fontweight;
        }else{
            $field29 ="";
        }
        if ($request->field30) {
            $field30 = $request->field30 . "|" . $request->field30_margin . "|" . $request->field30_fontsize . "|" . $request->field30_fontweight;
        }else{
            $field30 ="";
        }
        if ($request->field31) {
            $field31 = $request->field31 . "|" . $request->field31_margin . "|" . $request->field31_fontsize . "|" . $request->field31_fontweight;
        }else{
            $field31 ="";
        }
        if ($request->field32) {
            $field32 = $request->field32 . "|" . $request->field32_margin . "|" . $request->field32_fontsize . "|" . $request->field32_fontweight;
        }else{
            $field32 ="";
        }
        if ($request->field33) {
            $field33 = $request->field33 . "|" . $request->field33_margin . "|" . $request->field33_fontsize . "|" . $request->field33_fontweight;
        }else{
            $field33 ="";
        }
        if ($request->field34) {
            $field34 = $request->field34 . "|" . $request->field34_margin . "|" . $request->field34_fontsize . "|" . $request->field34_fontweight;
        }else{
            $field34 ="";
        }
        if ($request->field35) {
            $field35 = $request->field35 . "|" . $request->field35_margin . "|" . $request->field35_fontsize . "|" . $request->field35_fontweight;
        }else{
            $field35 ="";
        }


        $request->validate([

            // 'field1' => 'required',
            // 'field2' => 'required',
            // 'field3' => 'required',
            // 'field4' => 'required',
            // 'field5' => 'required',
            // 'field6' => 'required',
            // 'field7' => 'required',
            // 'field8' => 'required',
            // 'field9' => 'required',
            // 'field10' => 'required',
            // 'field11' => 'required',
            // 'field12' => 'required',
            // 'field13' => 'required',
            // 'field14' => 'required',
            // 'field15' => 'required',
            // 'field16' => 'required',
            // 'field17' => 'required',
            // 'field18' => 'required',
            // 'field19' => 'required',
            // 'field20' => 'required',
            // 'field21' => 'required',
            // 'field22' => 'required',
            // 'field23' => 'required',
            // 'field24' => 'required',
            // 'field25' => 'required',
            // 'field26' => 'required',
            // 'field27' => 'required',
            // 'field28' => 'required',
            // 'field29' => 'required',
            // 'field30' => 'required',
            // 'field31' => 'required',
            // 'field32' => 'required',
            // 'field33' => 'required',
            // 'field34' => 'required',
            // 'field35' => 'required',
            'field1_margin' => 'nullable|numeric',
            'field1_fontsize' => 'nullable|numeric',
            'field2_margin' => 'nullable|numeric',
            'field2_fontsize' => 'nullable|numeric',
            'field3_margin' => 'nullable|numeric',
            'field3_fontsize' => 'nullable|numeric',
            'field4_margin' => 'nullable|numeric',
            'field4_fontsize' => 'nullable|numeric',
            'field5_margin' => 'nullable|numeric',
            'field5_fontsize' => 'nullable|numeric',
            'field6_margin' => 'nullable|numeric',
            'field6_fontsize' => 'nullable|numeric',
            'field7_margin' => 'nullable|numeric',
            'field7_fontsize' => 'nullable|numeric',
            'field8_margin' => 'nullable|numeric',
            'field8_fontsize' => 'nullable|numeric',
            'field9_margin' => 'nullable|numeric',
            'field9_fontsize' => 'nullable|numeric',
            'field10_margin' => 'nullable|numeric',
            'field10_fontsize' => 'nullable|numeric',
            'field11_margin' => 'nullable|numeric',
            'field11_fontsize' => 'nullable|numeric',
            'field12_margin' => 'nullable|numeric',
            'field12_fontsize' => 'nullable|numeric',
            'field13_margin' => 'nullable|numeric',
            'field13_fontsize' => 'nullable|numeric',
            'field14_margin' => 'nullable|numeric',
            'field14_fontsize' => 'nullable|numeric',
            'field15_margin' => 'nullable|numeric',
            'field15_fontsize' => 'nullable|numeric',
            'field16_margin' => 'nullable|numeric',
            'field16_fontsize' => 'nullable|numeric',
            'field17_margin' => 'nullable|numeric',
            'field17_fontsize' => 'nullable|numeric',
            'field18_margin' => 'nullable|numeric',
            'field18_fontsize' => 'nullable|numeric',
            'field19_margin' => 'nullable|numeric',
            'field19_fontsize' => 'nullable|numeric',
            'field20_margin' => 'nullable|numeric',
            'field20_fontsize' => 'nullable|numeric',
            'field21_margin' => 'nullable|numeric',
            'field21_fontsize' => 'nullable|numeric',
            'field22_margin' => 'nullable|numeric',
            'field22_fontsize' => 'nullable|numeric',
            'field23_margin' => 'nullable|numeric',
            'field23_fontsize' => 'nullable|numeric',
            'field24_margin' => 'nullable|numeric',
            'field24_fontsize' => 'nullable|numeric',
            'field25_margin' => 'nullable|numeric',
            'field25_fontsize' => 'nullable|numeric',
            'field26_margin' => 'nullable|numeric',
            'field26_fontsize' => 'nullable|numeric',
            'field27_margin' => 'nullable|numeric',
            'field27_fontsize' => 'nullable|numeric',
            'field28_margin' => 'nullable|numeric',
            'field28_fontsize' => 'nullable|numeric',
            'field29_margin' => 'nullable|numeric',
            'field29_fontsize' => 'nullable|numeric',
            'field30_margin' => 'nullable|numeric',
            'field30_fontsize' => 'nullable|numeric',
            'field31_margin' => 'nullable|numeric',
            'field31_fontsize' => 'nullable|numeric',
            'field32_margin' => 'nullable|numeric',
            'field32_fontsize' => 'nullable|numeric',
            'field33_margin' => 'nullable|numeric',
            'field33_fontsize' => 'nullable|numeric',
            'field34_margin' => 'nullable|numeric',
            'field34_fontsize' => 'nullable|numeric',
            'field35_margin' => 'nullable|numeric',
            'field35_fontsize' => 'nullable|numeric',
        ]);

        OurServiceDetail::updateOrCreate(
            ['service_id' => $request->service_id],
            [
                'field1' => $field1,
                'field2' => $field2,
                'field3' => $field3,
                'field4' => $field4,
                'field5' => $field5,
                'field6' => $field6,
                'field7' => $field7,
                'field8' => $field8,
                'field9' => $field9,
                'field10' => $field10,
                'field11' => $field11,
                'field12' => $field12,
                'field13' => $field13,
                'field14' => $field14,
                'field15' => $field15,
                'field16' => $field16,
                'field17' => $field17,
                'field18' => $field18,
                'field19' => $field19,
                'field20' => $field20,
                'field21' => $field21,
                'field22' => $field22,
                'field23' => $field23,
                'field24' => $field24,
                'field25' => $field25,
                'field26' => $field26,
                'field27' => $field27,
                'field28' => $field28,
                'field29' => $field29,
                'field30' => $field30,
                'field31' => $field31,
                'field32' => $field32,
                'field33' => $field33,
                'field34' => $field34,
                'field35' => $field35,
            ]
        );

        return redirect()->route('page.ourservicesdetails')->with('success', 'Service Details Updated !!');
    }
}
