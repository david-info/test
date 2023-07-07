<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarchantRolePivotTable extends Migration
{
    public function up()
    {
        Schema::create('marchant_role', function (Blueprint $table) {
            $table->unsignedBigInteger('marchant_id');
            $table->foreign('marchant_id', 'marchant_id_fk_8725530')->references('id')->on('marchants')->onDelete('cascade');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id', 'role_id_fk_8725530')->references('id')->on('roles')->onDelete('cascade');
        });
    }
}
