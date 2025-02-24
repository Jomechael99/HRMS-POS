<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoomType extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'room_id',
        'name',
        'description',
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
