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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('name', 25);
            $table->string('surname', 25);
            $table->string('password');
            $table->string('profile_image', 255);
            $table->foreignId('company_id')
            ->nullable()
            ->constrained('empresas')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('role_id')
            ->nullable()
            ->constrained('rolpermissions')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->boolean('active');

        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
