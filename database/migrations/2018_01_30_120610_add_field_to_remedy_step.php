<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToRemedyStep extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        //

        Schema::table('remedy_steps', function (Blueprint $table) {
            $table->string('status')->default(1)->after('notes');
        });
    }

    /**
     * Reverse the migrations.

     *

     * @return void
     */
    public function down()
    {
        Schema::table('remedy_steps', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
