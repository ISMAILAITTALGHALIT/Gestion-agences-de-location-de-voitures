<?php

namespace App\Http\Controllers;

use App\models\Agence;
use App\models\car;
use App\models\CarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function search(Request $request){

        $this->validate($request,[
           'search_city' => 'required',
            'start_date' => 'required|after:yesterday',
            'end_date' => 'required|after:start_date'
        ]);
        $search_city = $request->input('search_city');
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');


            $result = Agence::with('cars')->where('city','like','%'.$search_city.'%')->get();

            return view('Client.car_search_result',['results'=>$result,'start'=>$start_date,'end'=>$end_date]);



    }


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
}
