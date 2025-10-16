<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genre extends Model
{
    protected $table = 'genres';
    
    protected $fillable = ['name', 'slug'];

    public $timestamps = false;

    // Setiap genre memiliki banyak Post dan setiap post memiiki banyak genre
    // Genre "Teknologi" bisa dimiliki oleh banyak post.
    // Post "Inovasi AI" bisa punya genre "Teknologi", "Berita", dll.
    public function posts(): BelongsToMany{
        return $this->belongsToMany(Post::class);
    }
}
