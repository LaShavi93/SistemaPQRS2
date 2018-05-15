<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->integer('document_type_id')->unsigned();
            $table->integer('attached_document_id')->unsigned();    
            $table->integer('affair_id')->unsigned();    
            
            //--Foreign Key            
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('document_type_id')->references('id')->on('document_types')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('attached_document_id')->references('id')->on('attached_documents')->onDelete('restrict')->onUpdate('cascade');            
            $table->foreign('affair_id')->references('id')->on('affairs')->onDelete('restrict')->onUpdate('cascade');
            //--Foreign Key
                        
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
        Schema::dropIfExists('documents');
    }
}
//cahernandez@iegrupo.co
//internacinal de elctricas.