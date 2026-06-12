<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\VerifyPeopleRequest;
use App\Models\People;
class ControllerPeople extends Controller
{
    public function index()
    {
        return People::all();
    }

    public function store(VerifyPeopleRequest $request)
    {
        $people = People::create($request->validated());
        return response()
            ->json($people, 201);
    }

    public function update(int $person, VerifyPeopleRequest $request)
    {
        // $request->validated() garante que somente os dados validos sejam enviados
        People::whereId($person)->update($request->validated());
        return People::where('id', $person)->first();
    }

    public function show(People $person)
    {
        // load tradução: carregar
        // carregar as "tasks"
        return $person->load('tasks');
    }

    public function destroy(int $person)
    {
        People::destroy($person);
        return response()->json($person, 204);
    }
}