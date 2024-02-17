<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\TodoModel;
use Livewire\Attributes\Rule;
use App\Http\Controllers\Todo;

class FormTodo extends Component
{
    public $input = '';

    #[Rule('required|min:3')]
    public $updateTodo ;

    public $idEditTodo ;

    public function todoEdit($id){
        $todo = TodoModel::find($id);
        $this->idEditTodo = $id;
        $this->updateTodo = $todo->todo;
    }
    
    public function update($id)
    {
        $this->validate();
        $dataTodo =[
            'id'=>$id,
            'todo'=>$this->updateTodo,
        ];
        Todo::update($dataTodo);
        $this->idEditTodo = null;
    }

    public function addTodo()
    {
        $dataTodo = $this->input;
        Todo::addTodo($dataTodo);
        $this->input = null;
    }

    public function deleteTodo($id){
        Todo::delete($id);
    }
    public function render()
    {
        return view('livewire.form-todo', [
            'todo' => TodoModel::where('todo', 'LIKE', '%' . $this->input . '%')->orderByDesc('id')->get()
        ]);
    }
}
