<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldRemedyQuestion extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::table('remedy_questions', function (Blueprint $table) {
            $table->string('remedy_id')->nullable()->after('project_type_id');
        });
    }

    /**
     * Reverse the migrations.

     *

     * @return void
     */
    public function down()
    {
        Schema::table('remedy_questions', function (Blueprint $table) {
            $table->dropColumn('remedy_id');
        });
    }
}
