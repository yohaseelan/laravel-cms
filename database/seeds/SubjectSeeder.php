<?php

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // App\Subject::create([
        //     'subject_name'=>'maths'
        // ]);
        // App\Subject::create([
        //     'subject_name'=>'Tamil'
        // ]);
        // App\Subject::create([
        //     'subject_name'=>'English'
        // ]);
        Factory(App\Subject::class,20)->create();
        
    }
}
