<?php

namespace App\Http\Controllers;

use App\Models\Advertise;
use Illuminate\Http\Request;

class AdvertiseController extends Controller
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
        $data = Advertise::orderBy('id', 'desc')->paginate(10);

        return view('layouts.admin.advertise.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.admin.advertise.create');
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
        $path = $images->storeAs('advertise', $filename, 'public');
        $fullpathurl = 'storage/' . $path;
        $data['pic_name'] = $filename;
        $data['pic_location'] = $fullpathurl;
        Advertise::create($data);
        return redirect()->route('advertise.index')->with('success', 'Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function show(Advertise $advertise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertise $advertise)
    {
        $data = $advertise;
        return view('layouts.admin.advertise.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertise $advertise)
    {
        $data = $this->validateRequest();

        if (request()->hasFile('pic_location')) {

            $images = $request->file('pic_location');
            $extension = $images->extension();
            $filename = time() . rand(10, 1000) . '.' . $extension;
            $path = $images->storeAs('advertise', $filename, 'public');
            $fullpathurl = 'storage/' . $path;
            $data['pic_name'] = $filename;
            $data['pic_location'] = $fullpathurl;


        }

        else
        {
            $data['pic_name'] = $request->pic_name;
            $data['pic_location'] = $request->addpic;

        }

        $advertise->update($data);

        return redirect()->route('advertise.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertise $advertise)
    {
        unlink('storage/advertise/' . $advertise->pic_name . '');
        $advertise->delete();
       return back()->with('fail', 'Data delete success full');
    }

    public function validateRequest()
    {

        if (request()->hasFile('pic_location')) {

            $data = request()->validate([
                'pic_location' => 'max:60000|dimensions:max_width=1920,max_height=1080',
                'addtype' => 'required',

            ]);
        } else {
            $data = request()->validate([
                'pic_location' => '',
                'addtype' => 'required',
            ]);
        }

        return $data;
    }
}
