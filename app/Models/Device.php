<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    /** @use HasFactory<\Database\Factories\DeviceFactory> */
    use HasFactory;

    protected $fillable = [
        'device_model_id', 'serial', 'price', 'memory_ram', 'storage',
        'antivirus_version', 'office_version', 'active_directory_enable'
    ];

    public function deviceModel()
    {
        return $this->belongsTo(DeviceModel::class);
    }

    public function asset()
    {
        return $this->hasOne(Asset::class);
    }
}
