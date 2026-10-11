<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table('wydarzenia')]
class Wydarzenia extends Model
{
    public static function ostatnieWydarzenia () {
       
        return Wydarzenia::all();
    }
}
