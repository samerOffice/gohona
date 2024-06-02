<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RoleAndPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $roles = DB::table('roles')->get();

        // dd($roles);
        return view('roles_and_permissions.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles_and_permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $supplier = DB::table('roles')
        ->insertGetId([
        'role_name'=>$request->role_name,
        'status'=>'1'
        ]);
    return redirect()->route('roles_and_permissions.index')->withSuccess('Role is added successfully'); 
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
        $role = DB::table('roles')
        ->where('id',$id)
        ->first();

      return view('roles_and_permissions.edit',compact('role'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['role_name'] = $request->role_name;
        $updated = DB::table('roles')
                  ->where('id', $request->id)
                  ->update($data);

        return redirect()->route('roles_and_permissions.index')->withSuccess('Role is updated successfully');
    }

    public function delete_role($id){

        $deleted = DB::table('roles')
                  ->where('id', $id)
                  ->delete();
        return redirect()->route('roles_and_permissions.index')->withSuccess('Role is deleted successfully');   
    }
}
