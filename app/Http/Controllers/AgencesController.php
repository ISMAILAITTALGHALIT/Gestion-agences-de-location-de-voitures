<?php

namespace App\Http\Controllers;

use App\models\Agence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Array_;

class AgencesController extends Controller
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
        $this->validate($request,[
            'city'=>'required',
            'adress'=>'required',
            'phone'=>'required|min:10|max:10'
        ]);

        $city = $request->input('city');
        $adress = $request->input('adress');
        $phone = $request->input('phone');
        $entreprise_id = $request->input('enterprise_id');

        $data = Array('city' => $city, 'adress' => $adress, 'phone' => $phone, 'entreprise_id' => $entreprise_id  );

        DB::table('agences')->insert($data);

        return redirect('/home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $agency = Agence::find($id);
        return view('Agence.agency_home')->with('agency',$agency);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agence = Agence::find($id);
        return view('Agence.agency_update')->with('agency',$agence);
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
        $this->validate($request,[

            'city'=>'required',
            'adress'=>'required',
            'phone'=>'required|min:10|max:10'

        ]);

        $agence = Agence::find($id);

        $agence->city = $request->input('city');
        $agence->adress = $request->input('adress');
        $agence->phone = $request->input('phone');
        $agence->updated_at = now();

        $agence->save();

        return redirect('/home');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('agences')->delete($id);
        return redirect('/home');
    }
}
