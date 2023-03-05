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
        Schema::create('coordonnees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('contact');
            $table->string('fonction');
            $table->string('tel');
            $table->string('cordonne_mail');
            $table->string('commentaire');
            $table->foreignId('information_id')->constrained('informations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coordonnees');
    }
};
