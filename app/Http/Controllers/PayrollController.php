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
            'yearly_bonus_date' => $employeeInfo->yearly_bonus_date,
            'joining_month' => $joining_month,
            'per_day_salary' => $employeeInfo->per_day_salary
        ];

        return $data;
   
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
        $payroll = DB::table('payrolls')
        ->insertGetId([
        'emp_id'=>$request->employee,
        // 'salary_date'=>Carbon::now()->format('Y-m-d'),
        'salary_date'=>$request->salary_date,

        'joining_date'=>$request->joining_date,
        'per_day_salary'=>$request->per_day_salary,
        // 'total_bonus_day'=>'39',
        'total_bonus_day'=>$request->emp_total_bonus_day,

        'yearly_total_bonus_amount'=>$request->emp_total_bonus_amount,     
        'bonus_eligible_month'=>$request->bonus_eligible_month,
        'bonus_payable_month'=>$request->bonus_pay_month,
        'bonus_payable_amount'=>$request->bonus_pay_amount,
        'total_working_days'=>$request->total_working_day,
        'total_leave'=>$request->total_leave,
        'total_number_of_payable_days'=>$request->total_number_of_pay_day,
        'monthly_salary'=>$request->monthly_salary,
        'monthly_holiday_bonus'=>$request->monthly_holiday_bonus,
        'total_daily_allowance'=>$request->total_daily_allowance,
        'total_travel_allowance'=>$request->total_travel_allowance,
        'rental_cost_allowance'=>$request->rental_cost_allowance,
        'hospital_bill_allowance'=>$request->hospital_bill_allowance,
        'insurance_allowance'=>$request->insurance_allowance,
        'sales_commission'=>$request->sales_commission,
        'retail_commission'=>$request->retail_commission,
        'total_others'=>$request->total_others,
        'total_salary'=>$request->total_salary,
        'yearly_bonus'=>$request->yearly_bonus,
        'total_payable_salary'=>$request->total_payable_salary,
        'advance_less'=>$request->advance_less,
        'any_deduction'=>$request->any_deduction,
        'final_pay_amount'=>$request->final_pay_amount,
        'loan_advance'=>$request->loan_advance
        ]);


        $only_payroll = $request->all();
         // Filter out fields with values equal to zero
         $filteredData = array_filter($only_payroll, function($value) {
            return $value != 0;
        });

    
        // return response()->json(['filtered_data' => $filteredData]);
        dd($filteredData);



        return redirect()->route('payroll.index')->withSuccess('Payroll is added successfully'); 
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
