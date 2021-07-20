<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Song extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'songs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['alubm_id', 'name', 'artist', 'song_path', 'Metadata'];

    /**
     * Get the album that owns the Song
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function album(): BelongsTo
    {
        return $this->belongsTo(User::class, 'alubm_id', 'id');
    }

    /**
     * Get all of the comments for the Song
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'song_id', 'id')->orderBy('id', 'desc');
    }
}
