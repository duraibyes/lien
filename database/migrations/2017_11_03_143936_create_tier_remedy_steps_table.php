<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTierRemedyStepsTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('tier_remedy_steps', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('tier_id')->index()->unsigned();

            $table->bigInteger('remedy_step_id')->index()->unsigned();

            $table->text('answer1')->nullable();

            $table->text('answer2')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');


            $table->foreign('tier_id')

                ->references('id')->on('tier_tables')

                ->onDelete('cascade');

            $table->foreign('remedy_step_id')

                ->references('id')->on('remedy_steps')

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
        Schema::dropIfExists('tier_remedy_steps');
    }
}
