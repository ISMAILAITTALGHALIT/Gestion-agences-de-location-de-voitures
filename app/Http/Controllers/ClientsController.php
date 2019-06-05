<?php

namespace App\Http\Controllers;

use App\models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
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
            'first_name'=>'required',
            'last_name'=>'required',
            'identity_card'=>'required|min:7|max:7',
            'birth_date'=>'required',
            'driver_licence_date'=>'required',
            'avatar_path'=>'required',
            'driver_licence_path'=>'required',
            'identity_card_path'=>'required'
        ]);

            $first_name = $request->input('first_name');
            $last_name = $request->input('last_name');
            $identity_card = $request->input('identity_card');
            $birth_date = $request->input('birth_date');
            $driver_licence_date =  $request->input('driver_licence_date');
            $avatar_path = $request->input('avatar_path');
            $driver_licence_path = $request->input('driver_licence_path');
            $identity_card_path = $request->input('identity_card_path');
            $user_id = $request->input('user_id');


        $data = array('first_name'=>$first_name,
                            'last_name'=>$last_name,
                            'identity_card'=>$identity_card,
                            'birth_date'=>$birth_date,
                            'driver_licence_date'=>$driver_licence_date,
                            'avatar_path'=>$avatar_path,
                            'driver_licence_path'=>$driver_licence_path,
                            'identity_card_path'=>$identity_card_path,
                            'user_id'=>$user_id,
                            'created_at'=>now(),
                            'updated_at'=>now()

        );

            DB::table('clients')->insert($data);
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
        $client = client::find($id);
        return view('Client.client_show')->with('client',$client);
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
