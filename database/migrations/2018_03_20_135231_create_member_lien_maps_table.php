<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberLienMapsTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('member_lien_maps', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('user_id')->index()->unsigned();

            $table->bigInteger('lien_id')->index()->unsigned();

            $table->timestamps();


            $table->foreign('user_id')

                ->references('id')->on('users')

                ->onDelete('cascade');

            $table->foreign('lien_id')

                ->references('id')->on('lien_providers')

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
        Schema::dropIfExists('member_lien_maps');
    }
}
