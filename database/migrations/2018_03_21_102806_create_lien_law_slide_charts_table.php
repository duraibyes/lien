<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLienLawSlideChartsTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('lien_law_slide_charts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('state_id')->unsigned()->index();

            $table->bigInteger('project_type')->unsigned()->index();

            $table->string('remedy')->nullable();

            $table->text('description')->nullable();

            $table->string('tier_limit')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');


            $table->foreign('state_id')

                ->references('id')->on('states')

                ->onDelete('cascade');

            $table->foreign('project_type')

                ->references('id')->on('project_types')

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
        Schema::dropIfExists('lien_law_slide_charts');
    }
}
