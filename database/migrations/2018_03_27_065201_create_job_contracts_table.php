<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobContractsTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('job_contracts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('job_info_id')->unsigned()->index();

            $table->bigInteger('industry_id')->unsigned()->index();

            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');


            $table->foreign('job_info_id')

                ->references('id')->on('job_infos')

                ->onDelete('cascade');

            $table->foreign('industry_id')

                ->references('id')->on('contacts')

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
        Schema::dropIfExists('job_contracts');
    }
}
