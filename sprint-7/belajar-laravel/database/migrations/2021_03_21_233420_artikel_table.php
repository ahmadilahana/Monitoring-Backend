<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('tb_artikel', function (Blueprint $table)
            {
                $table->id()->autoIncrement();
                $table->string('judul', 100);
                $table->text('subject');
                $table->foreignId('kat_artikel_id');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
