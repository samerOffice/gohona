<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TodayRateController extends Controller
{
    public function index(){
        $today_rates = DB::table('today_rates')->get();
        return view('today_rates.index',compact('today_rates'));
    }

    public function create(){
        return view('today_rates.create');
    }

    public function store(Request $request){       
        $today_rate = DB::table('today_rates')
        ->insertGetId([
        'name'=>$request->name,
        'rate'=>$request->rate,
        'status'=>$request->status ? '1' : '2'
        ]);
    return redirect()->route('today_rate_list')->withSuccess('Today Rate is added successfully'); 
    }

    public function edit($id){
        $today_rate = DB::table('today_rates')
        ->where('id',$id)
        ->first();
    return view('today_rates.edit',compact('today_rate'));
    }

    public function update(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['rate'] = $request->rate;
        $data['status'] = $request->status ? '1' : '2';
        $updated = DB::table('today_rates')
                  ->where('id', $request->id)
                  ->update($data);
        return redirect()->route('today_rate_list')->withSuccess('Today Rate is updated successfully');
    }

    public function delete($id){
        $deleted = DB::table('today_rates')->where('id', $id)->delete();
        return redirect()->route('today_rate_list');
    }
}
