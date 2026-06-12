<?php

namespace Database\Seeders;

use App\Models\People;
use App\Models\Tasks;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    public function run(): void
    {
        // People::factory()->make()->toArray(); e salvar
        $people = People::factory()
            ->count(10)
            ->create();

        $tasks = Tasks::factory()
            ->count(30)
            ->create();

        foreach ($people as $person) {
            $person->tasks()->attach(
                $tasks
                    ->random(rand(1, 5))
                    ->pluck('id')
                    ->toArray()
            );
        }
        
    }
}