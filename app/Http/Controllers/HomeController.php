<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $resident = DB::table('residents')->count();
        // return view('homes.home', compact('residents'));
        
        $residents = DB::table('residents')->count();
        $voters = DB::table('residents')->where('voter','yes')->count();
        $seniors = DB::table('residents')->where('senior','senior')->count();
        $daps = DB::table('residents')->where('dap','yes')->count();
        $male = DB::table('residents')->where('gender','male')->count();
        $female = DB::table('residents')->where('gender','female')->count();
        $solo = DB::table('residents')->where('civil','solo parent')->count();
        $pending = DB::table('blotters')->where('status','pending')->count();
        return view('homes.index', compact('residents', 'voters', 'seniors', 'daps', 'male','female','solo', 'pending'));
    }
    
}
