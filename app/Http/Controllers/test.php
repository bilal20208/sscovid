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
    
    public function vistors()
    {
        $rows=TrakingTable::all();
        return view('traking',compact('rows'));
    }
    public function shownews($id)
    {
        $news=Covidnews::where('id',$id)->first();
        
        return view('viewnews',compact('news'));
    }
    

    public function getimg(Request $request,$img)
    {
        /* $ip=$request->ip(); */
        $ip=''.$this->getVistorIp();
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
    public function getVistorIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip);
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
    }
     



}
