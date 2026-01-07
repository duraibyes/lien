<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('user_id')->index()->unsigned();

            $table->string('company');

            $table->string('first_name')->nullable();

            $table->string('last_name')->nullable();

            $table->text('address');

            $table->string('city');

            $table->bigInteger('state_id')->index()->unsigned();

            $table->integer('zip');

            $table->bigInteger('phone');

            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');


            $table->foreign('user_id')

                ->references('id')->on('users')

                ->onDelete('cascade');

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
        Schema::dropIfExists('user_details');
    }
}
