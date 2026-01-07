<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemedyQuestionsTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('remedy_questions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('state_id')->unsigned()->index();

            $table->bigInteger('project_type_id')->unsigned()->index();

            $table->bigInteger('tier_id')->unsigned()->index();

            $table->integer('question_order');

            $table->text('question')->nullable();

            $table->string('answer')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');


            $table->foreign('state_id')

                ->references('id')->on('states')

                ->onDelete('cascade');

            $table->foreign('project_type_id')

                ->references('id')->on('project_types')

                ->onDelete('cascade');

            $table->foreign('tier_id')

                ->references('id')->on('tier_tables')

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
        Schema::dropIfExists('remedy_questions');
    }
}
