<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemedyStepsTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('remedy_steps', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('remedy_date_id')->index()->unsigned();

            $table->bigInteger('remedy_id')->index()->unsigned();

            $table->text('short_description')->nullable();

            $table->longText('long_description')->nullable();

            $table->integer('years')->default(0);

            $table->integer('months')->default(0);

            $table->integer('days')->default(0);

            $table->integer('day_of_month')->default(0);

            $table->longText('notes')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');


            $table->foreign('remedy_date_id')

                ->references('id')->on('remedy_dates')

                ->onDelete('cascade');

            $table->foreign('remedy_id')

                ->references('id')->on('remedies')

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
        Schema::dropIfExists('remedy_steps');
    }
}
