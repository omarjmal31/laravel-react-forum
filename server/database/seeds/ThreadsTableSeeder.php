<?php

use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Category::class, 5)->create();

        for($i = 0; $i < 20; $i++) {
             $thread = factory(\App\Models\Thread::class)->create([
                "category_id"   => rand(1, 5),
                "visits_count"  => rand(1, 100)
            ]);

             factory(\App\Models\Reply::class, rand(1, 5))->create(["thread_id" => $thread->id]);
        }

    }
}