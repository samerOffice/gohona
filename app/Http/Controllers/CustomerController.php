<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_role = Auth::user()->role_id;

            $menu_data = DB::table('menu_permissions')
                    ->where('role',$user_role)
                    ->first();
            $permitted_menus = $menu_data->menus;
            $permitted_menus_array = explode(',', $permitted_menus);     
        $customers = DB::table('customers')->get();
        return view('customers.index',compact('customers','permitted_menus_array'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user_role = Auth::user()->role_id;
        $menu_data = DB::table('menu_permissions')
                ->where('role',$user_role)
                ->first();
        $permitted_menus = $menu_data->menus;
        $permitted_menus_array = explode(',', $permitted_menus);

        $customer_categories = DB::table('customer_categories')->get();
        $districts = DB::table('districts')->get();
        return view('customers.create',compact('permitted_menus_array','customer_categories','districts'));
    }


    public function districtAndZoneDependancy(Request $request){

        $selectedDistrictId = $request->input('data');


        $zones = DB::table('zones')
                    ->where('district_id',$selectedDistrictId)
                    ->get();
  
      $str="<option value=''>-- Select --</option>";
      foreach ($zones as $zone) {
         $str .= "<option value='$zone->id'> $zone->name </option>";
         
      }
      echo $str;
      }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = DB::table('customers')
        ->insertGetId([
        'name'=>$request->name,
        'mobile_number'=>$request->mobile_number,
        'address'=>$request->address,
        'customer_category_id'=>$request->customer_category_id,
        'district_id'=>$request->district_id,
        'zone_id'=>$request->zone_id,
        'fb_name'=>$request->fb_name
        
        ]);
        return redirect()->route('customer.index')->withSuccess('Customer is added successfully'); 
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
