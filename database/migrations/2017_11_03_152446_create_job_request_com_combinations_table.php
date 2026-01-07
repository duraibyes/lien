<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobRequestComCombinationsTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('job_request_combinations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('state_id')->index()->unsigned();

            $table->bigInteger('role_id')->index()->unsigned();

            $table->bigInteger('type_id')->index()->unsigned();

            $table->bigInteger('property_type_id')->index()->unsigned();

            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');


            $table->foreign('state_id')

                ->references('id')->on('states')

                ->onDelete('cascade');

            $table->foreign('role_id')

                ->references('id')->on('tier_tables')

                ->onDelete('cascade');

            $table->foreign('type_id')

                ->references('id')->on('project_types')

                ->onDelete('cascade');

            $table->foreign('property_type_id')

                ->references('id')->on('property_types')

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
        Schema::dropIfExists('job_request_combinations');
    }
}
