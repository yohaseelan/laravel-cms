<?php

use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            App\Grade::create([
                'name'=>'6A'
            ]);
            App\Grade::create([
                'name'=>'6B'
            ]);
            App\Grade::create([
                'name'=>'6C'
            ]);
            App\Grade::create([
                'name'=>'6D'
            ]);
            App\Grade::create([
                'name'=>'7A'
            ]);
            App\Grade::create([
                'name'=>'7B'
            ]);
            App\Grade::create([
                'name'=>'7C'
            ]);
            App\Grade::create([
                'name'=>'8A'
            ]);
            App\Grade::create([
                'name'=>'8B'
            ]);
            App\Grade::create([
                'name'=>'8C'
            ]);
    }
}
