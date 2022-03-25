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
        Schema::create('rolpermissions', function (Blueprint $table) {

            $table->foreignId('rol_id')
            ->nullable()
            ->constrained('roles')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('permission_id')
            ->nullable()
            ->constrained('permissions')
            ->cascadeOnUpdate()
            ->nullOnDelete();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rolpermissions');
    }
};
