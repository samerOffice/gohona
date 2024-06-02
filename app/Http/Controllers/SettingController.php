<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = DB::table('settings')->first();
        
        return view('settings.index',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $settings = DB::table('settings')
        ->insertGetId([
        'company_name'=>$request->company_name,
        'company_cell'=>$request->company_cell,
        'bin'=>$request->bin,
        'jakat'=>$request->jakat
        ]);
        return redirect()->route('settings.index'); 
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['company_name'] = $request->company_name;
        $data['company_cell'] = $request->company_cell;
        $data['bin'] = $request->bin;
        $data['jakat'] = $request->jakat;

        $updated = DB::table('settings')
                  ->where('id', $request->id)
                  ->update($data);

        $settings = DB::table('settings')->first();

        return view('settings.index',compact('settings'))->withSuccess('Settings updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
