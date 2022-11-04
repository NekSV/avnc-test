<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'turns_id'];

    public function turns(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Turns::class);
    }
}
