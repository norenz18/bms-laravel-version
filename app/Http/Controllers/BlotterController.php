<?php

namespace App\Http\Controllers;

use App\Models\Blotter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BlotterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blotters'] = Blotter::orderBy('id', 'DESC')->get();
        return view('blotters.index', $data);
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
        Blotter::create($request->all());
        return Redirect(route('blotters.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blotter  $blotter
     * @return \Illuminate\Http\Response
     */
    public function show(Blotter $blotter)
    {
        return view('blotters.show', compact('blotter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blotter  $blotter
     * @return \Illuminate\Http\Response
     */
    public function edit(Blotter $blotter)
    {
        // dd($blotter);
        return view('blotters.edit', compact('blotter'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blotter  $blotter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blotter $blotter)
    {
        $blotter->update($request->all());
        return Redirect(route('blotters.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blotter  $blotter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blotter $blotter)
    {
        $blotter->delete();
        return Redirect(route('blotters.index'));
    }
}
