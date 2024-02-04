<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lists;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Priority;

class ListController extends Controller
{
    public function index(Lists $lists)
     {
         $list = Lists::all();
         $data=['lists' => $list];
         return view('lists.index',$data)->with(['list'=> $lists->get()]);
         
         
     }
     
    public function show(Lists $lists)
    {
        return view('lists.show')->with(['list' => $lists]);
        
    }
    
    public function create(Category $category, Priority $priority)
    {
        return view('lists.create')->with(['categories' => $category->get(), 'priorities' => $priority->get()]);
    }
    
    public function todostore(Request $request, Lists $list)
    {
        $input = $request['list'];
        $input += ['user_id' => Auth::id()];
        $list->fill($input)->save();
        return redirect('/lists/'.$list->id);
    }
    
    public function edit(Lists $lists, Category $category, Priority $priority)
    {
        return view('lists.edit')->with(['categories' => $category->get(), 'priorities' => $priority->get(), 'list' => $lists]);
    }
    
    public function update(Request $request, Lists $list)
    {
        $input_list = $request['list'];
        $input_list += ['user_id' => Auth::id()];
        $list->fill($input_list)->save();
        return redirect('/lists/' . $list->id);
    }
    
    public function delete(Lists $lists)
      {
          $lists->delete();
          return redirect('/');
      }
}
