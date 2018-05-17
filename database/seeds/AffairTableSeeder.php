<?php

use Illuminate\Database\Seeder;
use App\Affair;
use App\DocumentType;

class AffairTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    
    public function run(){
        
        $dt_preguntas = DocumentType::where('name', 'Preguntas')->first();
        $dt_quejas = DocumentType::where('name', 'Quejas')->first();
        $dt_reclamos = DocumentType::where('name', 'Reclamos')->first();
        $dt_sugerencias = DocumentType::where('name', 'Sugerencias')->first();
        $dt_otros = DocumentType::where('name', 'Otros')->first();

        
        //Preguntas. 
        $affair = new \App\Affair();
        $affair->name = 'Activación de servicio básico';
        $affair->description = 'Dudas sobre activación de servicio básico';
        $affair->document_type()->associate($dt_preguntas);
        //$affair->document_type_id = $dt_preguntas;
        $affair->save();
        
        $affair = new \App\Affair();
        $affair->name = 'Activación de servicios Premium';
        $affair->description = 'Dudas sobre activación de servicio Premium';
        $affair->document_type()->associate($dt_preguntas);
        //$affair->document_type_id = $dt_preguntas;
        $affair->save();

        $affair = new \App\Affair();
        $affair->name = 'Desactivación o cancelación de servicios básicos';
        $affair->description = 'Dudas sobre desactivación de servicio básicos';
        $affair->document_type()->associate($dt_preguntas);
        //$affair->document_type_id = $dt_preguntas;
        $affair->save();

        $affair = new \App\Affair();
        $affair->name = 'Desactivación o cancelación de servicios Premium';
        $affair->description = 'Dudas sobre desactivación de servicio Premium';
        $affair->document_type()->associate($dt_preguntas);
        //$affair->document_type_id = $dt_preguntas;
        $affair->save();

        $affair = new \App\Affair();
        $affair->name = 'Otros';
        $affair->description = 'Otros';
        $affair->document_type()->associate($dt_preguntas);
        //$affair->document_type_id = $dt_preguntas;
        $affair->save();

        //Quejas.
        $affair = new \App\Affair();
        $affair->name = 'Fallas en el servicio';
        $affair->description = 'Quejas por fallas del servicio';
        $affair->document_type()->associate($dt_quejas);
        //$affair->document_type_id = $dt_quejas;
        $affair->save();
        
        $affair = new \App\Affair();
        $affair->name = 'Mal servicio al cliente';
        $affair->description = 'Quejas por fallas en el servicio al cliente';
        $affair->document_type()->associate($dt_quejas);
        //$affair->document_type_id = $dt_quejas;
        $affair->save();

        $affair = new \App\Affair();
        $affair->name = 'Otros';
        $affair->description = 'Otros';
        $affair->document_type()->associate($dt_quejas);
        //$affair->document_type_id = $dt_quejas;
        $affair->save();

        //Reclamos.
        $affair = new \App\Affair();
        $affair->name = 'Mala facturación';
        $affair->description = 'Cobro extra en facturación'; 
        $affair->document_type()->associate($dt_reclamos);      
        //$affair->document_type_id = $dt_reclamos; 
        $affair->save();

        $affair = new \App\Affair();
        $affair->name = 'Otros';
        $affair->description = 'Otros';
        $affair->document_type()->associate($dt_reclamos);
        //$affair->document_type_id = $dt_reclamos;
        $affair->save();

        //Sugerencias.
        $affair = new \App\Affair();
        $affair->name = 'Sugerencias generales';
        $affair->description = 'Sugerencias generales';
        $affair->document_type()->associate($dt_sugerencias);
        //$affair->document_type_id = $dt_sugerencias;
        $affair->save();

        //Otros.
        $affair = new \App\Affair();
        $affair->name = 'Sugerencias generales';
        $affair->description = 'Sugerencias generales';
        $affair->document_type()->associate($dt_otros);
        //$affair->document_type_id = $dt_otros;
        $affair->save();
    }
}
