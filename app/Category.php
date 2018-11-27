<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Picture;

class Category extends Model
{
    public function pictures(){
        return $this->hasMany(Picture::class);
    }


}
