<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Working_Hour extends Model
{
    use HasFactory;
    //    public $timestamps = false;
    protected $table = 'working_days';


    protected $fillable = [
        'id',
        'user_id',
        'hours',
        'date',
    ];
}
