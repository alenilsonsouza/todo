<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {

        $tasks = Task::all()->take(6);

        $categories = Category::all();

        $n_rest = 0;
        foreach($tasks as $task) {
            if(!$task->is_done) {
                $n_rest++;
            }
        }

        
        return view('home', [
            'tasks' => $tasks,
             'n_rest' => $n_rest,
             'categories' => $categories
            ]);
    }
}
