<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans_devices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('users_id');
            $table->foreign('users_id', 'fk_loansdevices_users')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('devices_id');
            $table->foreign('devices_id', 'fk_loansdevices_devices')->references('id')->on('devices')->onDelete('restrict')->onUpdate('restrict');
            $table->date('fecha_prestamo');
            $table->string('prestado_a', 100);
            $table->boolean('estado');
            $table->date('fecha_devolucion')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('loans_devices');
    }
}
