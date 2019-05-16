<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Product extends Model
    {

        /**
         * @var string
         */
        protected $table = 'product';

        /**
         * @var bool
         */
        public $timestamps = false;

        /**
         * @var array
         */
        protected $fillable = [
            'rack_id',
            'type'
        ];
    }
