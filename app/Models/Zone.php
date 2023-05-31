<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Haruncpi\LaravelUserActivity\Traits\Loggable;

class Zone extends Model
{
    use HasFactory;
    // use Loggable;

    public function regions()
{
    return $this->hasMany(Region::class, 'zoneID');
}

}
