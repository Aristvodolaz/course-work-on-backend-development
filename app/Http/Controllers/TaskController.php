<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; 
class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'description' => 'nullable',
                'user_id' => 'required|exists:users,id',
            ]);
    
            Task::create($request->all());
    
            return redirect()->route('tasks.index')->with('success', 'Задача успешно создана!');
        } catch (\Exception $e) {
            Log::error('Ошибка при сохранении задачи: ' . $e->getMessage());
            return redirect()->route('tasks.index')->with('error', 'Произошла ошибка при создании задачи.');
        }
    }
    
    
    

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Задача успешно обновлена!');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Задача успешно удалена!');
    }
}
