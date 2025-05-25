<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    use ImageUpload;
    public function index()
    {

        $company = Company::first();

        return view('admin.company', compact('company'));
    }

    public function update(Request $request)
    {

        $validation = $request->validate([

            'company_name' => 'required',
            'company_desc' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'address3' => 'required',
            'address4' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
            'email' => 'required',
            'whatsapp' => 'required',
            // 'xlink' => 'required',
            // 'fblink' => 'required',
            // 'instagram' => 'required',
            // 'google_map' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,svg,webp,png,gif',
        ]);
        $companyModel = Company::find($request->company_id);


        if ($request->hasFile('image')) {

            $old_image = $companyModel->image;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/logo/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }
        }

        $companyModel->update([
            'company_name' => $validation['company_name'],
            'company_desc' => $validation['company_desc'],
            'address1' => $validation['address1'],
            'address2' => $validation['address2'],
            'address3' => $validation['address3'],
            'address4' => $validation['address4'],
            'phone1' => $validation['phone1'],
            'phone2' => $validation['phone2'],
            'whatsapp' => $validation['whatsapp'],
            'xlink' => $request->xlink,
            'fblink' => $request->fblink,
            'pinterest' => $request->pinterest,
            'instagram' => $request->instagram,
            'google_map' => $request->google_map,
        ]);


        return redirect()->back()->with('success', 'Company Updated Successfully !!');
    }
}
