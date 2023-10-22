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
        Schema::create('navigation_menus', function (Blueprint $table) {
            $table->id();
            $table->json('name')->unique();
            $table->boolean('status')->default(0);
            $table->unsignedTinyInteger('priority')->unique();
            $table->string('href');
            $table->boolean('special')->default(0);
            $table->string('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('navigation_menus');
    }
};
