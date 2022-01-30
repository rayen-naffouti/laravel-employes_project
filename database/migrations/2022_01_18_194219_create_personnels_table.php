<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->Increments('PERS_MAT_95');
            $table->integer('PERS_MAT_ACT');
            $table->string('PERS_NOM',100);
            $table->string('PERS_PRENOM',100);
            $table->date('PERS_DATE_NAIS');
            $table->enum('PERS_SEX_X', ['F', 'H']);
            
            $table->integer('PERS_CODE_QUALIF')->unsigned();
            $table->foreign('PERS_CODE_QUALIF')->references('QUALIF_CODE')->on('qualifications')->softDeletes();
            $table->integer('PERS_NATURAGENT_93')->unsigned();
            $table->foreign('PERS_NATURAGENT_93')->references('NATAGENT_CODE_93')->on('natureagents')->softDeletes();
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
        Schema::dropIfExists('personnels');
    }
}
