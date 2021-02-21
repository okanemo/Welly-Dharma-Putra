<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_projects_category')->insert(array(
            array(
                'name'=>'PHP'
            ),
            array(
                'name'=>'React'
            ),
            array(
                'name'=>'HTML/CSS'
            ),
            array(
                'name'=>'Python'
            ),
            array(
                'name'=>'MySQL'
            ),
            array(
                'name'=>'MongoDB'
            ),

        ));
    }
}
