<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToServicesAndSubcategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable();
        });

        Schema::table('subcategories', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable();
        });
    }

    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('subcategories', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
