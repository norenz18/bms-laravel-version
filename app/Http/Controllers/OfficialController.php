<?php

namespace App\Http\Controllers;

use App\Models\Official;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OfficialController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['officials'] = Official::orderBy('rank', 'ASC')->get();
        return view('officials.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Official::create($request->all());
        // dd($request);
        return Redirect(route('officials.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Official $official)
    {
        return view('officials.show', compact('official'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Official $official)
    {
        return view('officials.edit', compact('official'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Official $official)
    {
        $official->update($request->all());
        // dd($official);
        return Redirect(route('officials.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Official $official)
    {
        $official->delete();
        return Redirect(route('officials.index'));
    }
}
