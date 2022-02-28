<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    public $timestamps = FALSE;

    public function topic(){
        return $this->belongsTo(Topic::class);
    }
    public function getNumberAttribute()
    {
        return $this->price ? (intval($this->price/10000).' 万') : (intval($this->rent/10000).' 万');
    }
}
