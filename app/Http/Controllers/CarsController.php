<?php

namespace App\Http\Controllers;

use App\models\car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarsController extends Controller
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
        return view('Cars.cars_add');
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

            'type'=>'required',
            'image'=>'required',
            'brand'=>'required',
            'model'=>'required',
            'delivery_place'=>'required',
            'luggage'=>'required',
            'seats'=>'required',
            'transmission'=>'required',
            'fuel'=>'required',
            'fuel_policy'=>'required',
            'mileage_unlimited'=>'required',
            'availability_date'=>'required',
            'agence_id'=>'required',
            'price'=>'required'

        ]);

        $type = $request->input('type');
        $image = $request->input('image');
        $brand = $request->input('brand');
        $model = $request->input('model');
        $delivery_place = $request->input('delivery_place');
        $luggage = $request->input('luggage');
        $seats = $request->input('seats');
        $transmission = $request->input('transmission');
        $fuel = $request->input('fuel');
        $fuel_policy = $request->input('fuel_policy');
        $mileage_unlimited = $request->input('mileage_unlimited');
        $availability_date = $request->input('availability_date');
        $agence_id = $request->input('agence_id');
        $price = $request->input('price');


        $car = array('type'=>$type,
                    'image'=>$image,
                    'brand_id'=>$brand,
                    'model_id'=>$model,
                    'delivery_place'=>$delivery_place,
                    'luggage'=>$luggage,
                    'seats'=>$seats,
                    'transmission'=>$transmission,
                    'fuel'=>$fuel,
                    'fuel_policy'=>$fuel_policy,
                    'mileage_unlimited'=>$mileage_unlimited,
                    'aviability_date'=>$availability_date,
                    'agence_id'=>$agence_id,
                    'price'=>$price,
                    'created_at'=>now(),
                    'updated_at'=>now()
            );

        DB::table('cars')->insert($car);

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
        $car = car::find($id);
        return view('Cars.car_show')->with('car',$car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = car::find($id);
        return view('Cars.car_update')->with('car',$car);
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

            'type'=>'required',
            'image'=>'required',
            'brand'=>'required',
            'model'=>'required',
            'delivery_place'=>'required',
            'luggage'=>'required',
            'seats'=>'required',
            'transmission'=>'required',
            'fuel'=>'required',
            'fuel_policy'=>'required',
            'mileage_unlimited'=>'required',
            'availability_date'=>'required',
            'price'=>'required'

        ]);



        $car = car::find($id);

            $car->type = $request->input('type');
            $car->image = $request->input('image');
            $car->brand_id = $request->input('brand');
            $car->model_id = $request->input('model');
            $car->delivery_place = $request->input('delivery_place');
            $car->luggage = $request->input('luggage');
            $car->seats = $request->input('seats');
            $car->transmission = $request->input('transmission');
            $car->fuel = $request->input('fuel');
            $car->fuel_policy = $request->input('fuel_policy');
            $car->mileage_unlimited = $request->input('mileage_unlimited');
            $car->aviability_date = $request->input('availability_date');
        $car->price = $request->input('price');
            $car->updated_at = now();

        $car->save();

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
        DB::table('cars')->delete($id);
        return redirect('/home');
    }
}
