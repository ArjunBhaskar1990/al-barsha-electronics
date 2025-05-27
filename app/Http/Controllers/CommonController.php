<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\barshaFAQ;
use App\Models\Company;
use App\Models\Expertise;
use App\Models\OurApproach;
use App\Models\OurService;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\WhyChooseAbout;
use App\Models\WhyChooseUs;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    use ImageUpload;

    public function aboutus()
    {

        $about = About::first();
        return view('admin.about', compact('about'));
    }

    public function updateAbout(Request $request)
    {

        $validation = $request->validate([

            'title1' => 'required',
            'title2' => 'required',
            'desc' => 'required',
            'feature1' => 'required',
            'feature2' => 'required',
            'bulb_title1' => 'required',
            'bulb_title2' => 'required',
            'experience' => 'required|numeric',
            'review_count' => 'required|numeric',
            'client_count' => 'required|numeric',
            'image1' => 'nullable|image|mimes:jpg,jpeg,svg,png,gif,webp|dimensions:width=473,height=596',
            'image2' => 'nullable|image|mimes:jpg,jpeg,svg,png,gif,webp|dimensions:width=235,height=244',
            'about_bg' => 'nullable|image|mimes:jpg,jpeg,svg,png,gif,webp|dimensions:width=1920,height=768',
            'client_image1' => 'nullable|image|mimes:jpg,jpeg,svg,png,gif,webp|dimensions:width=50,height=50',
            'client_image2' => 'nullable|image|mimes:jpg,jpeg,svg,png,gif,webp|dimensions:width=50,height=50',
            'client_image3' => 'nullable|image|mimes:jpg,jpeg,svg,png,gif,webp|dimensions:width=50,height=50',
            'client_image4' => 'nullable|image|mimes:jpg,jpeg,svg,png,gif,webp|dimensions:width=50,height=50',
            'client_image5' => 'nullable|image|mimes:jpg,jpeg,svg,png,gif,webp|dimensions:width=50,height=50',
        ]);


        $aboutModel = About::first();

        $aboutModel->update([
            'title1' => $validation['title1'],
            'title2' => $validation['title2'],
            'desc' => $validation['desc'],
            'feature1' => $validation['feature1'],
            'feature2' => $validation['feature2'],
            'bulb_title1' => $validation['bulb_title1'],
            'bulb_title2' => $validation['bulb_title2'],
            'experience' => $validation['experience'],
            'review_count' => $validation['review_count'],
            'client_count' => $validation['client_count'],
        ]);

        // about images

        if ($request->hasFile('image1')) {

            $old_image = $aboutModel->image1;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/about/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['image1'], "about", "image1");

            $aboutModel->update([
                'image1' => $new_image
            ]);
        }
        if ($request->hasFile('image2')) {

            $old_image = $aboutModel->image2;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/about/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['image2'], "about", "image2");

            $aboutModel->update([
                'image2' => $new_image
            ]);
        }
        if ($request->hasFile('about_bg')) {

            $old_image = $aboutModel->about_page_bg;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/common/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['about_bg'], "common", "aboutbg");

            $aboutModel->update([
                'about_page_bg' => $new_image
            ]);
        }


        // about client images 50x50

        if ($request->hasFile('client_image1')) {

            $old_image = $aboutModel->client_image1;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/about/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['client_image1'], "about", "client_image1");

            $aboutModel->update([
                'client_image1' => $new_image
            ]);
        }
        if ($request->hasFile('client_image2')) {

            $old_image = $aboutModel->client_image2;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/about/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['client_image2'], "about", "client_image2");

            $aboutModel->update([
                'client_image2' => $new_image
            ]);
        }
        if ($request->hasFile('client_image3')) {

            $old_image = $aboutModel->client_image3;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/about/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['client_image3'], "about", "client_image3");

            $aboutModel->update([
                'client_image3' => $new_image
            ]);
        }
        if ($request->hasFile('client_image4')) {

            $old_image = $aboutModel->client_image4;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/about/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['client_image4'], "about", "client_image4");

            $aboutModel->update([
                'client_image4' => $new_image
            ]);
        }
        if ($request->hasFile('client_image5')) {

            $old_image = $aboutModel->client_image5;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/about/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['client_image5'], "about", "client_image5");

            $aboutModel->update([
                'client_image5' => $new_image
            ]);
        }


        return redirect()->back()->with('success', "About Updated !!");
    }

    public function ourservices()
    {

        $servicedata = Service::first();
        $ourservices = OurService::latest()->get();
        return view('admin.ourservices', compact('servicedata', 'ourservices'));
    }

    public function updatecontent(Request $request)
    {


        $validation = $request->validate([
            'title1' => 'required',
            'title2' => 'required',
            'service_breadcrumb_img' => 'nullable|image|mimes:jpg,jpeg,svg,png,gif,webp|dimensions:width=1920,height=768',
            'desc' => 'required',
        ], [
            'desc' => "Content Description field is empty !!"
        ]);

        $serviceModel = Service::first();

        $serviceModel->update([
            'title1' => $validation['title1'],
            'title2' => $validation['title2'],
            'desc' => $validation['desc'],
        ]);

        if ($request->hasFile('service_breadcrumb_img')) {

            $old_image = $serviceModel->image;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/common/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['service_breadcrumb_img'], "common", "servicesbg");

            $serviceModel->update([
                'image' => $new_image
            ]);
        }

        return redirect()->back()->with('success', "Service Content Updated !!");
    }

    public function storeNewService(Request $request)
    {

        $validation = $request->validate([
            'service_name' => 'required',
            'desc' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,svg,png,webp,gif',
        ], [
            'desc' => "Service Description field is empty !!"
        ]);

        if ($request->hasFile('image')) {
            $new_image = $this->ImageUpload($validation['image'], "services", "service");
        }

        OurService::create([
            'service_name' => $validation['service_name'],
            'desc' => $validation['desc'],
            'image' => $new_image
        ]);

        return redirect()->back()->with('success', 'New Service Added !!');
    }

    public function editService(OurService $service)
    {

        return view('admin.edit_ourservices', compact('service'));
    }

    public function updateService(Request $request)
    {
        $validation = $request->validate([
            'service_name' => 'required',
            'desc' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,svg,png,webp,gif',
        ], [
            'desc' => "Service Description field is empty !!"
        ]);

        $service = OurService::find($request->service_id);

        if ($request->hasFile('image')) {

            $old_image = $service->image;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/services/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['image'], "services", "service");

            $service->update([
                'image' => $new_image
            ]);
        }

        $service->update([
            'service_name' => $validation['service_name'],
            'desc' => $validation['desc'],
        ]);

        return redirect()->route('page.ourservices')->with('success', 'Service Updated !!');
    }


    public function destroyService(OurService $service)
    {

        $image = $service->image;

        if ($image) {
            $image_path = public_path('/storage/uploads/services/' . $image);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        $service->delete();

        return response()->json(['success' => true, 'message' => 'Service Deleted !!', 'url' => '/admin/our-services']);
    }


    public function WhyChooseUs()
    {

        $whychoose = WhyChooseUs::first();

        return view('admin.whychoose', compact('whychoose'));
    }

    public function UpdateWhyChooseUs(Request $request)
    {

        $validation = $request->validate([
            'title1' => 'required',
            'title2' => 'required',
            'desc' => 'required',
            'sat_customer' => 'required|numeric',
            'pro_completed' => 'required|numeric',
            'title3' => 'required',
            'desc2' => 'required',
            'feature_title1' => 'required',
            'feature_title2' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,svg,png,gif,webp|dimensions:width=604,height=799',
        ]);

        $whychoosemodel = WhyChooseUs::first();

        if ($request->hasFile('image')) {

            $old_image = $whychoosemodel->image;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/whychoose/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['image'], "whychoose", "whychoose");

            $whychoosemodel->update([
                'image' => $new_image
            ]);
        }

        $whychoosemodel->update([

            'title1' => $validation['title1'],
            'title2' => $validation['title2'],
            'desc' => $validation['desc'],
            'sat_customer' => $validation['sat_customer'],
            'pro_completed' => $validation['pro_completed'],
            'title3' => $validation['title3'],
            'desc2' => $validation['desc2'],
            'feature_title1' => $validation['feature_title1'],
            'feature_title2' => $validation['feature_title2'],
        ]);

        return redirect()->back()->with('success', "Why Choose Us Updated !!");
    }


    public function Youtube()
    {

        $youtube = WhyChooseUs::select('youtube_title1', 'youtube_title2', 'youtube_link', 'youtube_image')->first();

        return view('admin.youtube', compact('youtube'));
    }

    public function UpdateYoutube(Request $request)
    {
        $validation = $request->validate([
            'youtube_title1' => 'required',
            'youtube_title2' => 'required',
            'youtube_link' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,svg,png,gif,webp|dimensions:width=1920,height=967',
        ]);

        $youtubesection = WhyChooseUs::first();

        if ($request->hasFile('image')) {

            $old_image = $youtubesection->youtube_image;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/common/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['image'], "common", "youtubebg");

            $youtubesection->update([
                'youtube_image' => $new_image
            ]);
        }

        $youtubesection->update([
            'youtube_title1' => $validation['youtube_title1'],
            'youtube_title2' => $validation['youtube_title2'],
            'youtube_link' => $validation['youtube_link'],
        ]);

        return redirect()->back()->with('success', "Youtube Section Updated !!");
    }


    public function expertise()
    {


        $expertise = Expertise::first();

        return view('admin.expertise', compact('expertise'));
    }

    public function Updateexpertise(Request $request)
    {

        $validation = $request->validate([
            'title1' => 'required',
            'title2' => 'required',
            'desc' => 'required',
            'percent_1' => 'required|numeric',
            'percent_title_1' => 'required',
            'percent_desc_1' => 'required',
            'percent_2' => 'required|numeric',
            'percent_title_2' => 'required',
            'percent_desc_2' => 'required',
            'percent_3' => 'required|numeric',
            'percent_title_3' => 'required',
            'percent_desc_3' => 'required',
            'percent_4' => 'required|numeric',
            'percent_title_4' => 'required',
            'percent_desc_4' => 'required',
        ]);


        $expertise = Expertise::first();

        $expertise->update($validation);

        return redirect()->back()->with('success', "Expertise Updated !!");
    }

    public function faqSection()
    {

        $faqsection = barshaFAQ::get();
        $faqcontent = WhyChooseUs::select('faq_title1', 'faq_title2')->first();
        return view('admin.faqsection', compact('faqsection', 'faqcontent'));
    }


    public function updatefaqContent(Request $request)
    {


        $validation = $request->validate([
            'faq_title1' => 'required',
            'faq_title2' => 'required',
        ]);

        $faqsection = WhyChooseUs::first();
        $faqsection->update($validation);

        return redirect()->back()->with('success', 'Faq Content Updated !!');
    }

    public function updatefaqSection(Request $request)
    {


        $validation = $request->validate([
            'question1' => 'required',
            'answer1' => 'required',
            'question2' => 'required',
            'answer2' => 'required',
            'question3' => 'required',
            'answer3' => 'required',
            'question4' => 'required',
            'answer4' => 'required',
            'question5' => 'required',
            'answer5' => 'required',
        ]);

        $faqmodel1 = barshaFAQ::find(1);
        $faqmodel1->question = $validation['question1'];
        $faqmodel1->answer = $validation['answer1'];
        $faqmodel1->save();

        $faqmodel2 = barshaFAQ::find(2);
        $faqmodel2->question = $validation['question2'];
        $faqmodel2->answer = $validation['answer2'];
        $faqmodel2->save();

        $faqmodel3 = barshaFAQ::find(3);
        $faqmodel3->question = $validation['question3'];
        $faqmodel3->answer = $validation['answer3'];
        $faqmodel3->save();

        $faqmodel4 = barshaFAQ::find(4);
        $faqmodel4->question = $validation['question4'];
        $faqmodel4->answer = $validation['answer4'];
        $faqmodel4->save();

        $faqmodel5 = barshaFAQ::find(5);
        $faqmodel5->question = $validation['question5'];
        $faqmodel5->answer = $validation['answer5'];
        $faqmodel5->save();

        return redirect()->back()->with('success', "Faq Updated !!");
    }


    public function testimony()
    {

        $testicontent = WhyChooseUs::select('testi_title1', 'testi_title2')->first();
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonials', compact('testicontent', 'testimonials'));
    }

    public function UpdateContenttestimonials(Request $request)
    {


        $validation = $request->validate([
            'testi_title1' => 'required',
            'testi_title2' => 'required',
        ]);

        $testicontent = WhyChooseUs::first();

        $testicontent->update($validation);

        return redirect()->back()->with('success', 'Testimonial Content Updated !!');
    }

    public function StoreReview(Request $request)
    {

        $validation = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'review' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,svg,png,gif,webp|dimensions:width=378,height=450',
        ]);

        if ($request->hasFile('image')) {
            $new_image = $this->ImageUpload($validation['image'], "testimonials", "customer");
        }

        Testimonial::create([
            'name' => $validation['name'],
            'designation' => $validation['designation'],
            'review' => $validation['review'],
            'image' => $new_image
        ]);

        return redirect()->back()->with('success', 'New Review Added !!');
    }

    public function editTestimony(Testimonial $testimony)
    {

        return view('admin.edit_testimonials', compact('testimony'));
    }

    public function UpdateReview(Request $request)
    {

        $validation = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'review' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,svg,png,gif,webp|dimensions:width=378,height=450',
        ]);
        $reviewModel = Testimonial::find($request->review_id);

        if ($request->hasFile('image')) {

            $old_image = $reviewModel->image;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/testimonials/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['image'], "testimonials", "customer");

            $reviewModel->update([
                'image' => $new_image
            ]);
        }

        $reviewModel->update([
            'name' => $validation['name'],
            'designation' => $validation['designation'],
            'review' => $validation['review']
        ]);

        return redirect()->back()->with('success', 'Review Updated !!');
    }

    public function DestroyReview(Testimonial $testimony)
    {

        $image = $testimony->image;

        if ($image) {
            $image_path = public_path('/storage/uploads/testimonials/' . $image);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        $testimony->delete();

        return response()->json(['success' => true, 'message' => 'Review Deleted !!', 'url' => '/admin/testimonials']);
    }


    public function ourApproach()
    {

        $ourapproach = OurApproach::first();
        return view('admin.ourapproach', compact('ourapproach'));
    }

    public function UpdateourApproach(Request $request)
    {


        $validation = $request->validate([

            'approach_title1' => 'required',
            'approach_title2' => 'required',
            'description' => 'required',
            'speciality1' => 'required',
            'speciality1desc' => 'required',
            'speciality2' => 'required',
            'speciality2desc' => 'required',
            'speciality3' => 'required',
            'speciality3desc' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,svg,gif,png,webp|dimensions:width=600,height=595',
        ]);


        $ourapproach = OurApproach::first();

        if ($request->hasFile('image')) {

            $old_image = $ourapproach->image;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/ourapproach/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['image'], "ourapproach", "approach");

            $ourapproach->update([
                'image' => $new_image
            ]);
        }

        $ourapproach->update([
            'approach_title1' => $validation['approach_title1'],
            'approach_title2' => $validation['approach_title2'],
            'description' => $validation['description'],
            'speciality1' => $validation['speciality1'],
            'speciality1desc' => $validation['speciality1desc'],
            'speciality2' => $validation['speciality2'],
            'speciality2desc' => $validation['speciality2desc'],
            'speciality3' => $validation['speciality3'],
            'speciality3desc' => $validation['speciality3desc'],
        ]);

        return redirect()->back()->with('success', 'Our Approach Updated !!');
    }

    public function WhyChooseUsAbout()
    {
        $whychooseabout = WhyChooseAbout::first();
        return view('admin.whychoose_about', compact('whychooseabout'));
    }

    public function UpdateWhyChooseUsAbout(Request $request)
    {
        $validation = $request->validate([
            'title1' => 'required',
            'title2' => 'required',
            'desc' => 'required',
            'percentage_title1' => 'required',
            'percentage_title1_count' => 'required|numeric',
            'percentage_title2' => 'required',
            'percentage_title2_count' => 'required|numeric',
            'image1' => 'nullable|image|mimes:jpg,jpeg,svg,gif,png,webp|dimensions:width=413,height=452',
            'image2' => 'nullable|image|mimes:jpg,jpeg,svg,gif,png,webp|dimensions:width=344,height=377',
        ]);


        $whychooseabout = WhyChooseAbout::first();

        if ($request->hasFile('image1')) {

            $old_image = $whychooseabout->image1;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/whychoose/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['image1'], "whychoose", "whychooseabout1");

            $whychooseabout->update([
                'image1' => $new_image
            ]);
        }

        if ($request->hasFile('image2')) {

            $old_image = $whychooseabout->image2;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/whychoose/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['image2'], "whychoose", "whychooseabout2");

            $whychooseabout->update([
                'image2' => $new_image
            ]);
        }

        $whychooseabout->update([
            'title1' => $validation['title1'],
            'title2' => $validation['title2'],
            'desc' => $validation['desc'],
            'percentage_title1' => $validation['percentage_title1'],
            'percentage_title1_count' => $validation['percentage_title1_count'],
            'percentage_title2' => $validation['percentage_title2'],
            'percentage_title2_count' => $validation['percentage_title2_count']
        ]);


        return redirect()->back()->with('success', 'Updated Why Choose About !!');
    }

    public function branchFooter()
    {
        $branchtitle = WhyChooseAbout::select('ourbranch_title1', 'ourbranch_title2')->first();
        $footertitle = WhyChooseUs::select('footer_title1', 'footer_title2')->first();
        $company = Company::select('contact_breadcrumb')->first();
        return view('admin.branch_footertitle', compact('branchtitle', 'footertitle', 'company'));
    }

    public function UpdatebranchFooter(Request $request)
    {



        $validation = $request->validate([
            'ourbranch_title1' => 'required',
            'ourbranch_title2' => 'required',
            'footer_title1' => 'required',
            'footer_title2' => 'required',
            'contact_bg' => 'nullable|image|mimes:jpg,jpeg,svg,gif,png,webp|dimensions:width=1920,height=768',
        ], [
            'ourbranch_title1' => 'Branch Title 1 Required !!',
            'ourbranch_title2' => 'Branch Title 2 Required !!',
            'footer_title1' => 'Footer Title 1 Required !!',
            'footer_title2' => 'Footer Title 2 Required !!'
        ]);


        if ($request->hasFile('contact_bg')) {

            $breadcrump_contact = Company::first();

            $old_image = $breadcrump_contact->contact_breadcrumb;

            if ($old_image) {

                $image_path = public_path('/storage/uploads/common/' . $old_image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $new_image = $this->ImageUpload($validation['contact_bg'], "common", "contact_bg");

            $breadcrump_contact->update([
                'contact_breadcrumb' => $new_image
            ]);
        }


        $branchtitle = WhyChooseAbout::first();
        $footertitle = WhyChooseUs::first();


        $branchtitle->ourbranch_title1 = $validation['ourbranch_title1'];
        $branchtitle->ourbranch_title2 = $validation['ourbranch_title2'];
        $branchtitle->save();

        $footertitle->footer_title1 = $validation['footer_title1'];
        $footertitle->footer_title2 = $validation['footer_title2'];
        $footertitle->save();


        return redirect()->back()->with('success', "Title Updated !!");
    }
}
