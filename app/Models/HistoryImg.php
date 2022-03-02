<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryImg extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'imgs', 'year'];

    public function setImgsAttribute($imgs)
    {
        if (is_array($imgs)) {
            $this->attributes['imgs'] = json_encode($imgs);
        }
    }

    public function getImgsAttribute($imgs)
    {
        return json_decode($imgs, true);
    }
}
