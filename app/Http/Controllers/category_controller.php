<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\category;

use Illuminate\Support\Facades\Auth;





class category_controller extends Controller
{
     public function index(){
       
        $categories = DB::select('select * from category', [1]);

        return view('admin/category/categories', ['category' => $categories]);
    }

    public function create(){
       return view('admin/category/create');
    }

    public function store(Request $request){

        $category = new category;

        $category->name = $request->name;
        $category->image = $request->image;
        $category->status = $request->status;
        $category->owned_by = $request->owned_by;

        $category->save();

        return redirect()->action('App\Http\Controllers\category_controller@index');
        
    }

    public function destroy($id)
    {
        $category = category::find($id);

        $category->delete();
        return redirect()->action('App\Http\Controllers\category_controller@index')->with('success','Dữ liệu xóa thành công.');
    }

    public function edit($id)
    {
        $category = category::findOrFail($id);
        return view('admin/category/update', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = category::find($id);
        $category->name = $request->name;
        $category->image = $request->image;
        $category->status = $request->status;
        $category->owned_by = $request->owned_by;

        $category->save();
        
        return redirect()->action('App\Http\Controllers\category_controller@index');
    }


}
