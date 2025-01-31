<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    use HasFactory;

    protected $table = 'participants'; // Nama tabel di database

    protected $fillable = [
        'event_id',
        'name',
        'email',
        'phone',
        'registered_at',
    ];

    /**
     * Relasi dengan tabel events
     */
    public function event()
    {
        return $this->belongsTo(Events::class, 'event_id');
    }
}