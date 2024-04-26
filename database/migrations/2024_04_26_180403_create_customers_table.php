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
            $table->string('fatherName')->nullable();
            $table->string('motherName')->nullable();
            $table->string('spouseName')->nullable();
            $table->string('dateOfBirth')->nullable();
            $table->string('dateOfBirthSpouse')->nullable();
            $table->string('marriageDay')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('nidNumber')->nullable();
            $table->string('PassportNumber')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('profession')->nullable();
            $table->string('facebookId')->nullable();
            $table->string('presentAddress')->nullable();
            $table->string('permanentAddress')->nullable();
            $table->string('officeAddress')->nullable();
            $table->string('password')->nullable();
            $table->string('projectName')->nullable();
            $table->string('projectAddress')->nullable();
            $table->string('categoryOfOwnership')->nullable();
            $table->string('ownershipSize')->nullable();
            $table->string('noOffOwnership')->nullable();
            $table->string('pricePerOwnership')->nullable();
            $table->string('pricePerOwnershipInWord')->nullable();
            $table->string('totalPrice')->nullable();
            $table->string('totalPriceInWord')->nullable();
            $table->string('specialDiscount')->nullable();
            $table->string('specialDiscountInWord')->nullable();
            $table->string('modeOfPayment')->nullable();
            $table->string('bookingMoney')->nullable();
            $table->string('bookingMoneyInWord')->nullable();
            $table->string('bookingMoneyDate')->nullable();
            $table->string('paymentType')->nullable();
            $table->string('noOfInstallment')->nullable();
            $table->string('instPerMonth')->nullable();
            $table->string('mainAmount')->nullable();
            $table->string('agreedAmount')->nullable();
            $table->string('inStallmentStart')->nullable();
            $table->string('inStallmentTo')->nullable();
            $table->string('description')->nullable();
            $table->string('nomineeName')->nullable();
            $table->string('nomineeNumber')->nullable();
            $table->string('relationToNominee')->nullable();
            $table->string('referenceNameA')->nullable();
            $table->string('referenceCellNumerA')->nullable();
            $table->string('referenceNameb')->nullable();
            $table->string('referenceCellNumerB')->nullable();
            $table->string('userImage')->nullable();
            $table->string('nomineeImage')->nullable();
            $table->string('referenceCellNumerB')->nullable();
            $table->enum('status',['pending','approved'])->default('pending');
            $table->unsignedBigInteger('salesPerson_id')->nullable();
            $table->foreign('salesPerson_id')->references('id')->on('sales_people')->onDelete('cascade');
            $table->unsignedBigInteger('teamLeader_id')->nullable();
            $table->foreign('teamLeader_id')->references('id')->on('team_leaders')->onDelete('cascade');
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
