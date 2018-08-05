<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class IndexController extends Controller
{
    //
    public function index()
    {
    	$born = Carbon::parse('1990-08-05 00:00:00');
    	dd($born->isBirthday());
    }
}
