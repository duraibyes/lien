<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectIndustryContactMapsTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('project_industry_contact_maps', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('projectId')->unsigned()->index();

            $table->bigInteger('contactId')->unsigned()->index();

            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');


            $table->foreign('projectId')

                ->references('id')->on('project_details')

                ->onDelete('cascade');

            $table->foreign('contactId')

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
        Schema::dropIfExists('project_industry_contact_maps');
    }
}
