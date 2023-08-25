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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email');
            $table->string('fullname');
            $table->string('hash');

            $table->string('message')->default(null)->nullable();
            $table->boolean('accepted')->default(false);
            $table->integer('guests')->default(1);
            $table->integer('infants')->default(0);
            $table->integer('infants_age')->default(0);
            $table->boolean('vegan')->default(false);
            $table->string('food_restriction')->default(null)->nullable();
            $table->boolean('after_party')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
