<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Priority;

class ActivityController extends Controller
{
    public function index(Activity $activity)
     {
         $todos = Activity::where('category_id', 1)->orderBy('priority_id','ASC')->get();
         $tasks = Activity::where('category_id', 2)->orderBy('deadline','DESC')->get();
         $data=['activities' => $activity];
         return view('activities.index',$data)->with(['todos'=> $todos, 'tasks' => $tasks]);
         
         
     }
     
    public function show(Activity $activity)
    {
        return view('activities.show')->with(['activity' => $activity]);
        
    }
    
    public function create(Category $category, Priority $priority)
    {
        return view('activities.create')->with(['categories' => $category->get(), 'priorities' => $priority->get()]);
    }
    
    public function todostore(Request $request, Activity $activity)
    {
        $input = $request['activity'];
        $input += ['user_id' => Auth::id()];
        $activity->fill($input)->save();
        return redirect('/lists/'.$activity->id);
    }
    
    public function edit(Activity $activity, Category $category, Priority $priority)
    {
        return view('activities.edit')->with(['categories' => $category->get(), 'priorities' => $priority->get(), 'activity' => $activity]);
    }
    
    public function update(Request $request, Activity $activity)
    {
        $input_activity = $request['activity'];
        $input_activity += ['user_id' => Auth::id()];
        $activity->fill($input_activity)->save();
        return redirect('/lists/' .$activity->id);
    }
    
    public function delete(Activity $activity)
      {
          $activity->delete();
          return redirect('/');
      }
    
}
