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
            'name' => '炭火焼 鰻のうな輝 名古屋本店',
            'address' => '愛知県名古屋市中区錦2-13-27 アゼット第3ビル 1F',
            'tell' => '050-5600-7987',
            'time' => '[月]11:00～15:00(L.O14:30)（夜は予約営業可能）
            [火～金]11:00～15:00(L.O 14:30)、17:00~22:00(L.O 21:30)
            [土]10:00～22:00
            [日]10:00～15:00(L.O14:30)（夜は予約営業可能）
            [祝]10:00～15:00(L.O14:30)（夜は予約営業可能）',
            'hotpeppar' => '0',
            'tabelog' =>'3.1',
            'google' =>'4.1',
            'average' =>'3.6',
            'genre' => 'うなぎ、海鮮、郷土料理',
            'pay' => 'カード可（VISA、Master、JCB、AMEX、Diners）
            電子マネー可（交通系電子マネー（Suicaなど）、 楽天Edy、nanaco、WAON、iD、QUICPay）
            QRコード決済可（PayPay、d払い、楽天ペイ、au PAY）',
            'close' =>'臨時休業あり',
            'station' =>'伏見駅1番出口から錦通り沿いに徒歩4分
            伏見駅から348m',
            'budget' =>'¥3000〜¥5999',
            'parking' =>'なし',
            'image_url1' =>'https://res-console.cloudinary.com/dyf8eku1l/thumbnails/v1/image/upload/v1702794987/MjUxODQ5MmY2ZjY1Mjg0ZWMxYmU3ZmJlMDIwYzczYjJfb3ZhZHdn/grid_landscape',
            'image_url2' =>'https://res-console.cloudinary.com/dyf8eku1l/thumbnails/v1/image/upload/v1704101885/ZmUxNGE1YjNmODA3YmMyZGYzZmVhYTg5MTIyNTM3NjZfc2xuczlw/grid_landscape',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
