<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SaleTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sale_types = DB::table('sale_types')->get();                               
        return view('sale_types.index',compact('sale_types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sale_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sale_type = DB::table('sale_types')
        ->insertGetId([
        'name'=>$request->name,
        'status'=>$request->status ? '1' : '2'
        ]);
    return redirect()->route('sale_type.index')->withSuccess('Sale Type is added successfully'); 
    }

  

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sale_type = DB::table('sale_types')
        ->where('id',$id)
        ->first();
     return view('sale_types.edit',compact('sale_type'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['status'] = $request->status ? '1' : '2';
        $updated = DB::table('sale_types')
                  ->where('id', $request->id)
                  ->update($data);
        return redirect()->route('sale_type.index')->withSuccess('Sale Type is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
