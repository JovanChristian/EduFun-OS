<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('articles', function (Blueprint $table) {
        $table->id();
        $table->foreignId('category_id')->constrained();
        $table->foreignId('writer_id')->constrained();
        $table->string('title');
        $table->string('slug');
        $table->text('content');
        $table->string('image')->nullable();
        $table->integer('views')->default(0);
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('articles');
    }
};