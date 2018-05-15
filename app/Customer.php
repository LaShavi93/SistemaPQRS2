<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model{
    //protected $table = 'customers'; //Definimos la tabla usada por el modelo.
    use SoftDeletes; //Definimos que deseamos usar SoftDeletes (para no borrar registros, sino cambiar su estado) en este modelo.

    //Definimos los campos en los que podemos insertar registros de forma masiva desde el controlador.
    protected $fillable = ['personal_identity_number', 'first_name', 'last_name', 'phone', 'email'];

    //Definimos los campos que no podemos insertar (id, ya que es llave y auto incrementable).
    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function document(){
        return $this
            ->hasMany('App\Document');
    }
}