<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task'; 
    protected $fillable = ['id','name','email','nim','rombel','dokumen','keterangan']; 
    public $timestamps = false; 
}

