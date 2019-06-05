<?php

namespace App\Http\Controllers;

use App\models\Agence;
use App\models\car;
use App\models\client;
use App\models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationsController extends Controller
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
        $start = $request->input('start');
        $end = $request->input('end');
        $user_id = $request->input('user_id');
        $car_id = $request->input('car_id');

        $car = car::find($car_id);
        $ag_id = $car->agence_id;

        $agency = Agence::find(1);
        //$agence_id = $agency->id;

        $client = client::where('user_id','=',$user_id)->first();

        $client_id = $client->id;


        $data = array(
            'agence_id'=>$ag_id,
            'client_id'=>$client_id,
            'start_date'=>$start,
            'end_date'=>$end,
            'confirmed'=>'0',
            'car_id'=>$car_id,
            'city'=>$agency->city,
            'created_at'=>now(),
            'updated_at'=>now()
        );

        $a=DB::table('reservations')->where('car_id','=',$car_id)->where('confirmed','=','1')->exists();
        if ($a){
            return redirect()->back()->with('success', 'this car is already reserved');
        }else {


            DB::table('reservations')->insert($data);
        }
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
        $agence = Agence::find($id);

        return view('Agence.agency_reservations')->with('agency',$agence);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = Reservation::find($id);
        $ag = $res->agence_id;
        $res->confirmed = 1;
        $res->save();

        return redirect('/reservations/'.$ag);
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('reservations')->delete($id);
        return redirect('/home');

    }
}
