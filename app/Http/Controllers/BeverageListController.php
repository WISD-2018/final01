<?php

namespace App\Http\Controllers;

use App\BeverageList;
use Illuminate\Http\Request;

class BeverageListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return '123';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BeverageList  $beverageList
     * @return \Illuminate\Http\Response
     */
    public function show(BeverageList $beverageList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BeverageList  $beverageList
     * @return \Illuminate\Http\Response
     */
    public function edit(BeverageList $beverageList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BeverageList  $beverageList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BeverageList $beverageList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BeverageList  $beverageList
     * @return \Illuminate\Http\Response
     */
    public function destroy(BeverageList $beverageList)
    {
        //
    }
}
