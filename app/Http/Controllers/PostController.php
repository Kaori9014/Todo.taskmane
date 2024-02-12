<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Priority;
use App\Models\Activity;

class PostController extends Controller
{
    public function index(Post $post)
     {
         $oldactivities = $post->get();
         $oldtodos = $oldactivities->where('category_id', 1)->sortBy('updated_id');
         $oldtasks = $oldactivities->where('category_id', 2)->sortBy('updated_id');
         $data=['completes' => $post];
         return view('complete.index',$data)->with(['oldtodos'=> $oldtodos, 'oldtasks' => $oldtasks]);
     }
    public function show(Post $post)
    {
        return view('complete.show')->with(['post' => $post]);
        
    }
    public function create(Activity $activity)
    {
        return view('complete.create')->with(['activity' => $activity]);
    }
    public function store(Request $request , Post $post)
    {
        $input = $request['post'];
        $input += ['user_id' => Auth::id()];
        $post->fill($input)->save();
        return redirect('/listed');
    }
    public function mypost(Post $post)
    {
         $posts = $post->where('user_id', Auth::id())->get();
         $todoposts = $posts->where('category_id', 1)->sortBy('updated_id');
         $taskposts = $posts->where('category_id', 2)->sortBy('updated_id');
         $data=['completes' => $post];
        return view('complete.acheave', $data)->with(['todoposts' => $todoposts , 'taskposts' => $taskposts]);
    }
}
