<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BookingTermsAndConditionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking_terms_and_conditions = DB::table('booking_terms_and_conditions')->first();
        
        return view('booking_terms_and_conditions.index',compact('booking_terms_and_conditions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('booking_terms_and_conditions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $booking_terms_and_conditions = DB::table('booking_terms_and_conditions')
        ->insertGetId([
        'terms'=>$request->terms,
        ]);
        return redirect()->route('booking_terms_and_conditions.index'); 
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
        $data['terms'] = $request->terms;

        $updated = DB::table('booking_terms_and_conditions')
                  ->where('id', $request->id)
                  ->update($data);

        $booking_terms_and_conditions = DB::table('booking_terms_and_conditions')->first();

        return view('booking_terms_and_conditions.index',compact('booking_terms_and_conditions'))->withSuccess('Booking Terms and Conditions updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
