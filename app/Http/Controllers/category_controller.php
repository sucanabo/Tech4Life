<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\category;

use Illuminate\Support\Facades\Auth;





class category_controller extends Controller
{
    //index
    public function index(){
       
        $categories = category::latest()->paginate(5);
        return view('admin.category.index',compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    //show
    public function create()
    {
        return view('admin.category.create');
    }
    //delete
    public function destroy(category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')
            ->with('success', 'Category deleted successfully');
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

    public function edit($id)
    {
        $category = category::findOrFail($id);
        return view('admin.category.update', compact('category'));
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
