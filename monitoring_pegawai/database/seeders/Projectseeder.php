<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Projectseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'project_name' => 'pembuatan si keuangan',
            'client' => 'multi idea',
            'image' => 'foto',
            'name' => 'syarbini',
            'email' => 'syarbini lucky',
            'start' => '1 januari 2023',
            'end' => '20 januari 2023',
            'progres' => '90%',
         
            
        ]);
    }
}
