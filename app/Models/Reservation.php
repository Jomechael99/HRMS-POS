<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'room_id',
        'service_id',
        'is_paid',
        'is_discharge',
        'check_in',
        'check_out',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'reservation_services');
    }

    public function totalPrice(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->room->price + $this->services->sum('price')
        );
    }

    protected function casts(): array
    {
        return [
            'is_paid' => 'boolean',
            'is_discharge' => 'boolean',
        ];
    }
}
