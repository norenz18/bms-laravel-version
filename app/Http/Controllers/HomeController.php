<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
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
        return view('homes.home');
    }
}
