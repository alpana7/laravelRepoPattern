<?php
namespace App\Repositories;

use App\Interface\TaskRepositoryInterface;
use App\Models\Task;

class TaskRepository implements TaskRepositoryInterface {

   /**
     * Retrieves all tasks.
     * @return array 
     */
    public function getAllTasks()
    {
        
        return Task::all();
    }
    /**
     * Retrive record by id
     * @param $id
     * @return mixed
     */

    public function getTaskById($task)
    {
        return $task;
    }
}