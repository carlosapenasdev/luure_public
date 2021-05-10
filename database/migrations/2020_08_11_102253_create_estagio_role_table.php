<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstagioRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estagio_role', function (Blueprint $table) {
            $table->unsignedBigInteger('estagio_id');
            $table->unsignedBigInteger('role_id');

            $table->foreign('estagio_id')->references('id')->on('estagios')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

            $table->primary(['estagio_id','role_id']);
        });

        Artisan::call('db:seed', array('--class' => 'EstagioSeeder', '--force' => true));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estagio_role');
    }
}
