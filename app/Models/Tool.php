<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
/*/
    protected $fillable = [
        'name',
        'watt',
        'picture',
        'price',
        'seller',
        'rating',
        'serialnumber',
        'amountOfRatings',
    ];
/*/
    protected $table = "tools";
    public $timestamps = false;
    use HasFactory;
}
