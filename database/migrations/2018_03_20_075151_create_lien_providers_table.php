<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLienProvidersTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('lien_providers', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('company');

            $table->string('firstName');

            $table->string('lastName');

            $table->text('address');

            $table->string('city');

            $table->bigInteger('stateId')->index()->unsigned();

            $table->bigInteger('zip');

            $table->string('phone');

            $table->string('fax')->nullable();

            $table->string('email');

            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');


            $table->foreign('stateId')

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
        Schema::dropIfExists('lien_providers');
    }
}
