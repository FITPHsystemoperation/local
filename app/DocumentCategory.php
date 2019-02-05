<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentCategory extends Model
{
    protected $guarded = ['id'];

    public function documents()
    {
    	return $this->hasMany(Document::class, 'category_id');
    }
}
