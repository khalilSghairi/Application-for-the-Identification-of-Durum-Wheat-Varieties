<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescriRapportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descri_rapports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rapport_id');
            $table->Integer('caractere_id');
            $table->string('etat_name');
            $table->Integer('value');
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
        Schema::dropIfExists('descri_rapports');
    }
}
