<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeBanner;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    use ImageUpload;
    public function index()
    {
        $homebanner = HomeBanner::first();
        return view('admin.homebanner', compact('homebanner'));
    }


    public function update(Request $request)
    {

        $validation = $request->validate([
            'heading' => 'required',
            'title' => 'required',
            'feature1' => 'required',
            'feature2' => 'required',
            'feature3' => 'required',
            'feature4' => 'required',
            'feature5' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,svg,png,gif,svg|dimensions:width=1920,height=1280',
        ]);

        $homebannerModel = HomeBanner::first();

        if ($request->hasFile('image')) {

            $old_image = $homebannerModel->image;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/common/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['image'], "common", "homebanner");
            $homebannerModel->update([
                'image' => $new_image
            ]);
        }

        $homebannerModel->update([
            'heading' => $validation['heading'],
            'title' => $validation['title'],
            'feature1' => $validation['feature1'],
            'feature2' => $validation['feature2'],
            'feature3' => $validation['feature3'],
            'feature4' => $validation['feature4'],
            'feature5' => $validation['feature5'],
        ]);

          return redirect()->back()->with('success', 'Home Banner Updated Successfully !!');
    }
}
