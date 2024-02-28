<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    
    //public $time = date('Y-m-d H:i:s');
    protected $fillable = ['name','description',];
    //protected $fillable = ['name','description','created_at','updated_at'];
}
