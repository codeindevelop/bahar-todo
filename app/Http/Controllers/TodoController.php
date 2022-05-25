<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    
    // For show all data in table
    public function index(){

        $list = Todo::all();

        return $list ;

    }

        // For create data in db from request
    public function store(Request $request){


        $todo = new Todo([
            'todo_name' => $request->todo_name,
            'todo_time' => $request->todo_time,
            'done' => $request->done,
        ]);


        $todo->save();

        return 'todo has ben created successful!';



    }

    public function show(){

    }

    public function update(){

    }

    public function destroy(){

    }


}
