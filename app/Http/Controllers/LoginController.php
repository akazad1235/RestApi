<?php

namespace App\Http\Controllers;
use \Firebase\JWT\JWT;
use Illuminate\Http\Request;
use App\Models\Registration;

class LoginController extends Controller
{
  
    function tokenTest(Request $request){

        $token = $request->input('access_token');

        $key = env('TOKEN_KEY');
        $decoded = JWT::decode($token, $key, array('HS256'));
        $decodedArry = (array) $decoded;
        $email = $decodedArry['email'];

        
        return response()->json($email);
    }

    function onLogin(Request $request){
        $key = env('TOKEN_KEY');
        //$name = $request->name; 
        $email = $request->email; 
        $password = $request->password; 

        $checkUser = Registration::where(['email'=> $email, 'password'=>$password])->count();
        //return $checkUser;

        if($checkUser == 1){
           
            $payload = array(
                "site" => "http://demo.azadhosen.org",
                "email" => $email,
                "iat" => time(),
                "exp" => time()+3600
            );
            $jwt = JWT::encode($payload, $key);
             return response()->json(['Status'=>'login success','status-Code'=>200, 'token'=>$jwt]);
            
        }else{
            return 'fake user';
        }

    }
}
