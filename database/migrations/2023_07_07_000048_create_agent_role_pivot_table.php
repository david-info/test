<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentRolePivotTable extends Migration
{
    public function up()
    {
        Schema::create('agent_role', function (Blueprint $table) {
            $table->unsignedBigInteger('agent_id');
            $table->foreign('agent_id', 'agent_id_fk_8725520')->references('id')->on('agents')->onDelete('cascade');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id', 'role_id_fk_8725520')->references('id')->on('roles')->onDelete('cascade');
        });
    }
}
