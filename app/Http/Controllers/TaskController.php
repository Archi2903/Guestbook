<?php

namespace App\Http\Controllers;

use App\Tasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function gettasks()
    {
        $tasks = new Tasks();
        return view('task.task', ['tasks' => $tasks->all()]);
    }

    public function formTask(Request $request)
    {
        $article = new Tasks();
        $article->tasks = $request->input('tasks');

        $article->save();

        return redirect()->route('tasks');
    }

    public function deleteTask($id)
    {
        Tasks::find($id)->delete();
        return redirect()->route('tasks')->with('success','Your task delete');
    }


}
