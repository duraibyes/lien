<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapCompanyContactsTable extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::create('map_company_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('company_id')->index()->unsigned();

            $table->bigInteger('company_contact_id')->index()->unsigned();

            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');


            $table->foreign('company_id')

                ->references('id')->on('companies')

                ->onDelete('cascade');

            $table->foreign('company_contact_id')

                ->references('id')->on('company_contacts')

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
        Schema::dropIfExists('map_company_contacts');
    }
}
