<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

class Region extends Model
{
    use HasFactory;
    use Loggable;

    public function zone()
{
    return $this->belongsTo(Zone::class, 'zoneID');
}


}
