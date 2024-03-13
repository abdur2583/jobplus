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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('full_name', 100)->nullable();
            $table->string('mother_name', 100)->nullable();
            $table->string('father_name', 100)->nullable();
            $table->string('date_of_birth', 100)->nullable();
            $table->string('blood_group', 100)->nullable();
            $table->string('social_id', 100)->nullable();
            $table->string('passport_no', 100)->nullable();
            $table->string('cell_no', 100)->nullable();
            $table->string('emergency_contact_no', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('whatsapp', 100)->nullable();
            $table->string('linked_in', 100)->nullable();
            $table->string('facebook', 100)->nullable();
            $table->string('github', 100)->nullable();
            $table->string('behance', 100)->nullable();
            $table->string('portfolio', 100)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
