<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkProgres extends Model
{
    use HasFactory;

    public function link(){

        return $this->belong(Link::class, 'link_id');
    }

    public function progres(){

        return $this->belong(Progres::class, 'progres_id');
    }


}
