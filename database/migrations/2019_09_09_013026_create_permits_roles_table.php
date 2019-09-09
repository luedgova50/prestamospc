<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermitsRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permits_roles', function (Blueprint $table) {
            $table->unsignedInteger('roles_id');
            $table->foreign('roles_id', 'fk_permitsroles_roles')->references('id')->on('roles')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('permits_id');
            $table->foreign('permits_id', 'fk_permitsroles_permits')->references('id')->on('permits')->onDelete('restrict')->onUpdate('restrict');
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permits_roles');
    }
}
