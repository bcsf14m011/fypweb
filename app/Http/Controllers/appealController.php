<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Redirect;
use DateTime;

class appealController extends BaseController
{

    public function index(Request $req)
    {
    	$pin = $req->input('id');

	if(DB::table('Propertydetails')->where('pin', $pin)->exists())
	{
		$checkPIN=DB::table('Propertydetails')->where('pin',$pin)->first();
		$owner=DB::table('Taxpayer')->where('cnic',$checkPIN->cnic)->first();
		session(['variableName'=>'yes']);
		return view('details')->with(['pd' => $checkPIN])->with(['od' => $owner]);
	}

    	else
    	{
    		return redirect('/appeal');//->with('global', 'Your message');
    	}
    }

	public function submit(Request $req)
	{
		$iadd = $req->input('add');
		$ipin = $req->input('pin');


		$icr;
                $icc;
                $iloc;
                $itla;
                $itca;
                $itnf;

                if($req->has('cr')){
                        $icr="true";
                }
                else{
                        $icr="false";
                }
                if($req->has('cc')){
                        $icc="true";
                }
                else{
                        $icc="false";
                }
                if($req->has('loc')){
                        $iloc="true";
                }
                else{
                        $iloc="false";
                }
                if($req->has('tla')){
                        $itla="true";
                }
                else{
                        $itla="false";
                }
                if($req->has('tca')){
                        $itca="true";
                }
                else{
                        $itca="false";
                }
                if($req->has('tnf')){
                        $itnf="true";
                }
                else{
                        $itnf="false";
                }

		$now = new DateTime();

		DB::table('Appeal')->insert(['total_land_area' => $itla, 'total_covered_area' => $itca, 'category_residential' => $icr, 'category_commercial' => $icc,'total_no_of_floors' => $itnf, 'location' => $iloc, 'address' => $iadd, 'pin' => $ipin, 'status' => '0', 'createdAt' => $now, 'updatedAt' => $now]);

		return redirect('/');

		//DB::table('Appeal')->insert(['total_land_area' => $itla, 'total_covered_area' => $itca]);
	}

}

