<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCheckoutInfosToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('prenom')->after('password')->nullable();
            $table->string('nom')->after('prenom')->nullable();
            $table->string('entreprise_nom')->after('nom')->nullable();
            $table->string('adresse')->after('entreprise_nom')->nullable();
            $table->string('code_postal')->after('adresse')->nullable();
            $table->string('telephone')->after('code_postal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
