<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
{
    Schema::create('comments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('news_id')->constrained()->onDelete('cascade');
        $table->text('text');
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
