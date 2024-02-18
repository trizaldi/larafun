<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View\View;

use Illuminate\Support\Facades\DB;//pemanggilan
use App\Models\Voter;

class VoterController extends Controller
{
    public function viewVoter() 
    {
        //$voter = DB::table('voters')->get();
        //$voter = mysqli_query('select * from ...')
        
        $voter = Voter::all();//orm

        return view('voters',compact('voter'));
                    
    }

        
}
