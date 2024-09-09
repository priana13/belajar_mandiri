<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    public function user(){

        $this->belongsTo(User::class, 'user_id');
    }

    public function category(){

        $this->belongsTo(Category::class, 'link_category_id');
    }
}
