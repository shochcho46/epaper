<?php

namespace App\Http\Controllers;

use App\Models\Websetting;
use Illuminate\Http\Request;

class WebsettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('blacklist');
        $this->middleware('subadmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Websetting::first();

        if ($data) {
            return view('layouts.admin.websetting.edit', compact('data'));
        } else {
            return view('layouts.admin.websetting.create');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (request()->hasFile('logo_location')) {

            $images = $request->file('logo_location');
            $extension = $images->extension();
            $filename = time() . rand(10, 1000) . '.' . $extension;
            $path = $images->storeAs('websetting', $filename, 'public');
            $fullpathurl = 'storage/' . $path;
            $data['logo_name'] = $filename;
            $data['logo_location'] = $fullpathurl;

        }

        if (request()->hasFile('fav_location')) {

            $images = $request->file('fav_location');
            $extension = $images->extension();
            $filename = time() . rand(10, 1000) . '.' . $extension;
            $path = $images->storeAs('websetting', $filename, 'public');
            $fullpathurl = 'storage/' . $path;
            $data['fav_name'] = $filename;
            $data['fav_location'] = $fullpathurl;

        }

        $data['language'] = $request->language;
        $data['logo_text'] = $request->logo_text;
        $data['picperpage'] = $request->picperpage;

        Websetting::create($data);
        return redirect()->route('web.create')->with('success', 'Data Saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Websetting  $websetting
     * @return \Illuminate\Http\Response
     */
    public function show(Websetting $websetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Websetting  $websetting
     * @return \Illuminate\Http\Response
     */
    public function edit(Websetting $websetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Websetting  $websetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Websetting $web)
    {
        //
        if (request()->hasFile('logo_location')) {

            $images = $request->file('logo_location');
            $extension = $images->extension();
            $filename = time() . rand(10, 1000) . '.' . $extension;
            $path = $images->storeAs('websetting', $filename, 'public');
            $fullpathurl = 'storage/' . $path;
            $data['logo_name'] = $filename;
            $data['logo_location'] = $fullpathurl;

        } else {
            $data['logo_name'] = $request->oldlogo_name;
            $data['logo_location'] = $request->oldlogo_location;
        }

        if (request()->hasFile('fav_location')) {

            $images = $request->file('fav_location');
            $extension = $images->extension();
            $filename = time() . rand(10, 1000) . '.' . $extension;
            $path = $images->storeAs('websetting', $filename, 'public');
            $fullpathurl = 'storage/' . $path;
            $data['fav_name'] = $filename;
            $data['fav_location'] = $fullpathurl;

        } else {
            $data['fav_name'] = $request->oldfav_name;
            $data['fav_location'] = $request->oldfav_location;
        }

        $data['language'] = $request->language;
        $data['logo_text'] = $request->logo_text;
        $data['picperpage'] = $request->picperpage;
        // dd($data);

        $web->update($data);
        return redirect()->route('web.create')->with('success', 'Data Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Websetting  $websetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Websetting $websetting)
    {
        //
    }
}
