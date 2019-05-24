<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhoneFlagInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'phone_number', 'flag')) {
                $table->string('phone_number');
                $table->integer('flag');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('users', function(Blueprint $table) {
            if (Schema::hasColumn('users', 'phone_number', 'flag')) {
                $table->dropColumn('phone_number');
                $table->dropColumn('flag');
            }
        });
    }
}
