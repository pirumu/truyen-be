<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
        ]);
    }
}
