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
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('namawisata');
            $table->text('alamat');
            $table->string('telp');
            $table->string('harga');
            $table->string('jamopr');
            $table->string('foto')->nullable();
            $table->string('fotodua')->nullable();
            $table->string('fototiga')->nullable();
            $table->string('fotoempat')->nullable();
            $table->text('body');
            $table->text('excerpt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wisatas');
    }
};
