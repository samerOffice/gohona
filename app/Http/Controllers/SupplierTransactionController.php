<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon;

class SupplierTransactionController extends Controller
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

    $supplier_transactions = DB::table('supplier_transactions')
                ->leftJoin('suppliers','supplier_transactions.supplier_id','suppliers.id')
                ->select('supplier_transactions.*','suppliers.name as supplier_name', 'suppliers.mobile_no as supplier_mobile_no' )
                ->get();

    return view('supplier_transactions.index',compact('supplier_transactions','permitted_menus_array'));
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

        $suppliers = DB::table('suppliers')->get();
       
        return view('supplier_transactions.create',compact('permitted_menus_array','suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer_transaction = DB::table('supplier_transactions')
        ->insertGetId([
        'transaction_date'=>Carbon::now()->toDateString(),
        'reference'=>$request->reference,
        'supplier_id'=>$request->supplier_id,
        'description'=>$request->description,
        'bill_amount'=>$request->bill_amount,
        'paid_amount'=>$request->paid_amount,
        'due_amount'=>$request->due_amount
        
        ]);
        return redirect()->route('supplier_transaction.index')->withSuccess('Supplier Transaction is added successfully'); 
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
