<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->json('title')->unique();
            $table->json('content');
            $table->string('image')->default('default.png');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('location')->nullable();
            $table->string('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // The DB Relation with Categories
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }


    public function down()
    {
        Schema::dropIfExists('events');
    }
};
