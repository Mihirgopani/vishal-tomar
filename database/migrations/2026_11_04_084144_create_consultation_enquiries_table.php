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
        Schema::create('consultation_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('reference_id', 32)->unique();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('practice_area');
            $table->string('court_forum')->nullable();
            $table->text('message');
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->string('status', 30)->default('new');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_enquiries');
    }
};
