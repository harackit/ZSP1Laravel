<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Table(name: 'wydarzenia', timestamps: false)]
#[Fillable(['url_zdjecia', 'opis_wydarzenia', 'dodano_w_dniu'])]
class Wydarzenia extends Model
{
    public static function pokazWydarzenia () {
       
        return Wydarzenia::orderBy('dodano_w_dniu', 'desc')->orderBy('id', 'desc')->limit(3)->get();
    }
}
