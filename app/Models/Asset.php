<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
class Asset extends Model
{
    use HasFactory,HasUuids, HasRoles;
    protected $table = 'asset_types';
    protected $guarded = [];

}
