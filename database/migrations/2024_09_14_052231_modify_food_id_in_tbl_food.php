<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyFoodIdInTblFood extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_food', function (Blueprint $table) {
            // Ensure the column is an auto-incrementing primary key
            $table->increments('Food_ID')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_food', function (Blueprint $table) {
            // Reverse the change if necessary
            $table->integer('Food_ID')->change();
        });
    }
}

?>