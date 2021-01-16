<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent', function (Blueprint $table)
        {
            $table->id();
            $table->string('agent_name');
            $table->string('phone')->nullable();
            $table->timestamps();
        });

        Schema::table('agent', function (Blueprint $table)
        {
            $table->foreignId('agency_id')->constrained('agency');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agent');
    }
}
