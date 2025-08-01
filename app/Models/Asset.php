<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    /** @use HasFactory<\Database\Factories\AssetFactory> */
    use HasFactory;

    protected $fillable = ['device_id', 'personal_id', 'branch_id', 'user_id'];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public function personal()
    {
        return $this->belongsTo(Personal::class, 'personal_id');
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class, 'branch_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
