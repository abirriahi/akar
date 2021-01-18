<?php

namespace App\Http\Controllers;

use App\Bu;
use App\ContactUs;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(User $user , Bu $bu , ContactUs $contactUs)
    {
        $buCountactive = countAllBuAppendTostatus(1);
        $buWating = countAllBuAppendTostatus(0);
        $usersCount = $user->count();
        $contactUsCount = $contactUs->count();

        $mapping = $bu->select('bu_latitude' , 'bu_langtuide' , 'bu_name')->get();
        $chart = $bu->select(DB::raw('COUNT(*) as counting , month '))->where('year' , date('Y'))->groupBy('month')->orderBy('month' , 'asc')->get()->toArray();

        $array = [];
        if(isset($chart[0]['month'])) {
            for ($i = 1; $i < $chart[0]['month']; $i++) {
                $array[] = 0;
            }
        }
        $new = array_merge($array , $chart);

        $lastesUsers  = $user->take('8')->orderBy('id' , 'desc')->get();
        $lastesBu = $bu->take('10')->orderBy('id' , 'desc')->get();
        $lastesContactus = $contactUs->take('7')->orderBy('id' , 'desc')->get();

      return view('admin.home.index' ,
          compact(
              'buCountactive','buWating','usersCount','contactUsCount' , 'mapping' ,'new' , 'lastesUsers' , 'lastesBu' ,'lastesContactus'
          )
          );
    }

    public function showYearStatics(Bu $bu ){
        $year = date('Y');
        $chart = $bu->select(DB::raw('COUNT(*) as counting , month '))->where('year' , date('Y'))->groupBy('month')->orderBy('month' , 'asc')->get()->toArray();
        $array = [];
        if(isset($chart[0]['month'])){
            for($i = 1;$i < $chart[0]['month'];$i++){
                $array[] = 0;
            }
        }

        $new = array_merge($array , $chart);
        return view('admin.home.statics' , compact('year' , 'new'));
    }

    public function showThisYear(Request $request , Bu $bu){
        $year = $request->year;
        $chart = $bu->select(DB::raw('COUNT(*) as counting , month '))->where('year' , $year)->groupBy('month')->orderBy('month' , 'asc')->get()->toArray();
        $array = [];
        if(isset($chart[0]['month'])) {
            for ($i = 1; $i < $chart[0]['month']; $i++) {
                $array[] = 0;
            }
        }
        $new = array_merge($array , $chart);
        return view('admin.home.statics' , compact('year' , 'new'));
    }






}
