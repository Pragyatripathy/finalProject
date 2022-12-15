<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealTool extends Model
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
    protected $table = "real_tools";
    public $timestamps = false;
    use HasFactory;
}
