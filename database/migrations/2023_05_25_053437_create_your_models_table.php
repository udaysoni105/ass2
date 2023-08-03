<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYourModelsTable extends Migration
{
    public function up()
    {
        Schema::create('your_models', function (Blueprint $table) {
            $table->id();
            $table->string('attribute1');
            $table->integer('attribute2');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('your_models');
    }
}
