<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Tag extends Model
{
	protected $table = 'tags';

	protected $fillable = ['slug', 'name'];

	public static function boot()
	{
			parent::boot();
	
			static::saving(function($model) {
					$model->slug = str_slug($model->name);
	
					return true;
			});
	}    
}
