<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['slug', 'name'];

    public function parentId()
    {
        return $this->belongsTo(self::class);
		}
		
		public static function boot()
		{
				parent::boot();
		
				static::saving(function($model) {
						$model->slug = str_slug($model->name);
		
						return true;
				});
		}

}