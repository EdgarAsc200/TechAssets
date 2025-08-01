<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    /** @use HasFactory<\Database\Factories\WarehouseFactory> */
    use HasFactory;

    protected $fillable = ['name', 'street', 'street_number', 'city', 'state', 'country'];

    public function assets()
    {
        return $this->hasMany(Asset::class, 'branch_id');
    }
}
