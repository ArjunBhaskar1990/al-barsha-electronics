<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\barshaFAQ;
use App\Models\Company;
use App\Models\HomeBanner;
use App\Models\Marquee;
use App\Models\MetaData;
use App\Models\OurService;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

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
        $whychoose = WhyChooseUs::first();
        $company = Company::first();
        return view('about', compact('metadata', 'company', 'whychoose'));
    }

    public function Services()
    {
        $metadata = MetaData::where('page_id', 3)->first();
        $whychoose = WhyChooseUs::first();
        $company = Company::first();
        return view('services', compact('metadata', 'company', 'whychoose'));
    }
    public function Contact()
    {
        $metadata = MetaData::where('page_id', 4)->first();
        $whychoose = WhyChooseUs::first();
        $company = Company::first();
        return view('contact', compact('metadata', 'company','whychoose'));
    }
}
