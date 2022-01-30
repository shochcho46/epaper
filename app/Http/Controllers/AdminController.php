<?php

namespace App\Http\Controllers;

use App\Models\Newzpic;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('blacklist');
        $this->middleware('subadmin');

    }
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
        $monthnamearray = array();
        $resultArray = array();

        $yearArray = array();
        $yearResultArray = array();

        $userArray = array();
        $userResultArray = array();

        $monthname = "";
        $yearName = "";

        $year = Newzpic::whereYear('showdate', date('Y'))->get();
        $yeardata = Newzpic::all();

        $grouped = $year->groupBy(function ($item, $key) {
            return Carbon::parse($item->showdate)->format('m');
        });

        $groupByYear = $yeardata->groupBy(function ($item, $key) {
            return Carbon::parse($item->showdate)->format('Y');
        });

        $userlist = User::where('type', 'admin')->orWhere('type', 'subadmin')->get();

        foreach ($userlist as $key => $uservalue) {
            array_push($userArray, $uservalue->name);
            array_push($userResultArray, $uservalue->newzpics->count());
        }

        foreach ($groupByYear as $key => $yearvalue) {

            foreach ($yearvalue as $key => $newvalue) {

                $getYearName = date("Y", strtotime($newvalue->showdate));

                if ($yearName == $getYearName) {

                } else {

                    $yearName = $getYearName;
                    array_push($yearArray, $getYearName);

                }
            }

            array_push($yearResultArray, $yearvalue->pluck('showdate')->count());
        }

        foreach ($grouped as $key => $value) {
            foreach ($value as $key => $nvalue) {
                $getMonthName = date("F", strtotime($nvalue->showdate));

                if ($monthname == $getMonthName) {

                } else {

                    $monthname = $getMonthName;
                    array_push($monthnamearray, $getMonthName);

                }

            }
            array_push($resultArray, $value->pluck('showdate')->count());
        }

        return view('layouts.admin.home', compact('monthnamearray', 'resultArray', 'yearArray', 'yearResultArray', 'userArray', 'userResultArray'));
    }

    public function usercreate()
    {
        return view('layouts.admin.user.create');
    }

    public function addusertype(Request $request)
    {

        $data = $this->regValidate();

        $data['password'] = Hash::make($request->password);

        $data['status'] = "active";
        User::create($data);
        return back()->with('update', 'Registration Success Full');
    }

    public function regValidate()
    {

        $data = request()->validate([

            'name' => 'required',
            'type' => 'required',
            'mobile' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',

        ]);

        return $data;

    }

    public function getnormaluserlist()
    {
        $user = User::where('type', 'normal')->paginate(1);
        $heading = "NORMAL USER LIST";
        return view('layouts.admin.user.list', compact('user', 'heading'));

    }

    public function getadminlist()
    {
        $user = User::where('type', 'admin')->paginate(1);
        $heading = "ADMIN USER LIST";
        return view('layouts.admin.user.list', compact('user', 'heading'));

    }

    public function getadminblacklist()
    {
        $user = User::where('type', 'admin')->paginate(1);
        $heading = "ADMIN USER BLACKLIST";
        return view('layouts.admin.user.disablelist', compact('user', 'heading'));

    }

    public function getsubadminlist()
    {
        $user = User::where('type', 'subadmin')->paginate(1);
        $heading = "SUBADMIN USER LIST";
        return view('layouts.admin.user.list', compact('user', 'heading'));

    }

    public function getnormaluserblacklist()
    {
        $user = User::where('type', 'normal')->paginate(1);
        $heading = "NORMAL USER BLACKLIST";
        return view('layouts.admin.user.disablelist', compact('user', 'heading'));

    }

    public function getsubadminblacklist()
    {
        $user = User::where('type', 'subadmin')->paginate(1);
        $heading = "SUBADMIN USER BLACKLIST";
        return view('layouts.admin.user.disablelist', compact('user', 'heading'));

    }

    public function getnormaluserdisablelist()
    {
        $user = User::where('type', 'normal')->paginate(1);
        $heading = "NORMAL USER LIST";
        return view('layouts.admin.user.list', compact('user', 'heading'));

    }

    public function blacklistuser(User $user)
    {

        $user->status = "blacklist";
        $user->save();
        return back()->with('warning', 'One User Blacklist');

    }

    public function activeuser(User $user)
    {

        $user->status = "active";
        $user->save();
        return back()->with('success', 'One User Active');

    }

    public function loadrestpass(User $user)
    {

        return view('layouts.admin.user.resetpass', compact('user'));

    }

    public function passresetconfirm(Request $request, User $user)
    {

        $data = $this->validateRequestpassword();
        $data['password'] = Hash::make($request->password);
        $user->update($data);
        return back()->with('update', 'Data Update');

    }

    public function validateRequestpassword()
    {

        $data = request()->validate([

            'password' => 'required|min:8|confirmed',

        ]);

        return $data;

    }

}
