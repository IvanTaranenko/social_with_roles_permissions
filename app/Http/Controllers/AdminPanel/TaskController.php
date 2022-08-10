<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::orderBy('created_at','desc')->get();;

        return view('admin.tasks.index',compact('tasks'));
    }


    public function create()
    {
        return view('admin.tasks.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index')
            ->with('success','Task created successfully.');
    }



    public function show(Task $task)
    {
        return view('admin.tasks.show',compact('task'));
    }


    public function edit(Task $task)
    {
        return view('admin.tasks.edit',compact('task'));
    }


    public function update(Request $request, Task $task)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')
            ->with('success','Task updated successfully');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')
            ->with('success','Task deleted successfully');
    }
}
