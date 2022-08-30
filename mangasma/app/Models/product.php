<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public function inBuy()
    {
        return $this->hasMany(buy::class);
    }

    public function inCatalog()
    {
        return $this->belongsTo(catalog::class);
    }
}
