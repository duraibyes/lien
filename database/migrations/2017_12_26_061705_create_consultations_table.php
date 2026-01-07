<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('user_id')->unsigned()->index();

            $table->string('first_name');

            $table->string('last_name');

            $table->bigInteger('phone_number')->nullable();

            $table->string('email');

            $table->enum('type', [1, 2])->default(1)->comment('1 => Consultation, 2 => Collect Receivables');

            $table->decimal('claim_amount', 8, 2);

            $table->longText('description')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');


            //Foreign Keys

            $table->foreign('user_id')

                ->references('id')->on('users')

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
        Schema::dropIfExists('consultations');
    }
}
