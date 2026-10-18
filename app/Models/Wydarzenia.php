<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table(name: 'wydarzenia', timestamps: false)]
class Wydarzenia extends Model
{
    public static function ostatnieWydarzenia () {
       
        return Wydarzenia::all();
    }
}
