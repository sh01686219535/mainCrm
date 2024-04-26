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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('company')->nullable();
            $table->string('position')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country');
            $table->string('website')->nullable();
            $table->string('description')->nullable();
            $table->string('status');
            $table->string('source');
            $table->unsignedBigInteger('sales_people_id');
            $table->foreign('sales_people_id')->references('id')->on('sales_people')->onDelete('cascade');
            $table->unsignedBigInteger('team_leader_id')->nullable();
            $table->foreign('team_leader_id')->references('id')->on('team_leaders')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
