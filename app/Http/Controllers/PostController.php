<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
       
        $posts = post::latest()->paginate(5);
        return view('admin.posts.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    //show
    public function show(post $post)
    {
        return view('admin.posts.show',compact('post'));
    }
    //delete
    public function destroy(post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully');
    }
}
