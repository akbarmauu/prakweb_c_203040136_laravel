<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    //protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFillter($query, array $fillters)
    {

        $query->when($fillters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search('search') . '%')
            ->orWhere('body', 'like', '%' . $search('search') . '%');
        }) ;       

        $query->when($fillters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                    $query->where('slug', $category);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
