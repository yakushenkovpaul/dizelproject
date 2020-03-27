<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SourceProduct extends Model
{
	public function productId()
	{
    return $this->belongsTo(Product::class);
	}

	public function sourceId()
	{
    return $this->belongsTo(Source::class);
	}	
}
