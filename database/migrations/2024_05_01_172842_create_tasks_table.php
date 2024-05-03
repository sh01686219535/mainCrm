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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->unsignedBigInteger('lead_id');
            $table->foreign('lead_id')->references('id')->on('leads')->onDelete('cascade');
            $table->string('priority');
            $table->dateTime('start_date');
            $table->dateTime('due_date');
            $table->string('status');
            $table->unsignedBigInteger('sales_people_id');
            $table->foreign('sales_people_id')->references('id')->on('sales_people')->onDelete('cascade');
            $table->unsignedBigInteger('team_leader_id')->nullable();
            $table->foreign('team_leader_id')->references('id')->on('team_leaders')->onDelete('cascade');
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
