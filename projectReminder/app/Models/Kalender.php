<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kalender extends Model
{   
    protected $table = 'kalenders'; 
    protected $fillable = ['id','title', 'start_date', 'end_date'];
}