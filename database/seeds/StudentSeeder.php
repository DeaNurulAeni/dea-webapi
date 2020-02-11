<?php

use Illuminate\Database\Seeder;
use App\Student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       Student::create([
       		'nama' => 'Dea',
       		'jk' => 'P'
       ]);
       Student::create([
       		'nama' => 'Nurul',
       		'jk' => 'P'
       ]);
       Student::create([
       		'nama' => 'Aeni',
       		'jk' => 'P'
       ]);

         
    }
}
