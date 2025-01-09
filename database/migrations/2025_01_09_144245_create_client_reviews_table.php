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
    public function up() {
        Schema::create('client_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('image'); // Client's image path
            $table->string('name');
            $table->string('location');
            $table->text('description');
            $table->unsignedTinyInteger('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('client_reviews');
    }
};
