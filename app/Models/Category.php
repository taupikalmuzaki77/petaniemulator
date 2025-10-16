<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = 'categories';
    
    protected $fillable = ['name', 'slug'];

    public $timestamps = false;

    // 1 kategori memiliki banyak Post
    public function posts(): HasMany{
        return $this->hasMany(Post::class);
    }
}
