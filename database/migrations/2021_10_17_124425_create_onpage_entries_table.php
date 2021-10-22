<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnpageEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onpage_entries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('page');
            $table->string('url')->nullable();
            $table->string('title');
            $table->string('description');
            $table->boolean('is_active');
            $table->bigInteger('project_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onpage_entries');
    }
}
