<?php

namespace App\Http\Controllers;

use App\Models\HeadImage;
use Illuminate\Http\Request;

class HeadImageController extends Controller
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
        return view('layouts.admin.image.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $this->validateRequest();
        $images = $request->file('pic_location');
        $extension = $images->extension();
        $filename = time() . rand(10, 1000) . '.' . $extension;
        $path = $images->storeAs('headImage', $filename, 'public');
        $fullpathurl = 'storage/' . $path;
        $data['pic_name'] = $filename;
        $data['pic_location'] = $fullpathurl;

        HeadImage::create($data);
        return back()->with('success', 'Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeadImage  $headImage
     * @return \Illuminate\Http\Response
     */
    public function show(HeadImage $headImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeadImage  $headImage
     * @return \Illuminate\Http\Response
     */
    public function edit(HeadImage $headImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HeadImage  $headImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HeadImage $headImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeadImage  $headImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeadImage $headImage)
    {
        //
    }

    public function validateRequest()
    {

        if (request()->hasFile('pic_location')) {

            $data = request()->validate([
                'pic_location' => 'max:6000|dimensions:max_width=1920,max_height=450',
                'user_id' => 'required',
                'showdate' => 'required',
            ]);
        } else {
            $data = request()->validate([
                'pic_location' => '',
                'user_id' => 'required',
                'showdate' => 'required',
            ]);
        }

        return $data;
    }
}
