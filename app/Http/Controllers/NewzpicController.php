<?php

namespace App\Http\Controllers;

use App\Models\Newzpic;
use Illuminate\Http\Request;

class NewzpicController extends Controller
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
        $data = Newzpic::orderBy('id', 'desc')->paginate(10);

        return view('layouts.admin.newzpic.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.newzpic.create');
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
        $path = $images->storeAs('newzpic', $filename, 'public');
        $fullpathurl = 'storage/' . $path;
        $data['pic_name'] = $filename;
        $data['pic_location'] = $fullpathurl;
        Newzpic::create($data);
        return redirect()->route('newzpic.index')->with('success', 'Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newzpic  $newzpic
     * @return \Illuminate\Http\Response
     */
    public function show(Newzpic $newzpic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newzpic  $newzpic
     * @return \Illuminate\Http\Response
     */
    public function edit(Newzpic $newzpic)
    {
        $data = $newzpic;
        return view('layouts.admin.newzpic.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newzpic  $newzpic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newzpic $newzpic)
    {
        //
        $data = $this->validateRequest();

        if (request()->hasFile('pic_location')) {

            $images = $request->file('pic_location');
            $extension = $images->extension();
            $filename = time() . rand(10, 1000) . '.' . $extension;
            $path = $images->storeAs('newzpic', $filename, 'public');
            $fullpathurl = 'storage/' . $path;
            $data['pic_name'] = $filename;
            $data['pic_location'] = $fullpathurl;

        } else {
            $data['pic_name'] = $request->pic_name;
            $data['pic_location'] = $request->newzpic;

        }

        $newzpic->update($data);

        return redirect()->route('newzpic.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newzpic  $newzpic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newzpic $newzpic)
    {
        //

        unlink('storage/newzpic/' . $newzpic->pic_name . '');
        $newzpic->delete();
        return back()->with('fail', 'Data delete success full');
    }

    public function status(Newzpic $newzpic, $status)
    {
        $data = [
            'status' => $status,
        ];
        $newzpic->update($data);
        return back()->with('success', 'Data Update');
    }

    public function validateRequest()
    {

        if (request()->hasFile('pic_location')) {

            $data = request()->validate([
                'pic_location' => 'max:60000|dimensions:max_width=4920,max_height=3080',
                'user_id' => 'required',
                'showdate' => 'required',
                'serial' => 'required',
                'colsize' => 'required',
            ]);
        } else {
            $data = request()->validate([
                'pic_location' => '',
                'user_id' => 'required',
                'showdate' => 'required',
                'serial' => 'required',
                'colsize' => 'required',
            ]);
        }

        return $data;
    }
}
