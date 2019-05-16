<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rack extends Model
{

	/**
	 * @var string
	 */
	protected $table = 'beverage_rack';

	/**
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * @var array
	 */
	protected $fillable = [
		'cupboard_id',
		'quantity',
		'max_quantity'
	];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function Cupboard()
	{
		return $this->hasOne('App\Cupboard', 'id', 'cupboard_id');
		//return $this->hasMany(Cupboard::class);
	}

	public function Product(){
	    return $this->hasMany(Product::class);
    }
}
