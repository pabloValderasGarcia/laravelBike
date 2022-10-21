<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory; // TRAIT
    
    // protected $table = 'bike'; // SI NO TENGO ESTO, SERÍA bikes
    
    public $timestamps = false; // NO QUEREMOS timestamps
    
    protected $fillable = ['name'];
}
