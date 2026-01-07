<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJointPaymentAuthorizationsTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('joint_payment_authorizations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('project_id')->index()->unsigned()->unique();

            $table->string('Company')->nullable();

            $table->string('Supplier')->nullable();

            $table->text('Address')->nullable();

            $table->string('BusinessDescription')->nullable();

            $table->string('CustomerName')->nullable();

            $table->string('Subcontractor')->nullable();

            $table->text('CustomerAddress')->nullable();

            $table->string('CustomerCity')->nullable();

            $table->string('CustomerState')->nullable();

            $table->string('ContractorName')->nullable();

            $table->string('GeneralContractor')->nullable();

            $table->text('ContractorAddress')->nullable();

            $table->string('ContractorCity')->nullable();

            $table->string('ContractorState')->nullable();

            $table->string('ProjectName')->nullable();

            $table->string('Project')->nullable();

            $table->string('ContractorName2')->nullable();

            $table->decimal('ContractAmount', 8, 2)->nullable();

            $table->string('ContractorSigned')->nullable();

            $table->string('ContractorBy')->nullable();

            $table->string('ContractorITS')->nullable();

            $table->string('CompanySigned')->nullable();

            $table->string('CompanyBy')->nullable();

            $table->string('CompanyITS')->nullable();

            $table->string('UserSigned')->nullable();

            $table->string('UserBy')->nullable();

            $table->string('UserITS')->nullable();

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
        Schema::dropIfExists('joint_payment_authorizations');
    }
}
