<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Records', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Client');
            $table->string('Seller');
            $table->string('Description');
            $table->double('Value');
            $table->dateTimeTz('Data', 0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Records');
    }
}
