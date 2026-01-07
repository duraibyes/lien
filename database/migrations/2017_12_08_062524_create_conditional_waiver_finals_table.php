<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConditionalWaiverFinalsTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('conditional_waiver_finals', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('project_id')->index()->unsigned()->unique();

            $table->string('Payer')->nullable();

            $table->decimal('CheckAmount', 12, 2)->nullable();

            $table->string('Payee')->nullable();

            $table->string('Owner')->nullable();

            $table->string('ProjectName')->nullable();

            $table->text('ProjectAddress')->nullable();

            $table->decimal('DisputeAmount', 12, 2)->nullable();

            $table->date('SignedDate')->nullable();

            $table->string('SignedCompany')->nullable();

            $table->string('SignedAddress')->nullable();

            $table->string('ContractorState')->nullable();

            $table->string('ContractorCounty')->nullable();

            $table->string('Undersigned')->nullable();

            $table->string('ContractorTitle')->nullable();

            $table->string('ContractorCompanyName')->nullable();

            $table->string('ContractorWorkType')->nullable();

            $table->string('ContractorProjectAddress')->nullable();

            $table->decimal('ContractorAmount', 12, 2)->nullable();

            $table->decimal('ContractorPaid', 12, 2)->nullable();

            $table->string('ItemName1')->nullable();

            $table->string('WhatFor1')->nullable();

            $table->decimal('ContractPrice1', 12, 2)->nullable();

            $table->decimal('AmountPaid1', 12, 2)->nullable();

            $table->decimal('ThisPayment1', 12, 2)->nullable();

            $table->decimal('BalDue1', 12, 2)->nullable();

            $table->string('ItemName2')->nullable();

            $table->string('WhatFor2')->nullable();

            $table->decimal('ContractPrice2', 12, 2)->nullable();

            $table->decimal('AmountPaid2', 12, 2)->nullable();

            $table->decimal('ThisPayment2', 12, 2)->nullable();

            $table->decimal('BalDue2', 12, 2)->nullable();

            $table->string('ItemName3')->nullable();

            $table->string('WhatFor3')->nullable();

            $table->decimal('ContractPrice3', 12, 2)->nullable();

            $table->decimal('AmountPaid3', 12, 2)->nullable();

            $table->decimal('ThisPayment3', 12, 2)->nullable();

            $table->decimal('BalDue3', 12, 2)->nullable();

            $table->string('ItemName4')->nullable();

            $table->string('WhatFor4')->nullable();

            $table->decimal('ContractPrice4', 12, 2)->nullable();

            $table->decimal('AmountPaid4', 12, 2)->nullable();

            $table->decimal('ThisPayment4', 12, 2)->nullable();

            $table->decimal('BalDue4', 12, 2)->nullable();

            $table->string('ItemName5')->nullable();

            $table->string('WhatFor5')->nullable();

            $table->decimal('ContractPrice5', 12, 2)->nullable();

            $table->decimal('AmountPaid5', 12, 2)->nullable();

            $table->decimal('ThisPayment5', 12, 2)->nullable();

            $table->decimal('BalDue5', 12, 2)->nullable();

            $table->string('ContractorDate')->nullable();

            $table->string('NotaryDay')->nullable();

            $table->string('NotaryMonth')->nullable();

            $table->string('NotaryYear')->nullable();

            $table->string('NotarySigned')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');


            //Foreign Keys

            $table->foreign('project_id')

                ->references('id')->on('project_details')

                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.

     *

     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conditional_waiver_finals');
    }
}
