<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Task::factory()->create([
            'name'=>'Estudar PHP',
            'complete'=>false
        ]);

        \App\Models\Task::factory()->create([
            'name'=>'Estudar Javascript',
            'complete'=>false
        ]);

        \App\Models\Task::factory()->create([
            'name'=>'Estudar MySql',
            'complete'=>false
        ]);
    }
}
