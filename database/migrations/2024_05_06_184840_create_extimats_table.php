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
        Schema::create('extimats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->unsignedBigInteger('project_id')->nullable();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->string('estimate_date')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('status')->nullable();
            $table->string('currency')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('discount_type')->nullable();
            $table->string('tag')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('total')->nullable();
            $table->string('admin_note')->nullable();
            $table->string('client_note')->nullable();
            $table->string('term_condition')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extimats');
    }
};
