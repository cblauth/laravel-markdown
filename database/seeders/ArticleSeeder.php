<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => "test title",
            'summary' => "test summary",
            'body' => "test body",
        ]);
    }
}

