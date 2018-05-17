<?php

use Illuminate\Database\Seeder;
use App\Affair;
use App\DocumentType;

class DocumentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        

        //P: Preguntas
        $document_type = new \App\DocumentType();
        $document_type->name = 'Preguntas';
        $document_type->description = 'Preguntas variadas acerca del servicio y solicitudes';
        $document_type->response_time = '2'; //Se representa en numero de días.
        $document_type->save();  

        //Q: Quejas
        $document_type = new \App\DocumentType();
        $document_type->name = 'Quejas';
        $document_type->description = 'Quejas directas por prestación inadecuada del servicio';
        $document_type->response_time = '1'; //Se representa en numero de días.
        $document_type->save();  

        //R: Reclamos
        $document_type = new \App\DocumentType();
        $document_type->name = 'Reclamos';
        $document_type->description = 'Reclamos directos (petición de reingreso de dinero y otros servicios)';
        $document_type->response_time = '1'; //Se representa en numero de días.
        $document_type->save();  

        //S: Sugerencias
        $document_type = new \App\DocumentType();
        $document_type->name = 'Sugerencias';
        $document_type->description = 'Sugerencias por molestias en la prestación de algún servicio que no termina en un perjuicio directo';
        $document_type->response_time = '3'; //Se representa en numero de días.
        $document_type->save();  

        //Otros
        $document_type = new \App\DocumentType();
        $document_type->name = 'Otros';
        $document_type->description = 'Cuando no aplica ninguna de las opciones estándar del PQRS';
        $document_type->response_time = '4'; //Se representa en numero de días.
        $document_type->save();  
    }
}
