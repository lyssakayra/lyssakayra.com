<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToPaintingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paintings', function (Blueprint $table) {
            $table->foreign('collection_id')->references('id')->on('collections')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paintings', function (Blueprint $table) {
            $table->dropForeign('painting_collection_id_foreign');
        });
    }
}
