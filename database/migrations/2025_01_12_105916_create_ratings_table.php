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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->string('listings')->nullable();
            $table->string('categories')->nullable();
            $table->string('visitors')->nullable();
            $table->string('happy_client')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('ratings');
    }
};
