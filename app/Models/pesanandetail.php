<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanandetail extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(product::class);
    }

    public function Pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }

}