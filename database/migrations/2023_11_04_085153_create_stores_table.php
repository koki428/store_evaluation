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
            $table->string('time',50);
            $table->foreignId('evaluation_id')->constrained();
            $table->string('genre',200);
            $table->string('pay',200);
            $table->string('close',50);
            $table->string('station',200);
            $table->string('budget',200);
            $table->string('parking',100);
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
