<?php

namespace App\Http\Controllers;

use App\Models\Covidnews;
use App\Models\TrakingTable;
use Carbon\Carbon;
use Illuminate\Http\Request;
use CountryState;
use Illuminate\Support\Facades\Redirect;
use PragmaRX\Countries\Package\Countries;


class test extends Controller
{
    
    public function home()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function doctors()
    {
        return view('doctors');
    }
    public function news()
    {
        $news=Covidnews::all();
        
        return view('news',compact('news'));

    }
    public function protct()
    {
        return view('protect');
    }
    public function welcome()
    {
        return view('welcome');
    }

    public function getimg(Request $request,$img)
    {
        $ip=$request->ip();
        $bugpage=back()->getTargetUrl();
        $bug=asset('images/'.$img);
        $viewtime=Carbon::now()->toDateTimeString();
        $ua = $request->header('User-Agent');
        #$ua = $request->server('HTTP_USER_AGENT');
        $vistor = new TrakingTable();
        $vistor->Ip=$ip;
        $vistor->bugpage=$bugpage;
        $vistor->bug=$bug;
        $vistor->viewtime=$viewtime;
        $vistor->ua=$ua;
        $vistor->save();
        #dd($ip,$bugpage,$bug,$viewtime,$ua);

         return Redirect::to('images/'.$img);
    }
     



}
