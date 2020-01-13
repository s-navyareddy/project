<?php

namespace App\Http\Controllers;
// use App\Caregiver;
use DB;

class CaregiverDirectoryController extends Controller
{
    
    public function index()
    {
        $caregivers = DB::table('caregivers')
        ->join('agencies', 'agencies.id', '=', 'caregivers.agency_id')
        ->select('caregivers.*', 'agencies.name as agencyname')
        ->get();
        
        return view('caregivers-directory')->with('caregivers',$caregivers);
    }
}
