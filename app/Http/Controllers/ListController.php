<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lists;

class ListController extends Controller
{
    public function index(Lists $list)
     {
         return view('lists.index')->with(['lists'=> $list->get()]);
         
     }
}
