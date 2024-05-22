<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use DB;

class ProductCategoryController extends Controller
{
    public function index(){
        $product_categories = DB::table('product_categories')->get();                               
        return view('product_categories.index',compact('product_categories'));
    }

    public function add_product_category(){
        return view('product_categories.create');
    }

    public function submit_product_category(Request $request){

                $request->validate([
                    'product_category_name' => 'required'
                ]);
                $product_category = new ProductCategory();
                $product_category->product_category_name = $request->product_category_name;
                $product_category->save();

                return redirect()->route('product_category_list')->withSuccess('Product Category is created successfully');
        
    }

    public function edit_product_category($id){
        $product_category = DB::table('product_categories')
                 ->where('id',$id)
                 ->first();

        return view('product_categories.edit',compact('product_category'));

    }

    public function update_product_category(Request $request){

        $data = array();
        $data['product_category_name'] = $request->product_category_name;
        $updated = DB::table('product_categories')
                  ->where('id', $request->id)
                  ->update($data);

        return redirect()->route('product_category_list')->withSuccess('Product Category is updated successfully');
       

    }

    public function delete_product_category($id){
        $deleted = DB::table('product_categories')->where('id', $id)->delete();
        return redirect()->route('product_category_list');
    }
}
