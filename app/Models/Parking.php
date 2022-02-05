<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;
    protected $fillable = ['vehicle_id', 'zone_id', 'start', 'end'];
    protected $with = ['vehicle', 'zone'];
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
}
