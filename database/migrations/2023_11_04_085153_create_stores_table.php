<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('address',200);
            $table->string('tell',50);
            $table->string('time',300);
            $table->string('hotpeppar',10);
            $table->string('tabelog',10);
            $table->string('google',10);
            $table->string('average',10);
            $table->string('genre',200);
            $table->string('pay',200);
            $table->string('close',50);
            $table->string('station',300);
            $table->string('budget',200);
            $table->string('parking',200);
            $table->string('image_url1')->default('https://res-console.cloudinary.com/dyf8eku1l/thumbnails/v1/image/upload/v1704101172/bm9faW1hZ2Vfa3NxNHk5/grid_landscape');
            $table->string('image_url2')->default('https://res-console.cloudinary.com/dyf8eku1l/thumbnails/v1/image/upload/v1704101172/bm9faW1hZ2Vfa3NxNHk5/grid_landscape');
            $table->string('image_url3')->default('https://res-console.cloudinary.com/dyf8eku1l/thumbnails/v1/image/upload/v1704101172/bm9faW1hZ2Vfa3NxNHk5/grid_landscape');
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
};
