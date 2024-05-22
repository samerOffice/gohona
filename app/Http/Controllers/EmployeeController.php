<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = DB::table('employees')->get();
        return view('employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sale_type = DB::table('employees')
        ->insertGetId([
        'emp_name'=>$request->emp_name,
        'designation'=>$request->designation,
        'joining_date'=>$request->joining_date,
        'father_name'=>$request->father_name,
        'mother_name'=>$request->mother_name,
        'mobile_number'=>$request->mobile_number,
        'nid_number'=>$request->nid_number,
        'present_address'=>$request->present_address,
        'permanent_address'=>$request->permanent_address,
        'birth_date'=>$request->birth_date,
        'blood_group'=>$request->blood_group,
        'nationality'=>$request->nationality,
        'marital_status'=>$request->marital_status,
        'religion'=>$request->religion,
        'gender'=>$request->gender,
        'profile_pic'=>$request->profile_pic,
        'emergency_contact_name'=>$request->emergency_contact_name,
        'emergency_contact_number'=>$request->emergency_contact_number,
        'emergency_contact_relation'=>$request->emergency_contact_relation
        ]);
    return redirect()->route('employee.index')->withSuccess('Employee is added successfully'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = DB::table('employees')
        ->where('id',$id)
        ->first();
     return view('employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['emp_name'] = $request->emp_name;
        $data['designation'] = $request->designation;
        $data['joining_date'] = $request->joining_date;
        $data['father_name'] = $request->father_name;
        $data['mother_name'] = $request->mother_name;
        $data['mobile_number'] = $request->mobile_number;
        $data['nid_number'] = $request->nid_number;
        $data['present_address'] = $request->present_address;
        $data['permanent_address'] = $request->permanent_address;
        $data['birth_date'] = $request->birth_date;
        $data['blood_group'] = $request->blood_group;
        $data['nationality'] = $request->nationality;
        $data['marital_status'] = $request->marital_status;
        $data['religion'] = $request->religion;
        $data['gender'] = $request->gender;
        $data['profile_pic'] = $request->profile_pic;
        $data['emergency_contact_name'] = $request->emergency_contact_name;
        $data['emergency_contact_number'] = $request->emergency_contact_number;
        $data['emergency_contact_relation'] = $request->emergency_contact_relation;

        $updated = DB::table('employees')
                  ->where('id', $request->id)
                  ->update($data);
        return redirect()->route('employee.index')->withSuccess('Employee information is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
