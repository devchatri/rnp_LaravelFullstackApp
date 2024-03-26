<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuartiersTable extends Migration
{
    public function up()
    {
        Schema::create('quartiers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pachalik_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('quartiers');
    }
}
