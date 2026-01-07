<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompanyPhoneToLien extends Migration
{
    /**
     * Run the migrations.

     *

     * @return void
     */
    public function up()
    {
        Schema::table('lien_providers', function (Blueprint $table) {
            $table->bigInteger('companyPhone')->nullable()->after('company');
        });
    }

    /**
     * Reverse the migrations.

     *

     * @return void
     */
    public function down()
    {
        Schema::table('lien_providers', function (Blueprint $table) {
            $table->dropColumn('companyPhone');
        });
    }
}
