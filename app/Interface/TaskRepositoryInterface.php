<?php

namespace App\Interface;

interface TaskRepositoryInterface{
    
    // Get All Task
    public function getAlltasks();

    // Retrive the particular task based on taskId
    public function getTaskById($task);
    
}