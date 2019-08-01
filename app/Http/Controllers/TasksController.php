<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|max:255',
        ]);


        $request->user()->tasks()->create([
            'name' => request('name')
        ]);

        return redirect()->back();        
    }

    public function destroy(Task $task)
    {
        $task->delete();
        
        return redirect()->back();
    }
}
