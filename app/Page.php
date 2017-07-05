<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    public function blocks(){
        return $this->belongsToMany(Block::class);
    }
}
