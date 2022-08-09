<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tukang extends Model
{
    
    public function PenyediaTB() {
        return $this->belongsTo('App\PenyediaTB');
    }
}
