<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Bu;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        ///$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Bu $bu)
    {
        $bu =$bu->where('bu_status' , 1)->orderBy(DB::raw('RAND()'))->take('15')->get();
        return view('welcome' , compact('bu'));
    }
  
      public function showHome(Bu $bu)
    {
        if($user = Auth::user())
        {
            $bu =  $bu->where('bu_status' , 1)->where('user_id' , $user->id)->orderBy(DB::raw('RAND()'))->take('15');
      
        }
        $bu =  $bu->where('bu_status' , 1)->orderBy(DB::raw('RAND()'))->take('15')->get();
      

       return view('welcome' , compact('bu'));
    }
  
  
  

    public function contact(){
        return view('website.contact.contact');
    }
}
