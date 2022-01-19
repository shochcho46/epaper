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
        $data = HeadImage::orderBy('id', 'desc')->paginate(30);

        return view('layouts.admin.image.list',compact('data'));
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
        return redirect()->route('headimage.index')->with('success', 'Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeadImage  $headImage
     * @return \Illuminate\Http\Response
     */
    public function show(HeadImage $headimage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeadImage  $headImage
     * @return \Illuminate\Http\Response
     */
    public function edit(HeadImage $headimage)
    {
        //
        $data = $headimage;

        return view('layouts.admin.image.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HeadImage  $headImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HeadImage $headimage)
    {
        //
        $data = $this->validateRequest();

        if (request()->hasFile('pic_location')) {

            $images = $request->file('pic_location');
            $extension = $images->extension();
            $filename = time() . rand(10, 1000) . '.' . $extension;
            $path = $images->storeAs('headImage', $filename, 'public');
            $fullpathurl = 'storage/' . $path;
            $data['pic_name'] = $filename;
            $data['pic_location'] = $fullpathurl;


        }

        else
        {
            $data['pic_name'] = $request->pic_name;
            $data['pic_location'] = $request->headimagepic;

        }

        $headimage->update($data);

        return redirect()->route('headimage.index')->with('success', 'Data Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeadImage  $headImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeadImage $headimage)
    {
        //

        unlink('storage/headImage/' . $headimage->pic_name . '');
         $headimage->delete();
        return back()->with('fail', 'Data delete success full');
    }

    public function status(HeadImage $headimage ,$status)
    {
        $data = [
                'status' => $status,
          ];
          $headimage->update($data);
          return back()->with('success', 'Data Update');
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
