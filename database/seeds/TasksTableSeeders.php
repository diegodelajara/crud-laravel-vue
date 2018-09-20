<?php

use Illuminate\Database\Seeder;
use App\Tasks;

class TasksTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(Tasks::class, 5)->create();
    }
}
