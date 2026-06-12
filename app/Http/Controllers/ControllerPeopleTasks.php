<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\Tasks;
use Illuminate\Http\Request;

class ControllerPeopleTasks extends Controller
{
    public function syncPeopleTask(Request $request, People $person)
    {
        // syncWithoutDetaching => Sincronizar sem desanexar 
        // associe essas tarefas à pessoa mas não remova as associações que já existem
        $person->tasks()
            ->syncWithoutDetaching(
                $request->tasks_id
            );

        return response()
            ->json(['message' => "Sncy with success"]);
    }

    public function delete(Request $request, People $person)
    {
        // O $person é a pessoa de quem será removida a tarefa
        // Logica a se pensar -> [vou remover as tarefas da pessoa($person) de id -> passados pelo $task_ids que pode ser um array ou ini]
        // detach traducao "separar" | -> remove registros da pivot
        $person->tasks()
            ->detach(
                $request->task_ids
            );

        return response()
            ->json(['message' => "Desynchronization with success"]);
    }

    public function peopleTasks(People $person)
    {
        return $person->tasks;
    }

    public function tasksPeople(Tasks $task)
    {
        return $task->people;
    }
}