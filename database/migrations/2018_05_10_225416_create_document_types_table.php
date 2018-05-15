<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', '100');
            $table->integer('affair_id')->unsigned();    
            
            //--Foreign Key
            $table->foreign('affair_id')->references('id')->on('affairs')->onDelete('restrict')->onUpdate('cascade');
            //--Foreign Key
            
            $table->text('description');
            $table->integer('response_time'); //Se representa en numero de días.            
            
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
        Schema::dropIfExists('document_types');
    }
}
