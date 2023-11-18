<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            'name' => '乙星',
            'address' => '愛知県名古屋市中区栄3-10-15',
            'tell' => '050-5590-4925',
            'time' => '18:00〜翌04:00',
            'evaluation_id' => 1,
            'genre' => '鳥料理・居酒屋・ラーメン',
            'pay' => 'カード可（VISA、Master、JCB、AMEX）、電子マネー不可、ORコード決済不可',
            'close' =>'なし',
            'station' =>'栄駅から徒歩5分、伏見駅から徒歩8分、栄駅（名古屋）から548m',
            'budget' =>'¥4000~¥4999',
            'parking' =>'なし',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
