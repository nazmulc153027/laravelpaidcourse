<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_tables', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('votes');
            $table->binary('image');
            $table->boolean('confirmed');
            $table->char('name');
            $table->ipAddress('visitor');
            $table->longText('description');
            $table->string('city');
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
        Schema::dropIfExists('all_tables');
    }
}
