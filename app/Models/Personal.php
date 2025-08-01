<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    /** @use HasFactory<\Database\Factories\PersonalFactory> */
    use HasFactory;

    protected $table = 'personales';
    protected $fillable = ['name', 'last_name_1', 'last_name_2', 'email'];

    public function assets()
    {
        return $this->hasMany(Asset::class, 'personal_id');
    }
}
