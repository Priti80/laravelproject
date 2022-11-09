<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class blog extends Model
{
    use HasFactory;
    protected $fillable=['id','title','description','image'];


    function  getLimitBlogData(){
      return  Str::limit($this->description,200);
    }


}
