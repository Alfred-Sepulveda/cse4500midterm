<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{

    public function index()
    {
        $todos = Todo::all();
        return view('todos', compact('todos'));
    }


    public function create()
    {
        return view('todos.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'support' => 'required',
            'progress' => 'required',
        ]);
        $todo = Todo::create([
            'name' => $request->name,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'support' => $request->support,
            'progress' => $request->progress,
        ]);
        return $this->index();
        //return view('todos', compact('todos'));

    }


    public function show($id)
    {
        $todo= Todo::find($id);
        return view('todos.show',compact('todo'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
