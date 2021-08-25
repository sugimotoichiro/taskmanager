<?php

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
     $param = [
        "id" => 1,
        "title" => "test",
        "body" => "make_DB",
    ];
    DB::table("tasks")->insert($param);
    }
}
