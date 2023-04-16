<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserCountController extends Controller
{
    public function usercount()
{
    $usercount = DB::table('users')->count();
    return view('layouts.dashboard', compact('usercount'));
}
}
