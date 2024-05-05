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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->unsignedBigInteger('sales_people_id');
            $table->foreign('sales_people_id')->references('id')->on('sales_people')->onDelete('cascade');
            $table->longText('billing_address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('country');
            $table->dateTime('invoice_date');
            $table->dateTime('due_date');
            $table->string('currency');
            $table->string('shipping_address')->nullable();
            $table->longText('admin_note')->nullable();
            $table->longText('client_note')->nullable();
            $table->longText('term_condition')->nullable();
            $table->double('total')->nullable();
            $table->string('invoice_no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
