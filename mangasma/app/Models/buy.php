<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buy extends Model
{
    use HasFactory;

    protected $foreignKey1 = 'user_id';
    protected $foreignKey2 = 'product_id';

    public function inUser()
    {
        return $this->belongsTo(user::class);
    }

    public function inProduct()
    {
        return $this->belongsTo(product::class);
    }
}
