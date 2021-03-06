<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Counter;

class IndexController extends Controller
{
    public function show()
    {
        $sumup = DB::select('select SUM(book1) as b1, SUM(book2) as b2, SUM(book3) as b3, SUM(veg) as veg, SUM(kotow) as kotow from counters')[0];
        $tans= DB::select('select * from tan_list');
        return view('welcome', ['book1' => $sumup->b1,'book2'=>$sumup->b2,'book3'=>$sumup->b3,'veg'=>$sumup->veg,'kotow'=>$sumup->kotow,'tans'=>$tans]);
    }

    public function store(Request $request)
    {
        DB::insert('insert into counters (name,tan_id,book1,book2,book3,veg,kotow,created_at) 
                values (?,?,?,?,?,?,?,DATE_ADD(NOW(), INTERVAL 8 HOUR))',[$request['name'],$request['tan'],(int)$request['b1'],(int)$request['b2'],(int)$request['b3'],(int)$request['veg'],(int)$request['kotow']]);
        return true;//['success' => 'successfully done'];//redirect('/');
    } 
    public function summary(Request $request)
    {
        $sumup= DB::table('counters')
                ->join('tan_list', 'tan_list.id', '=', 'counters.tan_id')
                ->select(DB::raw('area,`group`,tan,name,SUM(book1) as b1, SUM(book2) as b2, SUM(book3) as b3, SUM(veg) as veg, SUM(kotow) as kotow'))
                ->whereNull('updated_at')
                ->groupBy('area','group','tan','name')
                ->orderBy('tan')
                ->get();
        return view('Statistic', ['statistic' => $sumup]);
    } 
    public function reset(Request $request){

        DB::table('counters')
                ->whereNull('updated_at')
                ->update(['updated_at'=>now()]);
        return redirect('statistic');
    }
}
