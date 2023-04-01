<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studenten extends Model
{
    use HasFactory;
    //dit zet de standaard timestamps uit die laravel altijd er uit gooit
    public $timestamps = false;
}
