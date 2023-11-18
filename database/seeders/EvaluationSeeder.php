<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluations')->insert([
            'name' => '乙星',
            'hotpeppar' => 'なし',
            'tabelog' => '3.14',
            'google' => '4.3',
            'average' => '3.72',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
