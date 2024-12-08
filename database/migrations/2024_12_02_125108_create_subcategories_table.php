<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained()->onDelete('cascade'); // Links to subcategories
            $table->string('name');
            $table->string('route');
            $table->string('tags');
            $table->string('moto');
            $table->string('qoute1');
            $table->string('qoute2');
            $table->string('qoute3');
            $table->string('qoute4');
            $table->string('qoute5');
            $table->mediumText('description');
            $table->string('benefits');
            $table->mediumText('description2');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategories');
    }
}
