<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('company')->nullable();

            $table->string('website')->nullable();

            $table->text('address')->nullable();

            $table->string('city')->nullable();

            $table->bigInteger('state_id')->index()->unsigned();

            $table->bigInteger('zip')->nullable();

            $table->string('phone')->nullable();

            $table->string('fax')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');


            $table->foreign('state_id')

                ->references('id')->on('states')

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
        Schema::dropIfExists('companies');
    }
}
