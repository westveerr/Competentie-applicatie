<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class TestController extends Controller
{
    public function test()
    {
       return DB::table('activiteit')->get();
    }
}
