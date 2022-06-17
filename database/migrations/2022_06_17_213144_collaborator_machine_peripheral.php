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
        Schema::create('collaborator_machine_peripheral', function (Blueprint $table) {
            $table->foreignId('collaborator_id')->constrained();
            $table->foreignId('machine_id')->nullable()->constrained();
            $table->foreignId('peripheral_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaborator_machine_peripheral');
    }
};
