<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Category;


class Picture extends Model
{
    protected $table = 'pictures';
    protected $guarded = [];


    public function category(){
        return $this->belongsTO(Category::class);
    }
}