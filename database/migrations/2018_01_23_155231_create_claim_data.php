<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimData extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('claim_data', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('user_id')->index()->unsigned();

            $table->string('project_name')->nullable();

            $table->string('filling_type')->nullable();

            $table->string('other_data')->nullable();

            $table->string('contact_name')->nullable();

            $table->string('original')->nullable();

            $table->string('base_amount')->nullable();

            $table->string('extra_amount')->nullable();

            $table->string('payment')->nullable();

            $table->string('notice_step1')->nullable();

            $table->string('status')->nullable();

            $table->string('custom')->nullable();

            $table->string('myfile_date')->nullable();

            $table->string('preliminary')->nullable();

            $table->string('myfile_preliminary')->nullable();

            $table->string('lien')->nullable();

            $table->string('myfile_lien')->nullable();

            $table->string('myfile')->nullable();

            $table->string('construction')->nullable();

            $table->string('first_date')->nullable();

            $table->string('last_date')->nullable();

            $table->string('shipping')->nullable();

            $table->string('whole')->nullable();

            $table->string('myfile_next')->nullable();

            $table->string('project_state')->nullable();



            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');


            $table->foreign('user_id')

                ->references('id')->on('users')

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
        Schema::dropIfExists('claim_data');
    }
}
