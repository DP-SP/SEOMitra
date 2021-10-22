<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeywordEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keyword_entries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('keyword_id');
            $table->string('volume');
            $table->string('ranking');
            //$table->timestamps('end_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keyword_entries');
    }
}
