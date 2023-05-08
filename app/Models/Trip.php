<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'start_date', 'end_date','destination_id','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
