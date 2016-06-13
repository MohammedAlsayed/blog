<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;

class taskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('tasks.index', compact("tasks"));
    }
   
}
