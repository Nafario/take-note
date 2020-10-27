<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    
        
    
    public function index(){
        $todo = Todo::latest()->paginate(6);
        return view('home.index',[
            'todos' => $todo
        ]);
    }
    public function show($id){
        $todo = Todo::findOrFail($id);
        return view('home.show', [
            'todo' => $todo
        ]);
    }
    public function create(){
        return view('home.create');
    }
    public function store(){
        $validate = request()->validate([
            'title' => ['required','string', 'max:100'],
            'content' => ['required','string','max:400'],
            'description'=> ['required','string','max:255'],
            'end_day' => ['string']
        ]);
        Todo::create($validate);
        return redirect('/');
    }
    public function edit(Todo $todo){
        return view('home.edit', compact('todo'));
    }
    public function update(Todo $todo){
        $validated = request()->validate([
            'title' => ['string', 'max:100'],
            'content' => ['string','max:400'],
            'description'=> ['string','max:255'],
            'end_day' => ['string']
        ]);
        $todo->update($validated);
        return redirect($todo->id);
    }
    public function destroy($id){
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect('/');
    }
}