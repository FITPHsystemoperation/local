<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
	protected $guarded = ['id'];

    public function category()
    {
    	return $this->belongsTo(DocumentCategory::class, 'category_id');
    }

    public function files()
    {
    	return $this->hasMany(DocumentFile::class);
    }
}
