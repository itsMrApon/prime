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
            $table->string('moto');
            $table->string('tag1');
            $table->string('tag2');
            $table->string('tag3');
            $table->string('tag4');
            $table->string('tag5');
            $table->mediumText('description');
            $table->string('user');
            $table->mediumText('benefit');
            $table->double('baseprice');
            $table->double('standerdprice');
            $table->double('premiumprice');
            $table->string('plan1');
            $table->string('plan2');
            $table->string('plan3');
            $table->string('plan4');
            $table->string('plan5');
            $table->string('plan6');
            $table->string('plan7');
            $table->string('plan8');
            $table->string('plan9');
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
