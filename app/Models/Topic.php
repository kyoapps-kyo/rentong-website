<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topic extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'body', 'admin_user_id', 'category_id', 'last_edit_admin_user_id', 'order', 'excerpt', 'slug', 'img_id'];
}
