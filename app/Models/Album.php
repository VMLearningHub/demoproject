<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'albums';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'artist', 'image', 'Metadata'];
    /**
     * Get all of the comments for the Album
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function songs(): HasMany
    {
        return $this->hasMany(Song::class, 'alubm_id', 'id');
    }

    /**
     * Get all of the comments for the Album
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'album_id', 'id')->orderBy('id', 'desc');
    }
}
