<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use DB;

class ReportController extends Controller
{
     public function userReport()
     {
     	$admincount = User::where('type','Admin')->count();
     	$usercount = User::where('type','User')->count();

     	$userLastLogin = User::all();
     	$i = 0;
     	$arr = [];
     	foreach ($userLastLogin as $date) {

     		$arr[$i++] = date('m',strtotime($date)); 
     	}
     	for($i = 0; $i<count($arr); $i++){
     		if(($i - date('m') <= 6 )){
     			$threetoSix++;
     		}
     	}
           	return view('admin.report')
     				->with('admincount',$admincount)
     				->with('usercount',$usercount)
     				->with('arr',$arr);
     	}
     }
}
