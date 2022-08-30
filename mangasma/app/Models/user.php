<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'id';
    public function inBuy()
    {
        return $this->hasMany(buy::class);
    }

    protected $fillable = ['name', 'email', 'password', 'role'];
}
