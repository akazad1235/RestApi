<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\support\facades\DB;

use App\Models\Registration;

class RegistrationController extends Controller
{
    function getUser(){
       return Registration::all();
    }

    function Registration(Request $request){
        
       // return $request;

         $name = $request->name;
         $email = $request->email;
        $gender = $request->gender;
         $birthDay = $request->birth_day;
         $password = md5($request->password);
      //  return [$birthDay,$gender];

       $userRegister= Registration::insert([
            'name' => $name,
            'email' => $email,
            'gender' => $gender,
            'birth_day' => $birthDay,
            'password' => $password
        ]);

        return response()->json($userRegister);
    }

    function userSelectbyEmail(Request $request){

        $id = $request->input('id');
        $email = 'akazad@gmail.com';
        $getUserbyEmail = Registration::where('id',$id)->get();
        return response()->json($getUserbyEmail);

    }

    function userUpdateProfile(Request $request){



        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $nid = $request->nid;
        $address = $request->address;
        
        $userto = Registration::where('email', $email)->get();
 

       $updateUser = $userto->toQuery()->update([
            'name' => $name,
            'phone' => $phone,
            'nid' => $nid,
            'address' => $address
        ]);
        
        if($updateUser == 1){
            return 'user udate success';
        }else{
            return 'user udpate faild';
        }

    }
}
