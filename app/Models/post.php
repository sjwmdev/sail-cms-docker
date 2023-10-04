<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    public const Published = 1;
    public const Draft = 0;

    protected $fillable = ["category_id","gallery_id","title","description","is_published","created_at","updated_at"];

    public function Gallery()
    {
      return $this->belongsTo(Gallery::class);    
    }  
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
