<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;
use Dompdf\Dompdf;
use DB;

class PrintPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function printpdf($id){
        // $user = User::findOrFail($id);
        // $data = [
        //     'title' => 'User Profile',
        //     'user' => $user
        // ];
        $record=DB::table('users')->where('id',$id)->first();
        // $record=DB::table('users')->get();
        // return view ('layouts.printpdf',compact('record'));
        // $record = PDF::loadView('layouts.printpdf', $record);
        // return $record->stream('user-profile.pdf');
        $pdf = new Dompdf();
        // $pdf->loadHtml($record);
        $pdf->loadHtml(view('layouts.printpdf', compact('record')));
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();


        // return view ('layouts.printpdf',compact('record'));
        return $pdf->stream();
    }
}
