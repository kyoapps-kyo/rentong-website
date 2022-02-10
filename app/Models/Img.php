<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    use HasFactory;

    public $timestamps = FALSE;

    protected $fillable = ['img', 'type'];

    public function topic(){
        return $this->belongsTo(Topic::class);
    }
}
