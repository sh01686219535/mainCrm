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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fathername')->nullable();
            $table->string('mothername')->nullable();
            $table->string('spousename')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('date_of_birthspouse')->nullable();
            $table->string('marriageday')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('nid_number')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('profession')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('office_address')->nullable();
            $table->string('password')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_address')->nullable();
            $table->string('category_of_ownership')->nullable();
            $table->string('ownership_size')->nullable();
            $table->string('no_off_ownership')->nullable();
            $table->string('price_per_ownership')->nullable();
            $table->string('price_per_ownership_in_word')->nullable();
            $table->string('total_price')->nullable();
            $table->string('total_price_in_word')->nullable();
            $table->string('special_discount')->nullable();
            $table->string('special_discount_inword')->nullable();
            $table->string('mode_of_payment')->nullable();
            $table->string('booking_money')->nullable();
            $table->string('booking_money_inword')->nullable();
            $table->string('booking_money_date')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('no_o_installment')->nullable();
            $table->string('inst_permonth')->nullable();
            $table->string('main_amount')->nullable();
            $table->string('agreed_amount')->nullable();
            $table->string('in_stallment_start')->nullable();
            $table->string('in_stallment_to')->nullable();
            $table->string('description')->nullable();
            $table->string('nominee_name')->nullable();
            $table->string('nominee_number')->nullable();
            $table->string('relation_to_nominee')->nullable();
            $table->string('reference_name_a')->nullable();
            $table->string('reference_cell_numer_a')->nullable();
            $table->string('reference_name_b')->nullable();
            $table->string('reference_cell_numer_b')->nullable();
            $table->string('user_image')->nullable();
            $table->string('nominee_image')->nullable();
            $table->enum('status', ['pending', 'approved'])->default('pending');
            $table->unsignedBigInteger('sales_person_id')->nullable();
            $table->foreign('sales_person_id')->references('id')->on('sales_people')->onDelete('cascade');
            $table->unsignedBigInteger('teamleader_id')->nullable();
            $table->foreign('teamleader_id')->references('id')->on('team_leaders')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};