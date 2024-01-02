<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //画像のパス
        //$imagePath = storage_path('2518492f6f65284ec1be7fbe020c73b2.jpg');
        
        // Cloudinaryに画像をアップロード
        //$cloudinaryResponse = Cloudinary::upload($imagePath);

        // アップロードが成功したら、Cloudinaryから返される情報を取得
        //$publicId = $cloudinaryResponse->getPublicId();
        //$url = $cloudinaryResponse->getSecurePath();
        
        $this->call(StoreSeeder::class);
        //$this->call(EvaluationSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
