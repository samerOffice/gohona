<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = DB::table('employees')->get();
        return view('payrolls.index',compact('employees'));
    }

    public function employee_details_dependancy(Request $request){
        $selectedEmployeeId = $request->input('data');
        $employeeInfo = DB::table('employees')
                    ->where('id',$selectedEmployeeId)
                    ->first();

        $joining_date = $employeeInfo->joining_date;
        $joining_month = Carbon::parse($joining_date)->format('m');
  
        $data = [
            'joining_date' => $employeeInfo->joining_date,
            'joining_month' => $joining_month,
            'per_day_salary' => $employeeInfo->per_day_salary
        ];

    return $data;
    // $per_day_salary = $employeeInfo->per_day_salary;
    // $joining_date = $employeeInfo->joining_date;
    //   echo $joining_date;
    //   echo $per_day_salary;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
