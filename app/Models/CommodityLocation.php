<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class CommodityLocation extends Model
{
    use HasFactory,HasUuids;

    public function commodities()
    {
        return $this->hasOne(Commodity::class);
    }
}
