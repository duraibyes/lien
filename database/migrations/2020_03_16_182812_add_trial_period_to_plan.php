<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrialPeriodToPlan extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        //

        Schema::table('plans', function (Blueprint $table) {
            $table->biginteger('trial_period')->default(7)->after('cost');
        });
    }

    /**
     * Reverse the migrations.

     *

     * @return void
     */
    public function down()
    {
        //

        Schema::table('plans', function (Blueprint $table) {
            $table->dropColumn('trial_period');
        });
    }
}
