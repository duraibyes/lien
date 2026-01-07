<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLienBoundSummariesTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('lien_bound_summaries', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('state_id')->index()->unsigned();

            $table->bigInteger('project_type_id')->index()->unsigned();

            $table->longText('rights_available');

            $table->longText('claimant');

            $table->longText('prelim_notice');

            $table->longText('other_notice');

            $table->longText('lien');

            $table->longText('suit');

            $table->longText('notes')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.

     *

     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lien_bound_summaries');
    }
}
