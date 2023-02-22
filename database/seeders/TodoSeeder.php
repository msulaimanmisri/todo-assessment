<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Todo::factory(10)->create();
        $this->firstTask();
        $this->secondTask();
        $this->thirdTask();
    }

    public function firstTask()
    {
        Todo::create([
            'title' => 'Learn Rust',
            'description' => ''
        ]);
    }

    public function secondTask()
    {
        Todo::create([
            'title' => 'Learn React',
            'description' => ''
        ]);
    }

    public function thirdTask()
    {
        Todo::create([
            'title' => 'Learn Laravel API',
            'description' => ''
        ]);
    }
}
