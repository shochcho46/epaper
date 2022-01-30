<?php

namespace App\Http\Controllers;

use App\Models\Advertise;
use App\Models\HeadImage;
use App\Models\Newzpic;
use App\Models\Seo;
use App\Models\Social;
use App\Models\User;
use App\Models\Websetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $websetting = Websetting::first();
        if (!empty($websetting)) {
            $pagination = $websetting->picperpage;
        } else {
            $pagination = 20;
        }
        $currentdate = date("Y-m-d");

        $data = Newzpic::whereDate('showdate', '=', $currentdate)->paginate($pagination);

        if (empty($data)) {

            $getnewzpic = Newzpic::first();
            if (!empty($getnewzpic)) {
                $getdate = $getnewzpic->showdate;
                $data = Newzpic::whereDate('showdate', '=', $getdate)->paginate($pagination);
            }

        }
        $seo = Seo::first();
        $social = Social::all()->sortByDesc("id");
        $headImage = HeadImage::first();
        $hbanner = Advertise::where('addtype', 'hbanner')->first();
        $fbanner = Advertise::where('addtype', 'fbanner')->first();
        $normaladd = Advertise::where('addtype', 'normal')->get();
        return view('layouts.normal.home', compact('data', 'headImage', 'seo', 'hbanner', 'fbanner', 'normaladd', 'social'));

    }

    public function signup()
    {
        $seo = Seo::first();
        $social = Social::all()->sortByDesc("id");
        return view('layouts.common.auth.signup', compact('seo', 'social'));
    }

    public function login()
    {
        $seo = Seo::first();
        $social = Social::all()->sortByDesc("id");
        return view('layouts.common.auth.login', compact('seo', 'social'));
    }

    public function register(Request $request)
    {
        $data = $this->regValidate();
        $data['password'] = Hash::make($request->password);
        $data['type'] = "normal";

        User::create($data);
        return back()->with('update', 'Registration Success Full');
    }

    public function signin(Request $request)
    {
        $data = $this->loginValidate();

    }

    public function regValidate()
    {

        $data = request()->validate([

            'name' => 'required',
            'type' => '',
            'mobile' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',

        ]);

        return $data;

    }

    public function search(Request $request)
    {
        $data = $request->input('searchdate');
        return redirect()->route('getsearch.home', $data);

    }

    public function getsearch($search)
    {

        $currentdate = $search;
        $websetting = Websetting::first();
        if (!empty($websetting)) {
            $pagination = $websetting->picperpage;
        } else {
            $pagination = 20;
        }

        $data = Newzpic::whereDate('showdate', '=', $currentdate)->paginate($pagination);
        $headImage = HeadImage::whereDate('showdate', '=', $currentdate)->first();
        $seo = Seo::first();
        $hbanner = Advertise::where('addtype', 'hbanner')->first();
        $fbanner = Advertise::where('addtype', 'fbanner')->first();
        $normaladd = Advertise::where('addtype', 'normal')->get();
        return view('layouts.normal.home', compact('data', 'headImage', 'seo', 'hbanner', 'fbanner', 'normaladd'));
    }

    public function loginValidate()
    {

        $data = request()->validate([

            'emailormobile' => 'required',
            'password' => 'required|min:8',

        ]);

        return $data;

    }

}
