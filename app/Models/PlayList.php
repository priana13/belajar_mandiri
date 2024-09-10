<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayList extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function links(){

        return $this->hasMany(Link::class, 'play_list_id');
    }

    public function user(){

        return $this->belongsTo(User::class, 'user_id');
    }
}
