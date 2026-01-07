<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AddIsMultipleFlagToPackages extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::table('packages', function ($table) {
            $table->enum('is_multiple', [0, 1, 2])->default(0)->after('status')->comment('0 => single, 1 => multiple, 2 => disabled');
        });
    }

    /**
     * Reverse the migrations.

     *

     * @return void
     */
    public function down()
    {
        Schema::table('packages', function ($table) {
            $table->dropColumn('is_multiple');
        });
    }
}
