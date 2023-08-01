<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Haruncpi\LaravelUserActivity\Traits\Loggable;

class Price extends Model
{
    use HasFactory;
    // use Loggable;
    protected $fillable = ['cropID', 'regionID', 'maxprice'];

    public function crop()
    {
        return $this->belongsTo(Crop::class, 'cropID');
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class, 'agencyID');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'regionID');
    }


}
