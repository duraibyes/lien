<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberBillingAddressesTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('member_billing_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('user_id')->nullable()->index()->unsigned();

            $table->string('first_name')->nullable();

            $table->string('last_name')->nullable();

            $table->text('address')->nullable();

            $table->string('city')->nullable();

            $table->bigInteger('state_id')->index()->unsigned();

            $table->integer('zip')->nullable();

            $table->bigInteger('phone')->nullable();

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
        Schema::dropIfExists('member_billing_addresses');
    }
}
