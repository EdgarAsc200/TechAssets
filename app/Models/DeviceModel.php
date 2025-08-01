<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceModel extends Model
{
    /** @use HasFactory<\Database\Factories\DeviceModelFactory> */
    use HasFactory;

    protected $fillable = ['category_id', 'brand', 'model', 'operating_system', 'architecture'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function devices()
    {
        return $this->hasMany(Device::class);
    }
}
