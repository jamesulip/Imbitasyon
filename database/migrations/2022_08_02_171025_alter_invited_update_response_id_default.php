<?php

use App\Models\Response;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invited', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('response_id')->default(Response::NO_REPONSE)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invited', function (Blueprint $table) {
            //
        });
    }
};
