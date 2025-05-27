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

    public function edit(MetaData $page){

        return view('admin.edit_metadata', compact('page'));

    }

    public function update(Request $request){

        $validation = $request->validate([
            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'canonical' => 'required',
            'meta_description' => 'required',
        ]);

        $metadata = MetaData::where('page_id', $request->page_id)->first();
        $metadata->update($validation);

        return redirect()->back()->with('success', "Meta Data Updated !!");
    }
}
