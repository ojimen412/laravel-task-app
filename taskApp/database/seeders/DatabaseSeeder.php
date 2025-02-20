<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Task::create([

'task_name' => 'Take out trash',
'task_location' => 'Kitchen',
'time_complexity' => 1, // (1 => ~10 min, 2 => ~30 min, etc.)
'materials_required'=> 'Trash bags',
'deadline' => '2025-02-20 10:00:00',
'priority' => 2, // (1 => low, 2 => medium, 3 => high)
'category' => 'chores'
]);
 Task::create([

'task_name' => 'Prepare meeting Presentation',
'task_location' => 'Office',
'time_complexity' => 3, // (1 => ~10 min, 2 => ~30 min, etc.)
'materials_required'=> 'Laptop',
'deadline' => '2025-02-21 12:00:00',
'priority' => 3, // (1 => low, 2 => medium, 3 => high)
'category' => 'Work'
]);
 Task::create([

'task_name' => 'Grocery Shopping',
'task_location' => 'Supermarket',
'time_complexity' => 3, // (1 => ~10 min, 2 => ~30 min, etc.)
'materials_required'=> 'Wallet',
'deadline' => '2025-02-21 10:00:00',
'priority' => 2, // (1 => low, 2 => medium, 3 => high)
'category' => 'chores'
]);
 Task::create([

'task_name' => 'Take out trash',
'task_location' => 'Kitchen',
'time_complexity' => 1, // (1 => ~10 min, 2 => ~30 min, etc.)
'materials_required'=> 'Trash bags',
'deadline' => '2025-02-20 10:00:00',
'priority' => 2, // (1 => low, 2 => medium, 3 => high)
'category' => 'chores'
]);

// add another Task::create([]); array for each item to seed
    }
}
