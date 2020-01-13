<?php

namespace App\Http\Controllers;

use App\Agency;
use App\Caregiver;

use DB;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencies = Agency::orderBy('name')->get();
        return view('agencies.index', compact('agencies'));
    }


    public static function getAgencyCaregiversCount($id){
        $agencyCaregivers = Caregiver::where('agency_id',$id)->count();
        return $agencyCaregivers;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function show(Agency $agency)
    {
        return view('agencies.show', compact('agency'));
    }
}
