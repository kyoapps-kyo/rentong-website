<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Encore\Admin\Traits\DefaultDatetimeFormat;

class Topic extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;

    protected $fillable = ['title', 'body', 'category_id', 'order', 'excerpt', 'slug', 'price_id'];

    public function price(){
        return $this->hasOne(Price::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function adminUser(){
        return $this->belongsTo(AdminUser::class);
    }

    public function lastEditAdminUser(){
        return $this->belongsTo(AdminUser::class,'last_edit_admin_user_id');
    }

    public function imgs(){
        return $this->hasMany(Img::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return str_replace('-', '/', $this->updated_at->toDateString());
    }
}
