<?php

namespace App\Http\Controllers;

use illuminate\support\facades\DB;

class ExampleController extends Controller
{


     function dbTest(){
        $dbTest = DB::Connection()->getDatabaseName();
        return $dbTest;
    }
}
