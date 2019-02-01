<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Post::class)->times(5)->create(['admin_id' => 1]);
        factory(\App\Post::class)->times(5)->create();
    }
}
