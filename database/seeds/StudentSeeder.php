<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Student::create([

            'first_name'=>'yoha',
            'last_name'=>'seelan',
            'grade_id'=>'1'
        ]);
        App\Student::create([

            'first_name'=>'muralee',
            'last_name'=>'sangee',
            'grade_id'=>'3'
        ]);
        App\Student::create([

            'first_name'=>'thuvi',
            'last_name'=>'siva',
            'grade_id'=>'4'
        ]);
        App\Student::create([

            'first_name'=>'kokilan',
            'last_name'=>'balan',
            'grade_id'=>'5'
        ]);
        App\Student::create([

            'first_name'=>'vathan',
            'last_name'=>'yoges',
            'grade_id'=>'3'
        ]);
    }
}
