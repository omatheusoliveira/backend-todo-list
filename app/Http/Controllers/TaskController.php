<?php

namespace App\Http\Controllers;


use App\Services\TaskService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $service;

    public function __construct(TaskService $taskService)
    {
        $this->service = $taskService;
    }

    public function create(Request $request)
    {
        return $this->service->createTask($request);
    }

    public function list()
    {
        return $this->service->listTasks();
    }

    public function delete(Request $request)
    {
        return $this->service->deleteTask($request);
    }

    public function update(Request $request)
    {
        return $this->service->updateTask($request);
    }
}
