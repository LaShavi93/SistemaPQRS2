<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

//Modelo intermedio entre Documentos y Usuarios (Asignaciones)
class Assignment extends Model
{
    //protected $table = 'assignments'; //Definimos la tabla usada por el modelo.
    /*use SoftDeletes; //Definimos que deseamos usar SoftDeletes (para no borrar registros, sino cambiar su estado) en este modelo.

    //Definimos los campos en los que podemos insertar registros de forma masiva desde el controlador.
    protected $fillable = ['document_id', 'user_id'];

    //Definimos los campos que no podemos insertar (id, ya que es llave y auto incrementable).
    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];   */
    
    function document(){
        return $this
            ->belongsTo('App\Document');
    }

    public function user(){
        return $this
            ->belongsTo('App\User');
    } 
}