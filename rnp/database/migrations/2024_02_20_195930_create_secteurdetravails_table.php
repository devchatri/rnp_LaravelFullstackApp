<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecteurdetravailsTable extends Migration
{
    public function up()
    {
        Schema::create('secteurdetravails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('typedetravail_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('secteurdetravails');
    }
}
