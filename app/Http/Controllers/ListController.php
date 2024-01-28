<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lists;

class ListController extends Controller
{
    public function index(Lists $list)
     {
         $lists = Lists::all();
         $data=['lists' => $lists];
         return view('lists.index',$data)->with(['lists'=> $list->get()]);
         
         
     }
    public function show(Lists $lists)
    {
        return view('lists.show')->with(['list' => $lists]);
        
    }
}
