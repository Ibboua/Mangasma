<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalog extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $foreignKey = 'product_id';

    public function inProduct()
    {
        return $this->hasMany(buy::class);
    }
}
