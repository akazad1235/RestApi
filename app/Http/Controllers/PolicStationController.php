<?php

namespace App\Http\Controllers;

use App\Models\PoliceStation;
use Illuminate\Http\Request;

class PolicStationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $getStation = PoliceStation::all();
       return response()->json($getStation);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->policeStationName;
        $stationCode = $request->stationCode;
        $district = $request->district;
        $address = $request->address;


        $storeStation = PoliceStation::create([
            'policeStationName' => $name,
            'stationCode' => $stationCode,
            'district' => $district,
            'address' => $address
        ]);
       if($storeStation == true){
           return response()->json(['success'=>'Station created success', 'status'=> 200]);
       }else{
           return response()->json(['error'=>'faild']);
       }
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
