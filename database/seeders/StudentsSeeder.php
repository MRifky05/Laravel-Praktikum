<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentsSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Muhammad Rifky',
                'student_id_number' => 'F55123091',
                'email' => 'Rifky@gmail.com',
                'phone_number' => '6281243060292',
                'birth_date' => '2005-02-02',
                'gender' => 'Male',
                'status' => 'Active',
                'major_id' => 1,
            ],
        ]);
    }
}