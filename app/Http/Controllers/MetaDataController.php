<?php

namespace App\Http\Controllers;

use App\Models\MetaData;
use Illuminate\Http\Request;

class MetaDataController extends Controller
{
    public function index (){

        $metapages = MetaData::get();

        return view('admin.metadata', compact('metapages'));
    }
}
