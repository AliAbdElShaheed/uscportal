<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {


    public function up()
    {
        Schema::create('sub_navs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nav_menu_id')->unsigned();
            $table->json('name')->unique();
            $table->boolean('status')->default(0);
            $table->unsignedTinyInteger('priority');
            $table->string('href');
            $table->boolean('special')->default(0);
            $table->string('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // The DB Relation with nav menu link
            $table->foreign('nav_menu_id')->references('id')->on('navigation_menus')->onDelete('cascade');

            // Add a unique constraint for priority within the same nav_menu_id
            $table->unique(['nav_menu_id', 'priority']);


        });
    }


    public function down()
    {
        Schema::dropIfExists('sub_navs');
    }
};
