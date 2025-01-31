<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $table = 'events'; // Nama tabel di database

    protected $fillable = [
        'name',
        'description',
        'location',
        'quota',
        'event_date',
        'created_at',
        'updated_at'
    ];

    /**
     * Relasi dengan tabel participants
     */
    public function participants()
    {
        return $this->hasMany(Participants::class, 'event_id');
    }
}