<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Periode;
use App\Models\Area;


class TestingAdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view('testing.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function periode()
    { 
        $periodes = Periode::find(1);

        if ($periodes) {
            $areas = $periodes->areas;

            return view('testing.periode', compact('periodes', 'areas'));
        } 
    }
    
    public function area()
    { 
        $areas = Area::find(1);
        $area2 = Area::find(2);
        $periodes = Periode::find(1);

        if ($areas) {
            $aging = $areas->aging;
        } 
        if ($area2) {
            $aging = $area2->aging;
        } 

            return view('testing.aging', compact('areas', 'aging', 'area2', 'periodes'));
        
    }

    public function web()
    {
        return view('testing.web');
    }

}
