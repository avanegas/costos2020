<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'user_id', 'name', 'slug', 'excerpt', 'body', 'status',
    ];

    // Relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    //relacion uno a uno polimorfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //Relacion muchos a muchos
    public function tags()
    {
        return $this->morphToMany(Tag::class,'taggable');
    }
}
