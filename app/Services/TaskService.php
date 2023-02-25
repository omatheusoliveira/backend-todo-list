<?php

namespace App\Services;

use App\Models\Task;
use App\Models\User;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

use Exception;

class TaskService {

    public function createTask(Request $request){
        try {
           $task = new Task();
            
           $task->description = $request->description;
           $task->status = $request->status;
           $task->user_id = $request->user_id;

           $task->save();

           return response()->json($task, Response::HTTP_OK);

        } catch (Exception $ex) {
            return response()->json($ex, Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    public function listTasks()
    {
        try {

            $tasks = Task::get();

            foreach($tasks as $task){
                $task->user = User::find($task->user_id);
            }

            return response()->json($tasks, Response::HTTP_OK);

        } catch (Exception $ex) {

            return response()->json($ex, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function deleteTask(Request $request)
    {
        try {
            $id = $request->id;

            $task = Task::find($id);

            Task::where('id', $id)->delete($request->id);

            return response()->json($task, Response::HTTP_OK);
            
        } catch (Exception $ex) {

            return response()->json($ex, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function updateTask(Request $request)
    {
        try {
            $id = $request->id;
            $task = Task::find($id);

            $task->description = $request->description;
            $task->status = $request->status;
            $task->user_id = $request->user_id;

            $task->save();

            return response()->json($task, Response::HTTP_OK);
            
        } catch (Exception $ex) {

            return response()->json($ex, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}