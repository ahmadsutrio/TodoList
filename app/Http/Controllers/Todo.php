<?php

namespace App\Http\Controllers;

use App\Models\TodoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Todo extends Controller
{
    public function tampil(){
        return view('beranda',[
            'title'=>'Todo',
        ]);
    }

    public static function addTodo($pesanTodo){

        $validator = Validator::make(['todo' => $pesanTodo], [
            'todo' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            session()->flash('todo-gagal-ditambahkan', 'Task was successful!');
        } else {
            TodoModel::create([
                'todo' => $pesanTodo
            ]);
        }
        
    }

    public static function delete($id){
        TodoModel::find($id)->delete();
    }
    public static function update($data){
        $dataTodo = TodoModel::find($data['id']);
        $dataTodo->todo = $data['todo'];
        $validator = Validator::make(['todo' => $dataTodo['todo']], [
            'todo' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            session()->flash('todo-gagal-diedit', 'Task was successful!');
        } else {
            $dataTodo->update([
                'todo' => $dataTodo['todo'],
            ]);
            
        }
    }
}
