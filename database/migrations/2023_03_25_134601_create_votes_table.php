<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('text');
            $table->integer('positive');
            $table->integer('negative');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('votes');
    }
};
