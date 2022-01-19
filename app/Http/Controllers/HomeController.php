<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Newzpic;
use App\Models\HeadImage;
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
        $currentdate = date("Y-m-d");
        $data = Newzpic::whereDate('showdate','=', $currentdate)->paginate(10);
        $headImage = HeadImage::first();
        return view('layouts.normal.home',compact('data','headImage'));

    }

    public function signup()
    {
        return view('layouts.common.auth.signup');
    }

    public function login()
    {
        return view('layouts.common.auth.login');
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

    public function loginValidate()
    {

        $data = request()->validate([

            'emailormobile' => 'required',
            'password' => 'required|min:8',


        ]);

        return $data;

    }
}
