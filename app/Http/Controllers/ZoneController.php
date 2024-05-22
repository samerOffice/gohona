<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zones = DB::table('zones')
                ->leftJoin('districts', 'zones.district_id', '=', 'districts.id')
                ->select('zones.*', 'districts.name as district_name')
                ->get();
        return view('zones.index',compact('zones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $districts = DB::table('districts')->get();
        return view('zones.create',compact('districts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $zone = DB::table('zones')
        ->insertGetId([
        'name'=>$request->name,
        'district_id'=>$request->district_id,
        'note'=>$request->note,
        'status'=>$request->status ? '1' : '2'
        ]);
        return redirect()->route('zone.index')->withSuccess('Zone is added successfully'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $districts = DB::table('districts')->get();
        $zone = DB::table('zones')
              ->leftJoin('districts', 'zones.district_id', '=', 'districts.id')
              ->select('zones.*', 'districts.name as district_name')
              ->where('zones.id',$id)
              ->first();

        
     return view('zones.edit',compact('zone','districts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['district_id'] = $request->district_id;
        $data['note'] = $request->note;
        $data['status'] = $request->status ? '1' : '2';
        $updated = DB::table('zones')
                  ->where('id', $request->id)
                  ->update($data);
        return redirect()->route('zone.index')->withSuccess('Zone is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
