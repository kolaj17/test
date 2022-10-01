<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Off_Days extends Model
{
    use HasFactory;
//    public $timestamps = false;
    protected $table = 'off_days';


    protected $fillable = [
        'id',
        'date',
    ];
}
