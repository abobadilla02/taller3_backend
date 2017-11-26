<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use Notifiable;

    public $table = 'Noticia';
    protected $primaryKey='id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
        public $fillable = [
        'titular',
        'entrada',
        'cuerpo',
        'imagen',
        'fecha',
        'usuario_id',
        'categoria_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function categoria()
    {
        return $this->belongsTo(\App\Models\Categoria::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuario()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
  
   
}