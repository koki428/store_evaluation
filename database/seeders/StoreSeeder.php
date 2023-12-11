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
            'hotpeppar' => 'なし',
            'tabelog' =>'3.14',
            'google' =>'4.3',
            'average' =>'3.72',
            'genre' => '鳥料理、居酒屋、ラーメン',
            'pay' => 'カード可（VISA、Master、JCB、AMEX）、電子マネー不可、ORコード決済不可',
            'close' =>'なし',
            'station' =>'栄駅から徒歩5分、伏見駅から徒歩8分、栄駅（名古屋）から548m',
            'budget' =>'¥4000〜¥4999',
            'parking' =>'なし',
            'image_url' =>'2395b695f8356def8dcb2d21d83e7273.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => '炭火焼 鰻のうな輝 名古屋本店',
            'address' => '愛知県名古屋市中区錦2-13-27 アゼット第3ビル 1F',
            'tell' => '050-5600-7987',
            'time' => '[月]11:00～15:00(L.O14:30)（夜は予約営業可能）
            [火～金]11:00～15:00(L.O 14:30)、17:00~22:00(L.O 21:30)
            [土]10:00～22:00
            [日]10:00～15:00(L.O14:30)（夜は予約営業可能）
            [祝]10:00～15:00(L.O14:30)（夜は予約営業可能）',
            'hotpeppar' => 'なし',
            'tabelog' =>'3.07',
            'google' =>'4.1',
            'average' =>'3.59',
            'genre' => 'うなぎ、海鮮、郷土料理',
            'pay' => 'カード可（VISA、Master、JCB、AMEX、Diners）
            電子マネー可（交通系電子マネー（Suicaなど）、 楽天Edy、nanaco、WAON、iD、QUICPay）
            QRコード決済可（PayPay、d払い、楽天ペイ、au PAY）',
            'close' =>'臨時休業あり',
            'station' =>'伏見駅1番出口から錦通り沿いに徒歩4分
            伏見駅から348m',
            'budget' =>'¥3000〜¥5999',
            'parking' =>'なし',
            'image_url' =>'2518492f6f65284ec1be7fbe020c73b2.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
