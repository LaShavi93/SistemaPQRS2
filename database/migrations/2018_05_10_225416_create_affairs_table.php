<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affairs', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('document_type_id')->unsigned();    
            
            //--Foreign Key
            $table->foreign('document_type_id')->references('id')->on('document_types')->onDelete('restrict')->onUpdate('cascade');
            //--Foreign Key

            $table->string('name', '100');
            $table->text('description');
            
            //--Campos por defecto.
            $table->softDeletes();
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
        Schema::dropIfExists('affairs');
    }
}
