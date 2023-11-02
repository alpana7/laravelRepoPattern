<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Interface\TaskRepositoryInterface;

class TaskController extends Controller
{
    private TaskRepositoryInterface $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = $this->taskRepository->getAllTasks();
        dd($tasks);
        return view('tasks.index', ['tasks' =>  $tasks]);
    }

    
    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
       $data = $this->taskRepository->getTaskById($task);
        dd($data);
    }

   
}
