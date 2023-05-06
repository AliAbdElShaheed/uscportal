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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('client_id')->unsigned();
            $table->double('total_price', 8, 2)->default(0);
            $table->boolean('status')->default(2);
            $table->enum('transportation', ['تروسيكل', 'Motorcycle موتوسيكل', 'Truck عربية نقل', 'Taxi', 'Car', 'Bicycle'])->nullable();
            $table->string('transportation_number')->nullable();
            $table->string('delivery_officer')->nullable();
            $table->string('notes')->nullable();
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
