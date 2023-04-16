<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;
class DataTableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function datatabel(){
        return view ('layouts.datatabel');
    }
}
