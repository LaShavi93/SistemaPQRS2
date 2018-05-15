<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model{
    //protected $table = 'answers'; //Definimos la tabla usada por el modelo.
    use SoftDeletes; //Definimos que deseamos usar SoftDeletes (para no borrar registros, sino cambiar su estado) en este modelo.

    //Definimos los campos en los que podemos insertar registros de forma masiva desde el controlador.
    protected $fillable = ['document_id', 'first_name', 'attached_document_id', 'user_id', 'answer'];

    //Definimos los campos que no podemos insertar (id, ya que es llave y auto incrementable).
    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function document(){
        return $this
            ->belongsTo('App\Document');
    }

    public function attached_document(){
        return $this
            ->belongsTo('App\AttachedDocument');
    }

    public function user(){
        return $this
            ->belongsTo('App\User');
    }
}