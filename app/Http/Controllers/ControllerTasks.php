<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\VerifyTasksRequest;
use App\Models\Tasks;

class ControllerTasks extends Controller
{
    public function index()
    {
        return response()->json(Tasks::all(), 200);
    }

    public function store(VerifyTasksRequest $request)
    {
        $ts = Tasks::create($request->validated());
        return response()->json($ts, 201);
    }

    public function update(VerifyTasksRequest $request, int $task)
    {
        Tasks::where('id', $task)->update($request->validated());
        return Tasks::whereId($task)->get();
    }

    public function show(Tasks $task)
    {
        return $task->load('people');
    }

    public function destroy(int $task)
    {
        Tasks::destroy($task);
        return response()->noContent();
    }
}
