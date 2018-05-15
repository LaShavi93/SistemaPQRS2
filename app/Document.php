<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    //protected $table = 'documents'; //Definimos la tabla usada por el modelo.
    use SoftDeletes; //Definimos que deseamos usar SoftDeletes (para no borrar registros, sino cambiar su estado) en este modelo.

    //Definimos los campos en los que podemos insertar registros de forma masiva desde el controlador.
    protected $fillable = ['customer_id', 'document_type_id', 'attached_document_id', 'affair_id', 'description'];

    //Definimos los campos que no podemos insertar (id, ya que es llave y auto incrementable).
    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function customer(){
        return $this
            ->belongsToMany('App\Customer');
    }

    function document_type(){
        return $this
            ->belongsTo('App\DocumentType');
    }

    public function affair(){
        return $this
            ->belongsTo('App\Affair');
    } 

    function attached_document(){
        return $this
            ->belongsTo('App\AttachedDocument');
    }
}