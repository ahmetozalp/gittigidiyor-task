<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupboard extends Model
{

	/**
	 * @var string
	 */
	protected $table = "beverage_cupboard";

	/**
	 * @var array
	 */
	protected $fillable = [
		'door',
		'cover'
	];

	public $timestamps = false;

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function Rack()
	{
		return $this->hasMany(Rack::class)->with('product');
	}
}
