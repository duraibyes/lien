<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyContactsTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('company_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('contact_type')->nullable();

            $table->enum('type', ['0', '1'])->default(1)->comment('0 => Customer, 1 => Industry');

            $table->string('title')->nullable();

            $table->string('title_other')->nullable();

            $table->string('first_name')->nullable();

            $table->string('last_name')->nullable();

            $table->string('email')->nullable();

            $table->string('phone')->nullable();

            $table->string('cell')->nullable();

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
        Schema::dropIfExists('company_contacts');
    }
}
