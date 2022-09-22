<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'price','category_id','description','image'];


    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function scopeRecommend($query, $self_id) {
        return $query->where('id', '!=', $self_id);
    }
}
