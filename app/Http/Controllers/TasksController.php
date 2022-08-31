<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\TasksRequest;
use Illuminate\Support\Facades\Storage;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\view\view
     */
    public function index()
    {
        $tasks = Tasks::orderBy('id', 'desc')->paginate(10);
        return view('admin.task', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\view\view
     */
    public function create()
    {
        return view('admin.task_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TasksRequest $request)
    {
        $task = new Tasks();
        $task->title = $request->title;
        $task->slug = Str::slug($request->title, '-');
        $task->description = $request->description;
        $task->status = $request->status;
        // image upload
        if ($request->file('image')) {
            $file = $request->image;
            $name = str::of($request->title)->slug() . '-' .$task->id.'.'.$file->extension();
            $task->image = $file->storePubliclyAs('public/task', $name);
        }
        // task save
        $task->save();
        session()->flash('success', 'Task Create Successfully');
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\view\view
     */
    public function show(Tasks $tasks)
    {
        $tasks = Tasks::find($tasks);
        return view('admin.task_single',compact('tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\view\view
     */
    public function edit($tasks_and_slug)
    {
        $task = $this->getTaskIdorSlug($tasks_and_slug);

        if (!$task) {
            session()->flash('error', 'Sorry, Task not found');
            return redirect()->route('task.index');
        }
        return view('admin.task_edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function update(TasksRequest $request, $tasks_and_slug)
    {
        // validation data
        $task = $this->getTaskIdorSlug($tasks_and_slug);
        if (!$task) {
            session()->flash('error', 'Sorry, Task not found');
            return redirect()->route('task.index');
        }

        $task->title = $request->title;
        $task->slug = Str::slug($request->title, '-');
        $task->description = $request->description;
        $task->status = $request->status;
        if ($request->image) {
            // delete old image
            if ($task->image) {
                Storage::delete($task->image);
            }
            // upload new image

            $file = $request->image;
            $name = str::of($request->title)->slug() . '-' .$task->id.'.'. $file->extension();
            $task->image = $file->storePubliclyAs('public/task', $name);
        }
        $task->update();
        // Message Return
        session()->flash('success', 'Task Update Successfully');
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy($tasks_and_slug)
    {
        // find first
        $task = $this->getTaskIdorSlug($tasks_and_slug);
        if (!$task) {
            session()->flash('error', 'Sorry, Task not found');
            return redirect()->route('task.index');
        }
        // delete image
        if ($task->image) {
            Storage::delete($task->image);
        }
        //delete data
        $task->delete();
        //session message

        session()->flash('success', 'Task Delete Successfully');
        return redirect()->route('task.index');
    }
    public function getTaskIdorSlug($tasks_and_slug)
    {
        if (is_numeric($tasks_and_slug)) {
            return $task = Tasks::find($tasks_and_slug);
        } else {
            return $task = Tasks::where('slug', $tasks_and_slug)->first();
        }
    }
}
