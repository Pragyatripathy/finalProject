<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalTool extends Model
{
    public $timestamps = false;

    protected $table = "personal_tools";
    use HasFactory;
}
