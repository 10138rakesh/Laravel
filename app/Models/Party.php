<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{    //table name
    protected $table = 'parties';

    //[primary key]
    protected $primaryKey = 'id';

    //fillable fields
    protected $fillable = array('name', 'email', 'phone', 'address');

}
