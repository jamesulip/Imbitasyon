<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invited', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('code', 100);
            $table->foreignId('response_id')->constrained();
            $table->foreignId('event_id')->constrained();
            $table->integer('attending');
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
        Schema::dropIfExists('invited');
    }
};
