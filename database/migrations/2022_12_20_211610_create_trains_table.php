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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 100);
            $table->string('Stazione_di_Partenza', 100);
            $table->string('Stazione_di_Arrivo', 100);
            $table->string('Orario_di_Partenza');
            $table->string('Orario_di_Arrivo');
            $table->string('Codice_Treno', 20);
            $table->string('Numero_Carrozze');
            $table->string('In_orario');
            $table->string('Cancellato');
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
        Schema::dropIfExists('trains');
    }
};
