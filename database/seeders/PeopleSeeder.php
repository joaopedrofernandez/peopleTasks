<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    public function run(): void
    {
        // People::factory()->make()->toArray(); e salvar
        $person = People::factory()->count(10)->create();

        // $person->tasks()
        //     ->syncWithoutDetaching(
        //         [1, 4, 7]
        //     );
    }
}