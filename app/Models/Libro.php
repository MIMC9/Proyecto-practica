<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id
 * @property $nombre
 * @property $categoria_id
 * @property $editorial_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Editoriale $editoriale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'categoria_id' => 'required',
		'editorial_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','categoria_id','editorial_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function editoriales()
    {
        return $this->hasOne('App\Models\Editoriale', 'id', 'editorial_id');
    }
    

}
