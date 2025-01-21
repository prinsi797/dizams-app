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
        Schema::create('resume_packages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('resume_count');
            $table->decimal('original_price', 8, 2);
            $table->decimal('discounted_price', 8, 2);
            $table->decimal('per_resume_price', 8, 2);
            $table->string('modal_type'); // 'single', 'bulk12', 'bulk35', etc.
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('resume_packages');
    }
};