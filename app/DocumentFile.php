<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentFile extends Model
{
	protected $guarded = ['id'];

    public function document()
    {
    	return $this->belongsTo(Document::class);
    }
}
