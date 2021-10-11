<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function up()
    {
        DB::table('students')->insert([
            'nim' => '2031710064',
            'name' => 'Alfina Nur A',
            'class' => 'MI 2E',
            'department' => 'MI',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710035',
            'name' => 'Alvira Dewi Septyan',
            'class' => 'MI 2E',
            'department' => 'MI',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710118',
            'name' => 'Arifatun Nisa',
            'class' => 'MI 2E',
            'department' => 'MI',
        ]);
    }
}
