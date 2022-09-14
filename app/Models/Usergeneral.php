<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usergeneral extends Model
{
    use HasFactory;

    protected $fillable=['Nombre','Edad','Direccion'];
}
