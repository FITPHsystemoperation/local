<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function category()
    {
    	return $this->belongsTo(DocumentCategory::class, 'document_category_id');
    }
}