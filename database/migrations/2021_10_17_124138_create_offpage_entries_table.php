<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffpageEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offpage_entries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('value');
            $table->string('status');
            $table->string('notes');
            $table->bigInteger('project_id');
            $table->bigInteger('task_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offpage_entries');
    }
}
