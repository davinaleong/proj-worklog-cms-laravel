<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDayTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_day_type')->nullable();
            $table->string('code_day_type')->nullable();
            $table->string('icon_fa')->nullable();
            $table->string('color_hex')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('day_types');
    }
}
