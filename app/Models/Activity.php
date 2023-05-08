<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'date_time','trip_id'];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
