<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\barshaFAQ;
use App\Models\Company;
use App\Models\Expertise;
use App\Models\HomeBanner;
use App\Models\Marquee;
use App\Models\MetaData;
use App\Models\OurApproach;
use App\Models\OurService;
use App\Models\OurServiceDetail;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\WhyChooseAbout;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{

    public function index()
    {
        $homebanner = HomeBanner::first();
        $about = About::first();
        $metadata = MetaData::where('page_id', 1)->first();
        $company = Company::first();
        $ourservice = Service::first();
        $ourservice_details = OurService::get();
        $whychoose = WhyChooseUs::first();
        $barshafaq = barshaFAQ::get();
        $testimony = Testimonial::get();
        return view('home', compact('metadata', 'testimony', 'company', 'barshafaq', 'whychoose', 'ourservice_details', 'ourservice', 'homebanner', 'about'));
    }

    public function About()
    {
        $metadata = MetaData::where('page_id', 2)->first();
        $about = About::first();
        $whychoose = WhyChooseUs::first();
        $whychooseabout = WhyChooseAbout::first();
        $company = Company::first();
        $expertise = Expertise::first();
        $ourapproach = OurApproach::first();
        return view('about', compact('metadata', 'company', 'ourapproach', 'expertise', 'whychooseabout', 'whychoose', 'about'));
    }

    public function Services()
    {
        $metadata = MetaData::where('page_id', 3)->first();
        $whychoose = WhyChooseUs::first();
        $company = Company::first();
        $ourservice_details = OurService::get();
        $servicebg = Service::select('image')->first();
        return view('services', compact('metadata', 'company', 'ourservice_details', 'whychoose', 'servicebg'));
    }


    public function Contact()
    {
        $metadata = MetaData::where('page_id', 4)->first();
        $whychoose = WhyChooseUs::first();
        $company = Company::first();
        return view('contact', compact('metadata', 'company', 'whychoose'));
    }

    public function sendMessage(Request $request)
    {

        $validation = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required',
        ]);


        $phone = '97152641515';
        $message = "Hello I am " . $validation['fname'] . " " . $validation['lname'] . "," . $validation['email'] . "," . $validation['phone'] . "," . $validation['message'];
        $url = "https://wa.me/$phone?text=" . urlencode($message);

        return Redirect::away($url);
    }

    public function showService($servicename, $serviceid)
    {

        $company = Company::first();
        $servicebg = Service::select('image')->first();
        // $ourservice_details = OurService::get();
        $whychoose = WhyChooseUs::first();
        $servicedata = OurService::where('id', $serviceid)->first();
        $servicedatadetails = OurServiceDetail::where('service_id', $serviceid)->first();
        return view('servicesDetails', compact('company', 'servicebg', 'whychoose', 'servicename', 'servicedata', 'servicedatadetails'));
    }
}
