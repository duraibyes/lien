<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddUserIdForeignToUserDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Only proceed if there's no existing foreign key from user_details.user_id to users.id
        $database = DB::getDatabaseName();

        $constraints = DB::select(
            "SELECT CONSTRAINT_NAME FROM information_schema.KEY_COLUMN_USAGE WHERE TABLE_SCHEMA = ? AND TABLE_NAME = 'user_details' AND COLUMN_NAME = 'user_id' AND REFERENCED_TABLE_NAME = 'users'",
            [$database]
        );

        if (empty($constraints)) {
            Schema::table('user_details', function (Blueprint $table) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $database = DB::getDatabaseName();

        $constraints = DB::select(
            "SELECT CONSTRAINT_NAME FROM information_schema.KEY_COLUMN_USAGE WHERE TABLE_SCHEMA = ? AND TABLE_NAME = 'user_details' AND COLUMN_NAME = 'user_id' AND REFERENCED_TABLE_NAME = 'users'",
            [$database]
        );

        if (!empty($constraints)) {
            $constraintName = $constraints[0]->CONSTRAINT_NAME;

            Schema::table('user_details', function (Blueprint $table) use ($constraintName) {
                // Drop by constraint name if possible, otherwise try by column
                try {
                    $table->dropForeign($constraintName);
                } catch (\Exception $e) {
                    try {
                        $table->dropForeign(['user_id']);
                    } catch (\Exception $e) {
                        // Nothing to do
                    }
                }
            });
        }
    }
}
