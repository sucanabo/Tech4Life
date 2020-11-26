<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\post_image;

class image_controller extends Controller
{
    public function index(){
        $images = DB::select('select * from post_image', [1]);

        return view('admin/image/images', ['post_image' => $images]);
    }

    public function create(){
        return view('admin/image/create');
     }
 
     public function store(Request $request){
 
         $image = new post_image;

         $image->post_id = $request->post_id;
         $image->path = $request->path;
         $image->name = $request->name;
         $image->status = $request->status;

         $image->save();
 
         return redirect()->action('App\Http\Controllers\image_controller@index');
         
     }

    public function destroy($id)
    {
        $image = post_image::find($id);

        $image->delete();
        return redirect()->action('App\Http\Controllers\image_controller@index')->with('success','Dữ liệu xóa thành công.');
    }

    public function edit($id)
    {
        $image = post_image::findOrFail($id);
        return view('admin/image/update', compact('image'));
    }

    public function update(Request $request, $id)
    {
        
        $image = post_image::find($id);

         $image->post_id = $request->post_id;
         $image->path = $request->path;
         $image->name = $request->name;
         $image->status = $request->status;

         $image->save();
        
        return redirect()->action('App\Http\Controllers\image_controller@index');
    }
}
