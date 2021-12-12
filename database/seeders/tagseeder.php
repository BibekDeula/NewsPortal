<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class tagseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'id'=>1,
            'tagName'=>'bibek',
            'slug'=>'hello',
            'isTrending'=>1,
            'isVisible'=>1



        ]);
    }
}
