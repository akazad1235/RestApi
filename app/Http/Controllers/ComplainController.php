<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use App\Models\Registration;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getComplain  = Complain::all();
        return response()->json($getComplain);
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
        $userId = $request->input('user_id');
        //return $userId;
        $policeStationCode = $request->policeStationCode;
        $complainName = $request->complain_name;
        $complainType = $request->complain_type;
        $address = $request->address;

        $checkUserData = Registration::where('id', $userId)->count();

         if ($checkUserData == 1) {
            $addComplain= Complain::create([
                'reg_id'=>  $userId,
                'complain_id'=>  $policeStationCode,
                'complain_name'=>  $complainName,
                'complain_type'=>  $complainType,
                'address'=>  $address,
            ]);

            if ($addComplain == true) {
                return 'your complain success';
            }else{
                return 'your complain faild';
            }
         }else{
             return 'false';
         }
         
        


       
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function show(Complain $complain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function edit(Complain $complain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complain $complain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complain $complain)
    {
        //
    }
}
