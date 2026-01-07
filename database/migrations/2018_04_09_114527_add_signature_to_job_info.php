<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSignatureToJobInfo extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::table('job_infos', function (Blueprint $table) {
            $table->string('signature')->nullable();

            $table->string('signature_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.

     *

     * @return void
     */
    public function down()
    {
        Schema::table('job_infos', function (Blueprint $table) {
            $table->dropColumn('signature');

            $table->dropColumn('signature_date');
        });
    }
}
