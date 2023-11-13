<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'title'       ,
        'description'      ,
        'price'    ,
        'image'   ,
        'category_id'        ,
        'gender_id'      ,
        'type_id',        
    ];
    protected $table = 'products';
    // public $timestamps = false;
    use HasFactory;
}
