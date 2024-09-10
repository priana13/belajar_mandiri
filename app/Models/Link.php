<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){

        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(){

       return $this->belongsTo(LinkCategory::class, 'link_category_id');
    }

    
    public function play_list(){

        return $this->belongsTo(PlayList::class, 'play_list_id');
     }

}
