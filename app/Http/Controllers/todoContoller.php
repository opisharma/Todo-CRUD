<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class todoContoller extends Controller
{

    public function index(){
        $todos=Todo::all();
        $data=compact('todos');
        return view("welcome")->with($data);
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'work'=>'required',
            'dueDate'=>'required'
        ]);
        $todo=new Todo;
        $todo->name=$request['name'];
        $todo->work=$request['work'];
        $todo->dueDate=$request['dueDate'];
        $todo->save();

        //return redirect(route('home'));
        return redirect()->back()->with('message', 'Added Succesfully');
    }

    public function delete($id){
        Todo::find($id)->delete();
        // return redirect(route('home'));
        return redirect()->back()->with('message','Task Deleted Succesfully');
    }

    public function update($id){
        $todo=Todo::find($id);
        $data=compact('todo');
        return view('update')->with($data);
    }

    public function updateData(Request $request){
        $request->validate([
            'name'=>'required',
            'work'=>'required',
            'dueDate'=>'required'
        ]);
        $id=$request['id'];
        $todo=Todo::find($id);
        $todo->name=$request['name'];
        $todo->work=$request['work'];
        $todo->dueDate=$request['dueDate'];
        $todo->save();

        // return redirect(route('home'));
        return redirect()->back()->with('message', 'Data Updated Successfully');
    }
}
