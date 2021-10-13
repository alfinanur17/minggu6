<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710064',
            'name' => 'Alfina Nur A',
            'class' => 'MI 2E',
            'department' => 'MI',
            'phone_number' => '082154376954',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710035',
            'name' => 'Alvira Dewi Septyan',
            'class' => 'MI 2E',
            'department' => 'MI',
            'phone_number' => '085754376742',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710118',
            'name' => 'Arifatun Nisa',
            'class' => 'MI 2E',
            'department' => 'MI',
            'phone_number' => '089654376532',
        ]);

    }
}
