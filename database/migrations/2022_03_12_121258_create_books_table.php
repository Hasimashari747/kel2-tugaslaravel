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
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id_buku');
            $table->String('title', 150);
            $table->String('penulis');
            $table->String('penerbit', 150);
<<<<<<< HEAD
            $table->String('authors');
=======
            $table->String('tahun_terbit', 5);
>>>>>>> 450b474a2dcd2767bd449e48e8c65f256d2c5f3f
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
        Schema::dropIfExists('books');
    }
};
