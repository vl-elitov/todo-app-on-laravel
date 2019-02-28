<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Todo::query()->orderBy('due')->get();
        return view('todo.index')->with('tasks', $tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'text' => 'required|string|max:255',
            'body' => 'required',
            'due' => 'required|string|max:255',
        ]);
        $task = new Todo();
        $task->text = $request->input('text');
        $task->body = $request->input('body');
        $task->due = $request->input('due');
        $task->save();
        return redirect('/')->with('success', 'Task added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Todo::find($id);
        return view('todo.show')->with('task', $task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Todo::find($id);
        return view('todo.edit')->with('task', $task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'text' => 'required|string|max:255',
            'body' => 'required',
            'due' => 'required|string|max:255',
        ]);
        $task = Todo::find($id);
        $task->text = $request->input('text');
        $task->body = $request->input('body');
        $task->due = $request->input('due');
        $task->save();
        return redirect('/')->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
