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

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|max:255',
        ]);

        auth()->user()->publish(
            new Task(request(['name']))
        );
        
        return redirect()->back();        
    }

    public function destroy(Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();
        
        return redirect()->back();
    }
}
