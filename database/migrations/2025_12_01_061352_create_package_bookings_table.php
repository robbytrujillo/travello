<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('package_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('proof');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('package_tour_id')->constrained()->onDelete('cascade');
            $table->foreignId('package_bank_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('quantity'); // 0 1 2 3
            $table->unsignedBigInteger('total_amount'); // 0 1 2 3
            $table->unsignedBigInteger('insurance'); // 0 1 2 3
            $table->unsignedBigInteger('tax'); // 0 1 2 3
            $table->unsignedBigInteger('sub_total'); // 0 1 2 3
            $table->boolean('is_paid'); // true or false
            $table->date('start_date');
            $table->date('end_date');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_bookings');
    }
};