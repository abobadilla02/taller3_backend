<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	use Notifiable;

	public $table = 'Categoria';
	protected $primaryKey='id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	public $fillable = [
		'descripcion',
	];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 **/
	public function noticia()
	{
		return $this->hasMany(\App\Models\Noticia::class);
	}
  
   
}