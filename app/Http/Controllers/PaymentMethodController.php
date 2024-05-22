<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payment_methods = DB::table('payment_methods')->get();
        return view('payment_methods.index',compact('payment_methods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('payment_methods.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payment_method = DB::table('payment_methods')
        ->insertGetId([
        'name'=>$request->name,
        'under_type'=>$request->under_type,
        'status'=>$request->status ? '1' : '2'
        ]);
        return redirect()->route('payment_method.index')->withSuccess('Payment Method is added successfully'); 
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
        
        $payment_method = DB::table('payment_methods')
                        ->where('payment_methods.id',$id)
                        ->first();
     
     return view('payment_methods.edit',compact('payment_method'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['under_type'] = $request->under_type;
        $data['status'] = $request->status ? '1' : '2';
        $updated = DB::table('payment_methods')
                  ->where('id', $request->id)
                  ->update($data);
        return redirect()->route('payment_method.index')->withSuccess('Payment Method is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
