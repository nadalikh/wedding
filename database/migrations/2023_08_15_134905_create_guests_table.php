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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class)->constrained()->cascadeOnUpdate();
            $table->string('mobile')->unique();
            $table->integer('quantity')->nullable();
            $table->tinyInteger('withFamily')->nullable();
            $table->boolean('called')->default(false);
            $table->enum('from', ["bride", "groom"])->nullable();
            $table->boolean('sentSms')->default(false);
            $table->enum('gender', ["male", "female"])->default("male");
            $table->string('name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
