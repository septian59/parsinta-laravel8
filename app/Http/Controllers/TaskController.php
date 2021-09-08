<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('id', 'desc')->get();

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {


        return view('tasks.create', [
            'task' => new Task,
            'submit' => 'Create'
        ]);
    }


    public function store(TaskRequest $request)
    {

        Task::create($request->all());

        return redirect('tasks');
    }

    public function edit(Task $task)
    {
        // $task = Task::where('id', $id)->first();
        // $task = Task::find($id);

        return view('tasks.edit', [
            'task' => $task,
            'submit' => 'Update'
        ]);
    }


    public function update(TaskRequest $request, $id)
    {
        Task::find($id)->update($request->all());


        return redirect('tasks');
    }

    public function destroy($id)
    {
        Task::find($id)->delete();
        return back();
    }
}
