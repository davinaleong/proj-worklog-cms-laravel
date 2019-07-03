<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('log_entry_id', false, true);
            $table->integer('creator_id', false, true);
            $table->string('title_item')->nullable();
            $table->string('code_project')->nullable();
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
        Schema::dropIfExists('entry_items');
    }
}
