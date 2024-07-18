<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company'); // Azienda
            $table->string('departure_station'); // Stazione di partenza
            $table->string('arrival_station'); // Stazione di arrivo
            $table->time('departure_time'); // Orario di partenza
            $table->time('arrival_time'); // Orario di arrivo
            $table->string('train_code')->unique(); // Codice Treno
            $table->integer('carriage_number'); // Numero Carrozze
            $table->boolean('on_time'); // In orario
            $table->boolean('cancelled'); // Cancellato
            $table->timestamps(); // Created_at e Updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
